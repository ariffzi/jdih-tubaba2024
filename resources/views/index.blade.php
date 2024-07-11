@extends('layouts.main')
@section('content')
    <!-- ======================== slide dashboard ========================= -->
    <section
        class="slide-dashboard d-flex justify-content-start justify-content-md-center justify-content-lg-center align-items-end">
        <div class="slide">
            <div id="owl-car-dashboard" class="owl-carousel owl-theme">
                <div class="item z-n1">
                    <img src="/assets/img/banner.jpg" alt="" />
                </div>
                <div class="item z-n1">
                    <img src="/assets/img/TUBABA-1.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="cari-produk-hukum z-1 p-lg-4 p-md-4 p-2">
            <div>
                <div class="d-flex justify-content-center align-items-center p-lg-3 pt-lg-0 p-md-0">
                    <span class="line-3"></span>
                    <label class="ps-3 pe-3 mb-lg-0 mb-md-0 mb-2">Cari Produk Hukum</label>
                    <span class="line-3"></span>
                </div>
                <form class="pt-lg-0 pt-md-3" action="">
                    <div class="box-cari d-lg-flex d-md-flex d-grid align-items-center p-lg-3 p-md-0 p-0">
                        <div class="col-lg-3 col-md-3 col-12 d-flex align-items-center ver p-2 ps-lg-0 ps-md-0 ps-2">
                            <select class="form-select" id="jenisPeraturan">
                                <option value="" disabled selected>Jenis Peraturan</option>
                                @foreach ($jenis as $j)
                                    <option value="{{ $j->nama_klasifikasi }}">{{ $j->nama_klasifikasi }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-lg-2 col-md-2 col-12 d-flex align-items-center ver p-2">
                            <input placeholder="Nomor" class="form-control" />
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 d-flex align-items-center ver p-2">
                            <input placeholder="Tahun" class="form-control" />
                        </div> --}}
                        <div class="col-lg-8 col-md-8 col-12 d-flex align-items-center ver p-2">
                            <input placeholder="Judul Peraturan" class="form-control" id="judulPeraturan" />
                        </div>
                        <div
                            class="col-lg-1 col-md-1 col-12 d-flex justify-content-end pe-lg-0 pe-md-0 pe-2 mt-lg-0 mt-md-0 mt-2">
                            <div class="cari">
                                {{-- <a href="#"> --}}
                                <button type="button" class="cari btn btn-cari ps-lg-4 pe-lg-4" id="cari">
                                    <i class="bi bi-arrow-right ps-lg-0 pe-lg-0 ps-md-0 pe-md-0 ps-4 pe-4"></i>
                                </button>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ======================== kategori produk hukum ========================= -->
    <section class="margin-top jenis-produk-hukum">
        <div class="container">
            <div class="mb-4 d-grid">
                <div class="judul-atas mb-2">Jenis Produk Hukum</div>
                <span class="line-2"></span>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=PERATURAN DAERAH KABUPATEN">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/perda.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=PERATURAN BUPATI">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/perbub.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=KEPUTUSAN BUPATI">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/kepbup.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=INSTRUKSI BUPATI">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/instruksi.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=SURAT EDARAN">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/surat_edaran.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=PERATURAN DPRD KABUPATEN">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/peraturan-dprd.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=KEPUTUSAN DPRD KABUPATEN">
                        <div class="p-lg-2 p-md-2 p-1">
                            <img class="img-fluid" src="/assets/logo/keputusan-dprd.jpg" alt="" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 m-0 p-lg-2 p-md-0 p-0">
                    <a href="produk-hukum?param=MEMORANDUM OF UNDERSTANDING ">
                        <div class="p-lg-2 p-md-2 p-1">
                            <!-- <div class="card p-1 p-md-2 p-lg-0"> -->
                            <img class="img-fluid" src="/assets/logo/kerjasama.jpg" alt="" />
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-lg-5 mt-md-4 mt-3">
                <div class="det">
                    <a href="/produk-hukum?param=">
                        <button type="button" class="btn btn-atas ps-lg-4 pe-lg-4">
                            Lihat Semua Produk Hukum
                            <i class="bi bi-arrow-right ms-3"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== Produk Hukum Update ========================= -->
    <section class="margin-top produk-update">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12 pe-lg-5 pe-md-0 pe-0 mb-4 d-flex align-items-center">
                        <div class="judul-atas">Produk Hukum Terbaru</div>
                        <span class="line-1 mt-auto"></span>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12 pe-lg-5 pe-md-0 pe-0">
                    <div class="produk-hukum-terbaru">
                        <div class="row">
                            <!-- foreach -->
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($data1 as $dt)
                                @if ($i++ < 5)
                                    <div class="col-12 mb-2">
                                        <a href="/produk-hukum/detail?code={{ $dt->idData }}">
                                            <div class="card bg-card p-3">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <div class="card card-icon p-lg-2 p-md-2 p-1 rounded-circle">
                                                            <img src="/assets/logo/pdf-icon.svg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="ket d-flex">
                                                            <div>{{ $dt->jenis }}</div>
                                                            <div class="ms-lg-2 ms-md-2 ms-1 me-lg-2 me-md-2 me-1">
                                                                |
                                                            </div>
                                                            <div>Nomor {{ $dt->noPeraturan }} Tahun
                                                                {{ $dt->tahun_pengundangan }}</div>
                                                        </div>
                                                        <div class="judul-peraturan mt-1 mb-1">
                                                            {{ $dt->judul }}
                                                        </div>

                                                        <div class="d-flex inf">
                                                            <div>Status <span>:</span> {{ $dt->status }}</div>
                                                            <div class="ms-auto">
                                                                Dilihat <span>:</span> {{ $dt->view }}
                                                            </div>
                                                            <div class="ps-lg-2 ps-md-2 ps-1 pe-lg-2 pe-md-2 pe-1">
                                                                |
                                                            </div>
                                                            <div>Diunduh <span>:</span> {{ $dt->download }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            <!-- end foreach -->
                            {{--
                            <div class="col-12 mb-2">
                                <a href="/lihat-produk-hukum">
                                    <div class="card bg-card p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="card card-icon p-lg-2 p-md-2 p-1 rounded-circle">
                                                    <img src="/assets/logo/pdf-icon.svg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="ket d-flex">
                                                    <div>SK Bupati</div>
                                                    <div class="ms-lg-2 ms-md-2 ms-1 me-lg-2 me-md-2 me-1">
                                                        |
                                                    </div>
                                                    <div>Nomor 22 Tahun 2023</div>
                                                </div>
                                                <div class="judul-peraturan mt-1 mb-1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Sequi id accusantium temporibus dignissimos
                                                    quis porro dolores iste incidunt consectetur totam!
                                                </div>

                                                <div class="d-flex inf">
                                                    <div>Status <span>:</span> Berlaku</div>
                                                    <div class="ms-auto">
                                                        Dilihat <span>:</span> 156
                                                    </div>
                                                    <div class="ps-lg-2 ps-md-2 ps-1 pe-lg-2 pe-md-2 pe-1">
                                                        |
                                                    </div>
                                                    <div>Diunduh <span>:</span> 38</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 mb-2">
                                <a href="/lihat-produk-hukum">
                                    <div class="card bg-card p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="card card-icon p-lg-2 p-md-2 p-1 rounded-circle">
                                                    <img src="/assets/logo/pdf-icon.svg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="ket d-flex">
                                                    <div>SK Bupati</div>
                                                    <div class="ms-lg-2 ms-md-2 ms-1 me-lg-2 me-md-2 me-1">
                                                        |
                                                    </div>
                                                    <div>Nomor 22 Tahun 2023</div>
                                                </div>
                                                <div class="judul-peraturan mt-1 mb-1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Sequi id accusantium temporibus dignissimos
                                                    quis porro dolores iste incidunt consectetur totam!
                                                </div>

                                                <div class="d-flex inf">
                                                    <div>Status <span>:</span> Berlaku</div>
                                                    <div class="ms-auto">
                                                        Dilihat <span>:</span> 156
                                                    </div>
                                                    <div class="ps-lg-2 ps-md-2 ps-1 pe-lg-2 pe-md-2 pe-1">
                                                        |
                                                    </div>
                                                    <div>Diunduh <span>:</span> 38</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 mb-2">
                                <a href="/lihat-produk-hukum">
                                    <div class="card bg-card p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="card card-icon p-lg-2 p-md-2 p-1 rounded-circle">
                                                    <img src="/assets/logo/pdf-icon.svg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="ket d-flex">
                                                    <div>SK Bupati</div>
                                                    <div class="ms-lg-2 ms-md-2 ms-1 me-lg-2 me-md-2 me-1">
                                                        |
                                                    </div>
                                                    <div>Nomor 22 Tahun 2023</div>
                                                </div>
                                                <div class="judul-peraturan mt-1 mb-1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Sequi id accusantium temporibus dignissimos
                                                    quis porro dolores iste incidunt consectetur totam!
                                                </div>

                                                <div class="d-flex inf">
                                                    <div>Status <span>:</span> Berlaku</div>
                                                    <div class="ms-auto">
                                                        Dilihat <span>:</span> 156
                                                    </div>
                                                    <div class="ps-lg-2 ps-md-2 ps-1 pe-lg-2 pe-md-2 pe-1">
                                                        |
                                                    </div>
                                                    <div>Diunduh <span>:</span> 38</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 mb-2">
                                <a href="/lihat-produk-hukum">
                                    <div class="card bg-card p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="card card-icon p-lg-2 p-md-2 p-1 rounded-circle">
                                                    <img src="/assets/logo/pdf-icon.svg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="ket d-flex">
                                                    <div>SK Bupati</div>
                                                    <div class="ms-lg-2 ms-md-2 ms-1 me-lg-2 me-md-2 me-1">
                                                        |
                                                    </div>
                                                    <div>Nomor 22 Tahun 2023</div>
                                                </div>
                                                <div class="judul-peraturan mt-1 mb-1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Sequi id accusantium temporibus dignissimos
                                                    quis porro dolores iste incidunt consectetur totam!
                                                </div>

                                                <div class="d-flex inf">
                                                    <div>Status <span>:</span> Berlaku</div>
                                                    <div class="ms-auto">
                                                        Dilihat <span>:</span> 156
                                                    </div>
                                                    <div class="ps-lg-2 ps-md-2 ps-1 pe-lg-2 pe-md-2 pe-1">
                                                        |
                                                    </div>
                                                    <div>Diunduh <span>:</span> 38</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-3 mt-md-3 mt-lg-0">
                    <div class="lihat-galeri-agenda">
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-12">
                                <a href="/galeri">
                                    <div class="lihat-galeri">
                                        <div class="txt-1 ps-lg-3 ps-md-4 ps-3 pt-lg-3 pt-md-2 pt-2">
                                            GALERI
                                        </div>
                                        <div class="txt-2">Lihat Galeri Kami</div>
                                        <div
                                            class="d-flex justify-content-center ps-lg-4 pe-lg-4 ps-md-3 pe-md-3 ps-0 pe-0">
                                            <img class="img-fluid" src="/assets/img/gallery.jpeg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-6 col-lg-12 mt-0 mt-md-0 mt-lg-4">
                                <div class="lihat-agenda">
                                    <a href="/perpustakaan">
                                        <div class="txt-1 ps-lg-3 ps-md-4 ps-3 pt-lg-3 pt-md-2 pt-2">
                                            PERPUSTAKAAN
                                        </div>
                                        <div class="txt-2">Lihat Perpustakaan Kami</div>
                                        <div
                                            class="d-flex justify-content-center ps-lg-4 pe-lg-4 ps-md-3 pe-md-3 ps-0 pe-0">
                                            <img class="img-fluid" src="/assets/img/perpus.jpg  " alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== Grafik Jumlah Produk Hukum ========================= -->
    <section class="margin-top grafik-produk-hukum">
        <div class="container">
            <div class="judul-atas-grafik mb-3 d-flex justify-content-center align-items-center">
                <span class="line-5"></span>
                <div class="ps-3 pe-3">Grafik Produk Hukum</div>
                <span class="line-5"></span>
            </div>
            <div class="konten-grafik">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="sub-judul-grafik text-center">
                            Produk Hukum per Tahun
                        </div>
                        <div class="info-grafik mt-lg-3 mt-md-0 mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-chartGrafis">
                                        <div class="wrapper">
                                            <canvas class="text-wrap" id="chartKategori"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                        <div class="sub-judul-grafik text-center">
                            Kategori Produk Hukum
                        </div>
                        <div class="info-grafik mt-lg-3 mt-md-0 mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-chartGrafis">
                                        <div class="wrapper">
                                            <canvas class="text-wrap" id="chartPertahun"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== Berita Terbaru ========================= -->
    <section class="margin-top berita-terbaru">
        <div class="container">
            <div class="d-grid align-items-center">
                <div class="judul-atas">Berita Terbaru</div>
                <span class="line-3"></span>
            </div>
            <div class="mt-3 grid-berbar">
                <div class="m-0 p-0 card-berbar">
                    <div class="p-0 m-0">
                        <a href="#">
                            <div class="card">
                                <img class="img-fluid" src="/assets/img/berita/apbt.jpeg" alt="" />
                                <div class="p-2">
                                    <div class="txt-1 mt-md-2 mt-lg-3">
                                        Pemberian Nomor Register Peraturan Tiyuh tentang Anggaran Pendapatan dan Belanja
                                        Tiyuh
                                        Tahun Anggaran 2024 Kecamatan Tulang Bawang Udik dan Kecamatan Tulang Bawang Tengah
                                    </div>
                                    <div class="d-flex justify-content-end txt-2 mt-2">
                                        <div>
                                            <i class="bi bi-calendar2-event me-2"></i>21 Februari 2024
                                        </div>
                                        <div class="ms-2 me-2 text-black-50">|</div>
                                        <div><i class="bi bi-eye me-1"></i> 53 Kali</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="m-0 p-0 card-berbar">
                    <div class="p-0 m-0">
                        <a href="#">
                            <div class="card">
                                <img class="img-fluid" src="/assets/img/berita/penghasilan-asn.jpeg" alt="" />
                                <div class="p-2">
                                    <div class="txt-1 mt-md-2 mt-lg-3">
                                        Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                    </div>
                                    <div class="d-flex justify-content-end txt-2 mt-2">
                                        <div>
                                            <i class="bi bi-calendar2-event me-2"></i>21 Februari 2024
                                        </div>
                                        <div class="ms-2 me-2 text-black-50">|</div>
                                        <div><i class="bi bi-eye me-1"></i> 42 Kali</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="m-0 p-0 card-berbar">
                    <div class="p-0 m-0">
                        <a href="#">
                            <div class="card">
                                <img class="img-fluid" src="/assets/img/berita/pengisian-kkp-ham.jpeg" alt="" />
                                <div class="p-2">
                                    <div class="txt-1 mt-md-2 mt-lg-3">
                                        Koordinasi Pengisian KKP HAM
                                    </div>
                                    <div class="d-flex justify-content-end txt-2 mt-2">
                                        <div>
                                            <i class="bi bi-calendar2-event me-2"></i>21 Februari 2024
                                        </div>
                                        <div class="ms-2 me-2 text-black-50">|</div>
                                        <div><i class="bi bi-eye me-1"></i> 73 Kali</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="m-0 p-0 card-berbar">
                    <div class="p-0 m-0">
                        <a href="#">
                            <div class="card">
                                <img class="img-fluid" src="/assets/img/berita/rapat-disiplin.jpeg" alt="" />
                                <div class="p-2">

                                    <div class="txt-1 mt-md-2 mt-lg-3">
                                        Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan Dinas
                                        Kesehatan
                                    </div>
                                    <div class="d-flex justify-content-end txt-2 mt-2">
                                        <div>
                                            <i class="bi bi-calendar2-event me-2"></i>21 Februari 2024
                                        </div>
                                        <div class="ms-2 me-2 text-black-50">|</div>
                                        <div><i class="bi bi-eye me-1"></i> 27 Kali</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-lihat-semua d-flex justify-content-center mt-4 mt-md-4 mt-lg-5">
                <a href="/berita">
                    <button type="button" class="btn btn-sendiri ps-lg-4 pe-lg-4 ps-md-3 pe-md-3 ps-3 pe-3">
                        Lihat berita terkini lainnya
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- ======================== testi profile ========================= -->
    <section class="margin-top dash-profil pt-5 pb-5 d-flex align-items-center">
        <div class="container  mt-5">
            <div class="row ps-lg-5">
                <div class="col-lg-4 pe-md-5">
                    <h4>TIM KAMI</h4>
                    <h3 class="mt-1">Bagian Hukum Pemerintah Kabupaten Tulang Bawang Barat</h3>
                    <p class="mt-3">Konsep NeNeMo harus menjadi komitmen dan gaya kerja kita sebagai ASN Di Kabupaten
                        Tulang Bawang Barat.</p>
                </div>

                <div class="col-lg-8 mt-md-0 mt-4">
                    <div id="owl-profil-dash" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp3.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp4.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp5.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp6.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp7.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp8.jpeg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dash-img ps-md-3">
                                <img class="img-fluid" src="/assets/img/pp9.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== testi profile OLD ========================= -->
    {{-- <section class="profil-testi margin-top">
        <div id="owl-profil-dash" class="owl-carousel owl-theme">
            <div class="item">
                <div class="row d-flex align-items-center justify-content-center m-0 p-0">
                    <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                        <div class="profil d-flex justify-content-center">
                            <img class="img-fluid rounded-circle p-5" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?q=80&w=2363&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" vh />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="ket text-center p-4">
                            <div class="mb-3 nama">Budi Sugiyanto, S.H., M.H.</div>
                            <div class="testi mb-3">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam quidem vero consequuntur hic est dignissimos labore
                                suscipit quasi animi rerum, facere quis quo quae distinctio
                                atque, doloribus quia enim minima?"
                            </div>
                            <div class="kepala">Kepala Bagian Hukum dan Kerjasama</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row d-flex align-items-center justify-content-center m-0 p-0">
                    <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                        <div class="profil d-flex justify-content-center">
                            <img class="img-fluid rounded-circle p-5" src="https://images.unsplash.com/photo-1546998590-6a6195049fa7?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" vh />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="ket text-center p-4">
                            <div class="mb-3 nama">NOVRIADI, S.H., M.M.</div>
                            <div class="testi mb-3">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam quidem vero consequuntur hic est dignissimos labore
                                suscipit quasi animi rerum, facere quis quo quae distinctio
                                atque, doloribus quia enim minima?"
                            </div>
                            <div class="kepala">Perancang Peraturan Per UU</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row d-flex align-items-center justify-content-center m-0 p-0">
                    <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                        <div class="profil d-flex justify-content-center">
                            <img class="img-fluid rounded-circle p-5" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" vh />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="ket text-center p-4">
                            <div class="mb-3 nama">MADE ITA PIRLIYANTI, S.H., M.M.</div>
                            <div class="testi mb-3">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam quidem vero consequuntur hic est dignissimos labore
                                suscipit quasi animi rerum, facere quis quo quae distinctio
                                atque, doloribus quia enim minima?"
                            </div>
                            <div class="kepala">Analis Hukum Muda</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row d-flex align-items-center justify-content-center m-0 p-0">
                    <div class="col-12 col-md-6 col-lg-6 m-0 p-0">
                        <div class="profil d-flex justify-content-center">
                            <img class="img-fluid rounded-circle p-5" src="https://images.unsplash.com/photo-1526510747491-58f928ec870f?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" vh />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="ket text-center p-4">
                            <div class="mb-3 nama">RIKA ELVIANA, S.E., M.M.</div>
                            <div class="testi mb-3">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam quidem vero consequuntur hic est dignissimos labore
                                suscipit quasi animi rerum, facere quis quo quae distinctio
                                atque, doloribus quia enim minima?"
                            </div>
                            <div class="kepala">Analis Kebijakan Ahli Muda</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======================== Info APK JDIH dan survey ========================= -->
    <section class="margin-top apk-survey pt-lg-5 pt-md-3 pt-3 pb-lg-5 pb-md-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="info-apk">
                        <div class="card">
                            <a href="#">
                                <img class="img-fluid" src="/assets/img/apk-jdih.svg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-lg-0 mt-md-3 mt-2">
                    <div class="survey p-3">
                        <div class="txt-1 mb-3">Survey Kepuasan Masyarakat</div>
                        <div class="card d-flex justify-content-center">
                            <canvas id="pie-chart"></canvas>
                        </div>
                        <div class="d-flex justify-content-end mt-lg-4">
                            <button type="button" class="btn btn-survey ps-lg-4 pe-lg-4" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Ikti Survey
                                <i class="bi bi-arrow-right ms-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Survey -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            Survey Layanan JDIH TUBABA
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bagaimana pendapat Saudara tentang pelayanan yang diberikan ?

                        <!-- Example split danger button -->
                        <div class="btn-group mt-lg-3">
                            <button type="button" class="btn btn-danger">
                                Beri penilaian
                            </button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Sesuai</a></li>
                                <li><a class="dropdown-item" href="#">Sangat Sesuai</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Tidak Sesuai</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== Link Terkait ========================= -->
    <section class="dash-link margin-top pb-5">
        <div class="container">
            <div class="head d-flex justify-content-center align-items-center pt-1 pb-1 mb-4">
                <span class="line-4"></span>
                <div class="ms-lg-3 ms-md-3 ms-2 me-lg-3 me-md-3 me-2">
                    Desa Sadar Hukum
                </div>
                <span class="line-4"></span>
            </div>

            <div class="desa-sadar-hukum">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://panaraganjayautama.desa.id/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">PANARAGAN JAYA UTAMA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://www.panaraganjayaindah.web.id/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">PANARAGAN JAYA INDAH</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://www.penumangan.desa.id/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">PENUMANGAN</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://www.gedungratu.desa.id/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">GEDUNG RATU</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://kagunganratu.digitaldesa.id/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">KAGUNGAN RATU</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://www.kibangmulyajaya.com/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">KIBANG MULYA JAYA</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">MULYO JADI</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="https://www.cahyourandu-tubaba.desa.id/">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">CAHYO RANDU</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-lg-4 mt-md-3 mt-3">
                        <a href="">
                            <div class="card p-md-3 p-3">
                                <img class="img-fluid" src="/assets/logo/logopemda.svg" alt="">
                                <h4 class="text-center mt-3">-</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="mt-4">

            <div class="d-flex link-terkait justify-content-center mt-lg-5">
                <div id="owl-link-terkait" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="link-jdih-nas p-2 p-md-2 p-lg-2">
                            <a href="https://www.bphn.go.id/">
                                <div class="card">
                                    <img class="img-fluid" src="/assets/logo/bhpn.png" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="link-jdih-nas p-2 p-md-2 p-lg-2">
                            <a href="https://jdihn.go.id/">
                                <div class="card">
                                    <img class="img-fluid" src="/assets/logo/jdihn.png" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="link-jdih-nas p-2 p-md-2 p-lg-2">
                            <a href="https://mahkamahagung.go.id/id">
                                <div class="card">
                                    <img class="img-fluid" src="/assets/logo/mahkamah-agung.png" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="link-jdih-nas p-2 p-md-2 p-lg-2">
                            <a href="https://www.kemendagri.go.id/">
                                <div class="card">
                                    <img class="img-fluid" src="/assets/logo/kemendagri.png" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="link-jdih-nas p-2 p-md-2 p-lg-2">
                            <a href="https://jdih.lampungprov.go.id/">
                                <div class="card">
                                    <img class="img-fluid" src="/assets/logo/prov-lampung.png" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#cari').click(function(e) {
                e.preventDefault();
                if ($('#jenisPeraturan').val() == null) {
                    var jenis = ''
                } else {
                    var jenis = $('#jenisPeraturan').val()
                }
                var judul = $('#judulPeraturan').val()
                console.log(jenis + judul);
                window.location.href = 'produk-hukum?param=' + jenis + '&judul=' + judul;
            });

            // grafik survey pengguna //
            new Chart(document.getElementById("pie-chart"), {
                type: "pie",
                data: {
                    labels: ["Sangat Puas", "Puas", "Tidak Puas"],
                    datasets: [{
                        backgroundColor: ["#EAD196", "#BF3131", "#7D0A0A"],
                        data: [418, 263, 50],
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                },
            });

            // grafik jumlah kategori produk hukum //
            new Chart(document.getElementById("chartKategori"), {
                type: "bar",
                data: {
                    labels: [
                        @foreach ($jumlah_tahun as $jt)
                            "{{ $jt->tahun_peraturan }}",
                        @endforeach
                    ],
                    datasets: [{
                        backgroundColor: [
                            "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45",
                            "#e48f45", "#e48f45",
                        ],
                        data: [
                            @foreach ($jumlah_tahun as $jt)
                                "{{ $jt->total }}",
                            @endforeach
                        ],
                    }, ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                    },
                    responsive: true,
                    indexAxis: "y",
                    maintainAspectRatio: false,
                },
            });

            // grafik jumlah produk hukum pertahun //
            new Chart(document.getElementById("chartPertahun"), {
                type: "bar",
                data: {
                    labels: [
                        @foreach ($jumlah_jenis as $jp)
                            "{{ $jp->jenis_peraturan }}",
                        @endforeach
                    ],
                    datasets: [{
                        backgroundColor: [
                            "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45",
                            "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45",
                            "#e48f45", "#e48f45", "#e48f45", "#e48f45", "#e48f45",
                        ],
                        data: [
                            @foreach ($jumlah_jenis as $jp)
                                "{{ $jp->total }}",
                            @endforeach
                        ],
                    }, ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                    },
                    responsive: true,
                    indexAxis: "y",
                    maintainAspectRatio: false,
                },
            });
        });
    </script>
@endpush
