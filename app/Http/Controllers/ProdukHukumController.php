<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukHukumController extends Controller
{
    public function search(Request $request)
    {
        $responses = Http::get('https://aplikasi.tubaba.go.id/api/jdih');
        $klasifikasi = Http::get('https://aplikasi.tubaba.go.id/api/jdih/klasifikasi');
        // $data_tahun = Http::get('https://aplikasi.tubaba.go.id/api/jdih/jumlah_tahun');
        // $data_jenis = Http::get('https://aplikasi.tubaba.go.id/api/jdih/jumlah_jenis');
        $data = collect(json_decode($klasifikasi->getBody()));
        $data1 = collect(json_decode($responses->getBody()));
        // $jumlah_tahun = collect(json_decode($data_tahun->getBody()));
        // $jumlah_jenis = collect(json_decode($data_jenis->getBody()));
        return view('produk-hukum', [
            'jenis' => $data,
            'judul' => $data1,
            // 'jumlah_tahun' => $jumlah_tahun,
            // 'jumlah_jenis' => $jumlah_jenis,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $responses = Http::get('https://aplikasi.tubaba.go.id/api/jdih');
        $klasifikasi = Http::get('https://aplikasi.tubaba.go.id/api/jdih/klasifikasi');
        // $data_tahun = Http::get('https://aplikasi.tubaba.go.id/api/jdih/jumlah_tahun');
        // $data_jenis = Http::get('https://aplikasi.tubaba.go.id/api/jdih/jumlah_jenis');
        $data = collect(json_decode($klasifikasi->getBody()));
        $data1 = collect(json_decode($responses->getBody()));
        // $jumlah_tahun = collect(json_decode($data_tahun->getBody()));
        // $jumlah_jenis = collect(json_decode($data_jenis->getBody()));
        return view('produk-hukum', [
            'jenis' => $data,
            'judul' => $data1,
            // 'jumlah_tahun' => $jumlah_tahun,
            // 'jumlah_jenis' => $jumlah_jenis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $id = $request->code;
        $responses = Http::get('https://aplikasi.tubaba.go.id/api/jdih/show?code=' . $id);
        $data = collect(json_decode($responses->getBody()));
        // dd($data);
        return view('detail-produk-hukum',  $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $responses = Http::get('https://aplikasi.tubaba.go.id/api/jdih');
        $data = collect(json_decode($responses->getBody()));
        // dd($data);
        return DataTables()->of($data->sortBy(
            [
                ['tahun_pengundangan', 'desc'],
                ['noPeraturan', 'asc'],
            ]
        ))
            ->addColumn('keterangan', function ($data) {
                $keterangan = '
                        <a href="/produk-hukum/detail?code=' . $data->idData . '">
                            <div class="card-tabel-produk p-md-4 p-3">
                                <h2>' . $data->jenis . ' <span><i class="bi bi-dot"></i></span> NOMOR ' . $data->noPeraturan . ' TAHUN ' . $data->tahun_pengundangan . '</h2>
                                <h1>' . $data->judul . '</h1>
                                    <table class="tabel-card-produk">
                                        <tr>
                                            <td>Ditetapkan</td>
                                            <td class="ps-3 pe-3">:</td>
                                            <td>
                                                ' . $data->tanggal_penetapan . '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diundangkan</td>
                                            <td class="ps-3 pe-3">:</td>
                                            <td>
                                            ' . $data->tanggal_pengundangan . '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td class="ps-3 pe-3">:</td>
                                            <td>' . $data->status . '</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td class="ps-3 pe-3">:</td>
                                            <td>
                                                <button class="btn btn-sm btn-keterangan">
                                                <!--  <a href="/contoh">
                                                    Perubahan
                                                    </a> -->
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <div>Lihat selengkapnya...</div>
                                    </div>
                            </div>
                        </-a>';

                return $keterangan;
            })
            ->rawColumns(['keterangan'])
            ->make(true);
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

    public function download(Request $request)
    {
        //
        $url = 'https://aplikasi.tubaba.go.id/storage/disk/jdih/file_peraturan/' . $request->dokumen;
        Http::post('https://aplikasi.tubaba.go.id/api/jdih/download', [
            'file' => $request->dokumen,
        ]);
        return response()->json([
            'url' => $url
        ]);
    }
}
