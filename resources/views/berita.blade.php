@extends('layouts.main')
@section('content')
<!-- ======================== page berita ========================= -->
<section class="berita container margin-top">
    <div class="content">
        <div class="row">
            <div class="col-lg-9 col-md-7 col-6 jud">
                <div>
                    Berita Bagian Hukum Tubaba
                </div>

            </div>

            <div class="col-lg-3 col-md-5 col-6 src">
                <div class="m-0 p-0">
                    <div class="input-group input-group-sm p-lg-2">
                        <input type="text" class="form-control shadow-none" placeholder="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                        <span type="button" class="btn btn-md border border-1 input-group-text ms-2" id="inputGroup-sizing-sm">Cari</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5">
            <!-- foreach -->
            <div class="col-lg-3 col-md-4 col-12 mt-4">
                <div class="card">
                    <a href="#">
                        <img class="img-fluid" src="/assets/img/berita/apbt.jpeg" alt="" />
                        <div class="p-2">
                            <div class="judul mt-2">
                                Pemberian Nomor Register Peraturan Tiyuh tentang Anggaran Pendapatan dan Belanja Tiyuh
                                Tahun Anggaran 2024 Kecamatan Tulang Bawang Udik dan Kecamatan Tulang Bawang Tengah
                            </div>
                            {{-- <div class="isi-berita">
                                Pemberian Nomor Register Peraturan Tiyuh tentang Anggaran Pendapatan dan Belanja Tiyuh Tahun Anggaran 2024 Kecamatan Tulang Bawang Udik dan Kecamatan Tulang Bawang Tengah dengan melakukan fasilitasi dan sinkronisasi serta pembahasan terhadap hasil Evaluasi Kecamatan dan Review Inspektorat agar tidak bertentangan dengan peraturan yang lebih tinggi berdasarkan aturan yang berlaku di ruang Rapat Bagian Hukum pada hari Selasa tanggal 20 Februari 2024
                            </div> --}}
                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end foreach -->

            <div class="col-lg-3 col-md-4 col-12 mt-4">
                <div class="card">
                    <a href="#">
                        <img class="img-fluid" src="/assets/img/berita/penghasilan-asn.jpeg" alt="" />
                        <div class="p-2">
                            <div class="judul mt-2">
                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                            </div>
                            {{-- <div class="isi-berita">
                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN diruang Rapat Badan Keuangan dan Aset Daerah pada hari Rabu, 21 Februari 2024 yang di hadiri oleh Tim Pelaksana Tambahan Penghasilan ASN.
                            </div> --}}
                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 mt-4">
                <div class="card">
                    <a href="#">
                        <img class="img-fluid" src="/assets/img/berita/pengisian-kkp-ham.jpeg" alt="" />
                        <div class="p-2">
                            <div class="judul mt-2">
                                Koordinasi Pengisian KKP HAM
                            </div>
                            {{-- <div class="isi-berita">
                                Pada hari Rabu tgl 21 Februari 2024 Analis Hukum Ahli Muda Made Ita Pirliyanti, S.H..,MM menerima kunjungan dari Kementrian Hukum dan HAM dalam rangka koordinasi pengisian KKP HAM
                            </div> --}}
                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 mt-4">
                <div class="card">
                    <a href="#">
                        <img class="img-fluid" src="/assets/img/berita/rapat-disiplin.jpeg" alt="" />
                        <div class="p-2">
                            <div class="judul mt-2">
                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan Dinas Kesehatan
                            </div>
                            {{-- <div class="isi-berita">
                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan Dinas Kesehatan yang dihadiri oleh Inspektur, BKPSDM dan staft serta sekretaris Dinas Kesehatan dan staf di ruang Rapat Dinas Kesehatan pada tanggal 21 Februari 2024
                            </div> --}}
                            <div class="text-end tgl mt-2">17 November 2023</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link active" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
@endsection
