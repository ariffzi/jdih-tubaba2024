<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Facades\Agent;

class UserController extends Controller
{

    function __construct()
    {
        $now = Carbon::now()->setTimezone('Asia/Jakarta');
        $user_ip = request()->ip();
        $user_device = Agent::device();
        $user_browser = Agent::browser();
        $user_platform = Agent::platform();

        $date_now = $now->format('Y-m-d');
        $time_now = $now->format('H:i:s');
        // $path_now = public_path('content/' . $date_now . '');

        function counter($counter, $date_now, $date_from_array)
        {

            // dd(Storage::disk('public_html')->exists('content/hari_ini.json'));
            // dd($date_from_array);
            // $get_counter_all = file_get_contents('/content/total.json');
            $last_array = last($date_from_array);
            $last_array1 = last($last_array);
            $last_array2 = last($last_array1);

            if ($date_now == $last_array2['date']) {
                $data_counter = [
                    'count' => $counter
                ];
            } else {
                $data_counter = [
                    'count' => 1
                ];
            }
            $get_counter_all = Storage::disk('public_html')->get('content/total.json');
            $data_all = [
                'count' =>  json_decode($get_counter_all)->count + 1
            ];
            Storage::disk('public_html')->put('content/hari_ini.json', json_encode($data_counter));
            Storage::disk('public_html')->put('content/total.json', json_encode($data_all));
        }

        function ip_list($user_data)
        {
            $data = [
                'data' => $user_data
            ];
            // dd($data);
            Storage::disk('public_html')->put('content/ip_list.json', json_encode($data));
        }

        function data_check($list, $user_ip, $date_now, $time_now)
        {
            if ($list[$user_ip] ?? false) {
                if ($list[$user_ip][$date_now] ?? false) {
                    # code...
                    $data_from_list = end($list[$user_ip][$date_now]);
                    $date_from_list = end($list[$user_ip][$date_now])['date'];
                    $time_from_list = end($list[$user_ip][$date_now])['time'];
                    $current_time = (strtotime($time_now) - strtotime($time_from_list)) / 60;
                    if (($date_from_list == $date_now) && $current_time >= '20') {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return true;
                }
            } else {
                return true;
            }
        }

        $data_user_agen = [
            'ip' => $user_ip,
            'browser' => $user_browser,
            'os' => $user_platform,
            'date' => $date_now,
            'time' => $time_now
        ];

        if (!Storage::disk('public_html')->exists('content/hari_ini.json') && !Storage::disk('public_html')->exists('content/ip_list.json')) {
            counter(1, null, null);
            ip_list([
                $user_ip => [
                    $date_now => [
                        $data_user_agen
                    ]
                ]
            ]);
        } else {

            // dd(Storage::disk('public_html')->exists('content/hari_ini.json'));
            // dd(Storage::disk('public_html')->get('content/hari_ini.json'));
            $get_ip_list = Storage::disk('public_html')->get('content/ip_list.json');
            $array_ip_list = json_decode($get_ip_list, true)['data'];

            if (data_check($array_ip_list, $user_ip, $date_now, $time_now)) {

                $get_counter_day = Storage::disk('public_html')->get('content/hari_ini.json');
                $counter_data = json_decode($get_counter_day)->count + 1;
                counter($counter_data, $date_now, $array_ip_list);

                if (!array_key_exists($user_ip, $array_ip_list)) {
                    array_push(
                        $array_ip_list,
                        $array_ip_list[$user_ip][$date_now] = [$data_user_agen]
                    );
                } elseif (!array_key_exists($date_now, $array_ip_list[$user_ip])) {
                    array_push(
                        $array_ip_list,
                        $array_ip_list[$user_ip][$date_now] = [$data_user_agen]
                    );
                } else {
                    array_push($array_ip_list[$user_ip][$date_now], $data_user_agen);
                }
                unset($array_ip_list[0]);
                $send_data = $array_ip_list;
                ip_list($send_data);
            }
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klasifikasi = Http::get('https://aplikasi.tubaba.go.id/api/jdih/klasifikasi');
        $responses = Http::get('https://aplikasi.tubaba.go.id/api/jdih');
        $data_tahun = Http::get('https://aplikasi.tubaba.go.id/api/jdih/jumlah_tahun');
        $data_jenis = Http::get('https://aplikasi.tubaba.go.id/api/jdih/jumlah_jenis');
        $data = collect(json_decode($klasifikasi->getBody()));
        $data1 = collect(json_decode($responses->getBody()));
        // dd($data1);
        $jumlah_tahun = json_decode($data_tahun);
        // dd(json_decode($pengunjung));
        $jumlah_jenis = json_decode($data_jenis);
        return view('index', [
            'jenis' => $data,
            'data' => $data1->sortBy(
                [
                    ['noPeraturan', 'asc'],
                    ['tahun_pengundangan', 'desc']
                ]
            ),
            'data1' => $data1->sortBy(
                [
                    ['tahun_pengundangan', 'desc'],
                    ['noPeraturan', 'desc'],
                ]
            ),
            'jumlah_tahun' => $jumlah_tahun,
            'jumlah_jenis' => $jumlah_jenis,
        ]);
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function berita()
    {
        return view('berita');
    }

    public function berita_show(Request $request)
    {
        $tokens = file_get_contents(public_path('content/token_instagram.txt'));

        $responses = Http::withHeaders([
            'Accept' => '*/*',
        ])->get('https://graph.instagram.com/me/media?fields=id%2Cmedia_type%2Ccaption%2Cpermalink%2Cmedia_url%2Cthumbnail_url%2Ctimestamp&access_token=' . $tokens . '&limit=52');
        $datas = collect(json_decode($responses->getBody()));
        $data = collect($datas['data']);

        return DataTables()->of($data->sortBy(
            [
                ['timestamp', 'desc']
            ]
        ))
            ->addColumn('keterangan', function ($data) {
                $date = Carbon::parse($data->timestamp, 'UTC')->locale('id');
                $keterangan = '
                        <div class="card">
                            <a href="/baca-berita?code=' . $data->id . '">
                                <img class="img-fluid" src="' . $data->media_url . '" alt="" />
                                <div class="p-2">
                                    <div class="judul mt-2">
                                        ' . $data->caption . '
                                    </div>
                                    <div class="isi-berita">
                                        ' . $data->caption . '
                                    </div>
                                    <div class="text-end tgl mt-2">' . $date->isoFormat('dddd, D MMMM Y') . '</div>
                                </div>
                            </a>
                        </div>
                ';

                return $keterangan;
            })
            ->rawColumns(['keterangan'])
            ->make(true);
    }

    public function bacaBerita(Request $request)
    {
        $slug = $request->code;
        $tokens = file_get_contents(public_path('content/token_instagram.txt'));
        $responses = Http::withHeaders([
            'Accept' => '*/*',
        ])->get('https://graph.instagram.com/' . $slug . '?fields=id,username,media_type,caption,permalink,media_url,thumbnail_url,timestamp&access_token=' . $tokens . '');
        $data = collect(json_decode($responses->getBody()));
        // dd($data);
        // dd($data->where('slug', $slug));
        return view('baca-berita', ['data' => $data]);
    }

    public function ProdukHukum()
    {
        return view('produk-hukum');
    }

    public function lihatProdukHukum()
    {
        return view('detail-produk-hukum');
    }
    public function perpustakaan()
    {
        return view('perpustakaan');
    }
    public function lihatBuku()
    {
        return view('detail-buku');
    }

    public function sop()
    {
        return view('sop');
    }
    public function struktur()
    {
        return view('struktur-pengelola');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function visimisi()
    {
        return view('visi-misi');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
