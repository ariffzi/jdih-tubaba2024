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
                    <div class="col-lg-6 col-md-6 col-12 jud">Produk Hukum</div>
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
                        <div class="box-cari row">
                            <div class="col-lg-2 col-md-12 col-12"></div>

                            <div class="col-lg-3 col-md-5 col-12 p-2">
                                <!-- <div>halo</div> -->

                                <select class="form-select ps-lg-4 pe-lg-4">
                                    <option selected disabled>Jenis Peraturan</option>
                                    <option value="1">Perda</option>
                                    <option value="2">Perbub</option>
                                    <option value="3">SK Bupati</option>
                                    <option value="4">dst</option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 p-2">
                                <!-- <div>halo</div> -->
                                <select class="form-select ps-lg-4 pe-lg-4">
                                    <option selected disabled>Tahun</option>
                                    <option value="1">2023</option>
                                    <option value="2">2022</option>
                                    <option value="3">2021</option>
                                    <option value="4">2020</option>
                                    <option value="5">2019</option>
                                    <option value="6">dst</option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-3 col-12 p-2">
                                <a href="#">
                                    <button type="button" class="btn btn-filter">
                                        <i class="bi bi-funnel me-3"></i> Filter
                                    </button>
                                </a>
                            </div>

                            <div class="col-lg-2 col-md-12 col-12"></div>
                        </div>
                    </form>
                </div>
            </div>

            <section>
                <div class="data mt-lg-5 mt-md-2 mt-3">
                    <div class="table-responsive">
                        <table id="tableProduk" class="table table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Ditetapkan</th>
                                    <th scope="col">Diundangkan</th>
                                    <th class="jud" scope="col">Judul</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Dilihat</th>
                                    <th scope="col">Diunduh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>2023</td>
                                    <td>25 Dessember 2023</td>
                                    <td>25 Dessember 2023</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 23 Tahun 2023 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Mengubah</td>
                                    <td>
                                        <a href="#">Peraturan Bupati Nomor 12 Tahun 2009</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>269</td>
                                    <td>179</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>1</td>
                                    <td>2023</td>
                                    <td>20 Januari 2023</td>
                                    <td>25 Januari 2023</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 2 Tahun 2023 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Berlaku</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>187</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>23 Januari 2009</td>
                                    <td>23 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 12 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Diubah</td>
                                    <td>
                                        <a href="#">Peraturan Bupati Nomor 23 Tahun 2023</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>223</td>
                                    <td>65</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>2 Januari 2009</td>
                                    <td>2 Januari 2009</td>
                                    <td class="jud">
                                        Peraturan Bupati Nomor 1 Tahun 2009 Tentang Lorem ipsum
                                        dolor sit amet consectetur, adipisicing elit.
                                    </td>
                                    <td>Dicabut</td>
                                    <td>
                                        <a href="#">-</a>
                                    </td>
                                    <td><a href="#">Lihat</a></td>
                                    <td>125</td>
                                    <td>12</td>
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
