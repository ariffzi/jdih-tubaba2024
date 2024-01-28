@extends('layouts.main')
@section('content')
    <!-- ======================== jenis produk hukum ========================= -->
    <section class="margin-top pt-lg-3 pt-md-3 pt-5">
        <div class="page-detail-produk container">
            <div id="owl-jenis-produk" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/instruksi.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/perbub.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/perda.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/kepbup.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/surat_edaran.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/keputusan_skpd.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/produk_hukum_pusat.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="#">
                            <img class="img-fluid" src="/assets/logo/produk_hukum_prov.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <!-- ======================== judul pages ========================= -->
    <section class="margin-top pages-all">
        <div class="container">
            <div class="head mb-2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 jud">Perpustakaan Hukum</div>
                    <div class="col-lg-6 col-md-6 col-12 text-end d-grid align-content-end">
                        <div class="jak">Bagian Hukum</div>
                        <div class="kab">Kabupaten Tulang Bawang Barat</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================== konten ========================= -->
    <section class="page-jenis-produk">
        <div class="konten container mt-lg-5 mt-md-3 mt-3">
            <div>
                <div class="filter-produk  mt-lg-5 mt-md-4 mt-3">
                    <form class="m-0 p-0">
                        <div class="box-cari ">
                            <div class="row box-cari-perpustakaan">

                                <div class="col-lg-2 col-md-12 col-12"></div>

                                <div class="col-lg-3 col-md-5 col-12 p-2">
                                    <!-- <div>halo</div> -->

                                    <div>
                                        <input class="form-control" type="text" placeholder="Kode dokumen"
                                            aria-label="default input example">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12 p-2">
                                    <!-- <div>halo</div> -->
                                    <div>
                                        <input class="form-control" type="text" placeholder="Judul dokumen"
                                            aria-label="default input example">
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-12 p-2">
                                    <a href="#">
                                        <button type="button" class="btn btn-filter">
                                            Cari <i class="ms-3 bi bi-search"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="col-lg-2 col-md-12 col-12"></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <section>
                <div class="data mt-lg-5 mt-md-2 mt-3">
                    <div class="table-responsive tabel-perpustakaan">
                        <table id="tablePerpustakaan" class="table table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Gambar</th>
                                    <th class="jud" scope="col">Judul</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Dilihat</th>
                                    <th scope="col">Diunduh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1055</td>
                                    <td>
                                        <div class="card">
                                            <img class="img-fluid" src="/assets/logo/pdf-icon.svg" alt="">
                                        </div>
                                    </td>
                                    <td class="jud">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </td>

                                    <td><a href="/detail-buku">Lihat</a></td>
                                    <td>269</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>1056</td>
                                    <td>
                                        <div class="card">
                                            <img class="img-fluid" src="/assets/img/TUBABA-1.jpeg" alt="">
                                        </div>
                                    </td>
                                    <td class="jud">
                                        Eveniet cumque consequuntur
                                        atque facilis, sunt voluptas, aliquid, eaque accusantium culpa ratione hic
                                        reprehenderit numquam nesciunt voluptatem ipsam. Nostrum maiores iure accusantium.
                                    </td>

                                    <td><a href="/detail-buku">Lihat</a></td>
                                    <td>372</td>
                                    <td>78</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </section>
@endsection
