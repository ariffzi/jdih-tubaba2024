@extends('layouts.main')
@section('content')
    <!-- ======================== jenis produk hukum ========================= -->
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
    <section class="mt-lg-5 mt-md-4 mt-3 pages-all">
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

            <section>
                <div class="data mt-lg-5 mt-md-2 mt-3">
                    <div class="table-responsive">
                        <table id="tableProduk" class="table table-borderless">
                            <thead>
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        };

        $(document).ready(function() {
            console.log(getUrlParameter('param'));
            var tbprodukhukum = $("#tableProduk").DataTable({
                deferRender: true,
                processing: true,
                serverSide: true,
                bDestroy: true,
                order: [
                    [0, "desc"]
                ],
                pagingType: "simple_numbers",
                ajax: '/produk-hukum/show?param=' + getUrlParameter('param'),
                columns: [{
                    data: 'keterangan',
                }, ],
            });

            $('#dt-search-0').unbind();
            $('#dt-search-0').bind('change', function() {
                var levelID = $(this).val();
                if (levelID == 0) {
                    tbprodukhukum.search('').columns().search('').draw();
                } else {
                    tbprodukhukum.columns(0).search(levelID).draw();
                }
            });
        });
    </script>
@endpush
