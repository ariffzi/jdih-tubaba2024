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

        return DataTables()->of($data->sortBy(
            [
                ['tahun_pengundangan', 'desc'],
                ['noPeraturan', 'asc'],
            ]
        ))
            ->addColumn('Keterangan', function ($data) {
                $state = $data->status_perubahan;
                if ($state == 'Perubahan Peraturan') {
                    # code...
                    $color = 'success';
                    $button = '<a target="_blank" href="' . $data->urlDownload . '" class="btn btn-outline-' . $color . '">' . $data->status_perubahan . '</a>';
                } else {
                    $button = '';
                }
                return $button;
            })
            ->addColumn('detail', function ($data) {
                $button = '<a href="/produk-hukum/detail?code=' . $data->idData . '">Lihat</a>';
                return $button;
            })
            ->addColumn('download', function ($data) {
                if (($data->download == '') || ($data->download == NULL)) {
                    # code...
                    $download = 0;
                } else {
                    $download = $data->download;
                }
                $count = $download;
                return $count;
            })
            ->addColumn('view', function ($data) {
                if (($data->view == '') || ($data->view == NULL)) {
                    # code...
                    $view = 0;
                } else {
                    $view = $data->view;
                }
                $count = $view;
                return $count;
            })
            ->rawColumns(['Keterangan', 'detail', 'download', 'view'])
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
