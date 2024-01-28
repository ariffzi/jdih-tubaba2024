@extends('layouts.main')

@section('content')
    <!-- ======================== detail produk hukum ========================= -->
    <section class="margin-top pt-lg-3 pt-md-4 pt-5">
        <div class="page-detail-produk container">
            <div id="owl-jenis-produk" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/instruksi.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/perbub.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/perda.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/kepbup.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/surat_edaran.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/keputusan_skpd.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/produk_hukum_pusat.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/produk_hukum_prov.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="konten mt-lg-5 mt-md-4 mt-3">
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-12 judul-produk">
                        Keputusan Bupati Nomor 23 Tahun 2023 Tentang Lorem ipsum dolor,
                        sit amet consectetur adipisicing elit.
                    </div>
                </div>

                <div class="row mt-lg-5 col-md-12 col-12 mt-md-4 mt-3 m-0 p-0">
                    <div class="col-lg-5">
                        <div class="card card-pdf p-2">
                            <iframe src="/assets/produk/contoh.pdf" class="cont-pdf"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 col-12 ps-lg-5 ps-md-0 ps-0 mt-lg-0 mt-md-4 mt-3 m-0 p-0">
                        <table class="table ket">
                            <tbody>
                                <tr>
                                    <td>Jenis Peraturan</td>
                                    <td>:</td>
                                    <td>Keputusan Bupati</td>
                                </tr>
                                <tr>
                                    <td>Nomor</td>
                                    <td>:</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>Judul Peraturan</td>
                                    <td>:</td>
                                    <td>
                                        Keputusan Bupati Nomor 23 Tahun 2023 Tentang Lorem ipsum
                                        dolor, sit amet consectetur adipisicing elit.
                                    </td>
                                </tr>

                                <tr>
                                    <td>Tahun Peraturan</td>
                                    <td>:</td>
                                    <td>2023</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Penetapan</td>
                                    <td>:</td>
                                    <td>23 Februari 2023</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Pengundangan</td>
                                    <td>:</td>
                                    <td>23 Februari 2023</td>
                                </tr>

                                <tr>
                                    <td>Status Peraturan</td>
                                    <td>:</td>
                                    <td>Berlaku</td>
                                </tr>

                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="d-flex mt-lg-4">
                            <div class="flex-grow-1">
                                <a href="#">
                                    <button type="button" class="btn btn-unduh ps-lg-4 pe-lg-4">
                                        Download File
                                        <i class="bi bi-arrow-right ms-3"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="p-2 me-4 inf">
                                <i class="bi bi-eye me-3"></i> 105 kali
                            </div>
                            <div class="p-2 inf">
                                <i class="bi bi-download me-3"></i> 53 kali
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
