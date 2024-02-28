<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
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
        dd($data1);
        $jumlah_tahun = json_decode($data_tahun);
        // dd($data1);
        $jumlah_jenis = json_decode($data_jenis);
        return view('index', [
            'jenis' => $data,
            'data' => $data1->orderBy('noPeraturan', 'asc'),
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

    public function bacaBerita()
    {
        return view('baca-berita');
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
