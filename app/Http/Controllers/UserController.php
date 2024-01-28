<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
