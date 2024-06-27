@extends('layouts.main')
@section('content')
    <!-- ======================== page berita ========================= -->
    <section class="berita  margin-top m-0 p-0">
        <div class="container content">
            <div class="row">
                <div class="col-lg-9 col-md-7 col-6 jud">
                    <div>
                        Berita Bagian Hukum Tubaba
                    </div>
                </div>
            </div>

            <div>
                <table id="pageBerita" class="table table-borderless">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="row pb-5">

                        {{-- foreach --}}
                        {{-- <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/apbt.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Pemberian Nomor Register Peraturan Tiyuh tentang Anggaran Pendapatan
                                                dan Belanja Tiyuh
                                                Tahun Anggaran 2024 Kecamatan Tulang Bawang Udik dan Kecamatan
                                                Tulang Bawang Tengah
                                            </div>
                                            <div class="isi-berita">
                                                Pemberian Nomor Register Peraturan Tiyuh tentang Anggaran Pendapatan
                                                dan Belanja Tiyuh
                                                Tahun Anggaran 2024 Kecamatan Tulang Bawang Udik dan Kecamatan
                                                Tulang Bawang Tengah
                                                dengan melakukan fasilitasi dan sinkronisasi serta pembahasan
                                                terhadap hasil Evaluasi
                                                Kecamatan dan Review Inspektorat agar tidak bertentangan dengan
                                                peraturan yang lebih
                                                tinggi berdasarkan aturan yang berlaku di ruang Rapat Bagian Hukum
                                                pada hari Selasa
                                                tanggal 20 Februari 2024
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr> --}}
                        {{-- end foreach --}}


                        {{-- hapus --}}
                        {{-- <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/penghasilan-asn.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                            </div>
                                            <div class="isi-berita">
                                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                                diruang
                                                Rapat Badan Keuangan dan Aset Daerah pada hari Rabu, 21 Februari 2024 yang
                                                di hadiri
                                                oleh Tim Pelaksana Tambahan Penghasilan ASN.
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/pengisian-kkp-ham.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Koordinasi Pengisian KKP HAM
                                            </div>
                                            <div class="isi-berita">
                                                Pada hari Rabu tgl 21 Februari 2024 Analis Hukum Ahli Muda Made Ita
                                                Pirliyanti, S.H..,MM
                                                menerima kunjungan dari Kementrian Hukum dan HAM dalam rangka koordinasi
                                                pengisian KKP
                                                HAM
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/rapat-disiplin.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan
                                                Dinas Kesehatan
                                            </div>
                                            <div class="isi-berita">
                                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan
                                                Dinas Kesehatan
                                                yang dihadiri oleh Inspektur, BKPSDM dan staft serta sekretaris Dinas
                                                Kesehatan dan staf
                                                di ruang Rapat Dinas Kesehatan pada tanggal 21 Februari 2024
                                            </div>
                                            <div class="text-end tgl mt-2">17 November 2023</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/penghasilan-asn.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                            </div>
                                            <div class="isi-berita">
                                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                                diruang
                                                Rapat Badan Keuangan dan Aset Daerah pada hari Rabu, 21 Februari 2024 yang
                                                di hadiri
                                                oleh Tim Pelaksana Tambahan Penghasilan ASN.
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/pengisian-kkp-ham.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Koordinasi Pengisian KKP HAM
                                            </div>
                                            <div class="isi-berita">
                                                Pada hari Rabu tgl 21 Februari 2024 Analis Hukum Ahli Muda Made Ita
                                                Pirliyanti, S.H..,MM
                                                menerima kunjungan dari Kementrian Hukum dan HAM dalam rangka koordinasi
                                                pengisian KKP
                                                HAM
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/rapat-disiplin.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan
                                                Dinas Kesehatan
                                            </div>
                                            <div class="isi-berita">
                                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan
                                                Dinas Kesehatan
                                                yang dihadiri oleh Inspektur, BKPSDM dan staft serta sekretaris Dinas
                                                Kesehatan dan staf
                                                di ruang Rapat Dinas Kesehatan pada tanggal 21 Februari 2024
                                            </div>
                                            <div class="text-end tgl mt-2">17 November 2023</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/penghasilan-asn.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                            </div>
                                            <div class="isi-berita">
                                                Rapat pembahasan Rancangan Peraturan Bupati tentang Tambahan Penghasilan ASN
                                                diruang
                                                Rapat Badan Keuangan dan Aset Daerah pada hari Rabu, 21 Februari 2024 yang
                                                di hadiri
                                                oleh Tim Pelaksana Tambahan Penghasilan ASN.
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/pengisian-kkp-ham.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Koordinasi Pengisian KKP HAM
                                            </div>
                                            <div class="isi-berita">
                                                Pada hari Rabu tgl 21 Februari 2024 Analis Hukum Ahli Muda Made Ita
                                                Pirliyanti, S.H..,MM
                                                menerima kunjungan dari Kementrian Hukum dan HAM dalam rangka koordinasi
                                                pengisian KKP
                                                HAM
                                            </div>
                                            <div class="text-end tgl mt-2">21 Februari 2024</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-lg-3 col-md-6 col-12 mt-4">
                            <td>
                                <div class="card">
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/berita/rapat-disiplin.jpeg" alt="" />
                                        <div class="p-2">
                                            <div class="judul mt-2">
                                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan
                                                Dinas Kesehatan
                                            </div>
                                            <div class="isi-berita">
                                                Kepala bagian hukum menghadiri undangan Rapat Disiplin ASN dilingkungan
                                                Dinas Kesehatan
                                                yang dihadiri oleh Inspektur, BKPSDM dan staft serta sekretaris Dinas
                                                Kesehatan dan staf
                                                di ruang Rapat Dinas Kesehatan pada tanggal 21 Februari 2024
                                            </div>
                                            <div class="text-end tgl mt-2">17 November 2023</div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            // $("#pageBerita").DataTable({
            //     ordering: false,
            //     "lengthMenu": [8, 16, 32, 64, 128],
            //     "pageLength": 8
            // });

            var tbPageBerita = $("#pageBerita").DataTable({
                deferRender: true,
                processing: true,
                serverSide: true,
                bDestroy: true,
                "lengthMenu": [8, 16, 32, 64, 128],
                order: [
                    [1, "desc"]
                ],
                pagingType: "simple_numbers",
                ajax: '/berita/show',
                columns: [{
                    data: 'keterangan',
                }, ],
                createdRow: function(row, data, dataIndex) {
                    $(row).addClass('col-lg-3 col-md-6 col-12 mt-4');
                }
            });

            // $('#dt-search-0').unbind();
            // $('#dt-search-0').bind('change', function() {
            //     var levelID = $(this).val();
            //     if (levelID == 0) {
            //         tbPageBerita.search('').columns().search('').draw();
            //     } else {
            //         tbPageBerita.columns(0).search(levelID).draw();
            //     }
            // });
        });
    </script>
@endpush
