@extends('layouts.main')
@section('content')
    <section class="margin-top pt-lg-3 pt-md-3 pt-5">
        <div class="page-detail-produk container">
            <div id="owl-jenis-produk" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="/produk-hukum?param=INSTRUKSI%20BUPATI">
                            <img class="img-fluid" src="/assets/logo/instruksi.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="/produk-hukum?param=PERATURAN%20BUPATI">
                            <img class="img-fluid" src="/assets/logo/perbub.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="/produk-hukum?param=PERATURAN%20DAERAH%20KABUPATEN">
                            <img class="img-fluid" src="/assets/logo/perda.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="/produk-hukum?param=KEPUTUSAN%20BUPATI">
                            <img class="img-fluid" src="/assets/logo/kepbup.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="/produk-hukum?param=SURAT%20EDARAN">
                            <img class="img-fluid" src="/assets/logo/surat_edaran.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="produk-hukum?param=PERATURAN%20DPRD%20KABUPATEN">
                            <img class="img-fluid" src="/assets/logo/peraturan-dprd.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="produk-hukum?param=KEPUTUSAN%20DPRD%20KABUPATEN">
                            <img class="img-fluid" src="/assets/logo/keputusan-dprd.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-lg-3 p-md-1 p-1">
                        <a href="produk-hukum?param=MEMORANDUM%20OF%20UNDERSTANDING ">
                            <img class="img-fluid" src="/assets/logo/kerjasama.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- ======================== judul pages ========================= -->
    <section class="pages-all">
        <div class="container">
            <div class="head mb-2">
                <div class="row">
                    <div class="col-6 jud">SOP</div>
                    <div class="col-6 text-end d-grid align-content-end">
                        <div class="jak">Bagian Hukum</div>
                        <div class="kab">Kabupaten Tulang Bawang Barat</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-0 p-0 page-sop">
        <div class="container content">
            <div class="pb-md-5 pb-3">
                <div class="table-responsive">
                    <table id="pageSop" class="table ">
                        <thead>
                            <tr>
                                <th class="tbb-bold">Nomor</th>
                                <th class="tbb-bold">Judul SOP</th>
                            </tr>
                        </thead>
                        <tbody class="pb-5">
                            @php
                                $no = 1;
                            @endphp
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/1. SOP PERDA.pdf">

                                        <div class="judul p-1">
                                            Prosedur Pembuatan Peraturan Daerah
                                        </div>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/2. SOP PERBUP.pdf">
                                        <div class="judul p-1">
                                            Prosedur Pembuatan Peraturan Bupati
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/3. SOP KEPUTUSAN BUPATI.pdf">
                                        <div class="judul p-1">
                                            Prosedur Pembuatan Keputusan Bupati
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/4. SOP PERATURAN TIYUH.pdf">
                                        <div class="judul p-1">
                                            Prosedur Evaluasi, Klarifikasi dan Fasilitasi Peraturan di
                                            Tiyuh
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/5. SOP BANKUM.pdf">
                                        <div class="judul p-1">
                                            Prosedur Pelayanan Bantuan Hukum
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/6. SOP PELAYANAN KOREKSI DAN EVALUASI NASKAH PERJANJIAN.pdf">
                                        <div class="judul p-1">
                                            SOP Pelayanan Koreksi dan Evaluasi Rancangan Naskah
                                            Perjanjian (Contract Drafting)
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/7. SOP JDIH.pdf">
                                        <div class="judul p-1">
                                            Prosedur Jaringan Dokumentasi Dan Informasi Hukum
                                            (JDIH)
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center judul p-1">{{ $no++ }}</div>
                                </td>

                                <td>
                                    <a href="/assets/sop/8. SOP PENCATATAN& PUSTAKA PRODUK HUKUM.pdf">
                                        <div class="judul p-1">
                                            Prosedur Pencatatan Dan Pendataan Buku
                                            Pustaka/ Produk Hukum
                                        </div>
                                    </a>
                                </td>
                </div>
                </tr>
                <tr>
                    <td>
                        <div class="text-center judul p-1">{{ $no++ }}</div>
                    </td>

                    <td>
                        <a href="/assets/sop/9. SOP KEPUSTAKAAN HUKUMPRODUK HUKUM.pdf">
                            <div class="judul p-1">
                                Prosedur Kepustakaan Hukum/ Produk Hukum
                            </div>
                        </a>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $("#pageSop").DataTable({
                ordering: false,
                bLengthChange: false,
                // paging: false,
                // "lengthMenu": [8, 16, 32, 64, 128],
                "pageLength": 12,
                pagingType: 'simple_numbers'
            });

        });
    </script>
@endpush
