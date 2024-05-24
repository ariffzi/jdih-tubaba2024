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
                            <tbody>

                                {{-- foreach --}}
                                <tr>
                                    <td>
                                        <a href="/lihat-produk-hukum">
                                            <div class="card-tabel-produk p-md-4 p-3">
                                                <h2>PERATURAN BUPATI <span><i class="bi bi-dot"></i></span> NOMOR 1 TAHUN
                                                    2024</h2>
                                                <h1>PERBUP NOMOR 1 TAHUN 2024 TENTANG PENETAPAN DAN PENEGASAN BATAS TIYUH
                                                    WONOKERTO KECAMATAN TULANG BAWANG TENGAH</h1>

                                                <table class="tabel-card-produk">

                                                    <tr>
                                                        <td>Ditetapkan</td>
                                                        <td class="ps-3 pe-3">:</td>
                                                        <td>
                                                            12-12-2023
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diundangkan</td>
                                                        <td class="ps-3 pe-3">:</td>
                                                        <td>
                                                            12-12-2023
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td class="ps-3 pe-3">:</td>
                                                        <td>Berlaku</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keterangan</td>
                                                        <td class="ps-3 pe-3">:</td>
                                                        <td>
                                                            {{-- button ini ngelink ke peraturan yang di rubah cok --}}
                                                            <button class="btn btn-sm btn-keterangan">
                                                                <a href="/contoh">Perubahan</a>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="d-flex justify-content-end">
                                                    <div>Lihat selengkapnya...</div>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                {{-- end foreach --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </section>
@endsection

{{-- @push('script')
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

        $('.jenisUud').select2({
            placeholder: 'Cari Jenis Peraturan'
        });

        $('.tahun').select2({
            placeholder: 'Cari Tahun'
        });

        $('.judul').select2({
            placeholder: 'Cari Judul'
        });

        $('.jenisUud').change(function(e) {
            e.preventDefault();
            $('#tableProduk').DataTable().columns(1).search(e.currentTarget.value).draw()
            $('.jud').html(e.currentTarget.value)
        });
        $('.tahun').change(function(e) {
            e.preventDefault();
            $('#tableProduk').DataTable().columns(4).search(e.currentTarget.value).draw()
        });
        $('.judul').change(function(e) {
            e.preventDefault();
            $('#tableProduk').DataTable().columns(2).search(e.currentTarget.value).draw()
        });

        $('#tableProduk').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            paging: true,
            length: 10,
            pageLength: 20,
            buttons: ['copy', 'excel', 'csv', 'print'],
            order: [
                [0, "asc"]
            ],
            responsive: true,
            ajax: '/produk-hukum/show',
            columns: [{
                    'data': null,
                    'sortable': false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1
                    },

                },
                {
                    data: 'jenis',
                },
                {
                    data: 'judul',
                },
                {
                    data: 'noPeraturan',
                },
                {
                    data: 'tahun_pengundangan',
                },
                {
                    data: 'tanggal_pengundangan',
                },
                {
                    data: 'tanggal_penetapan',
                },
                {
                    data: 'status',
                },
                {
                    data: 'Keterangan',
                },
                {
                    data: 'detail',
                },
                {
                    data: 'view',
                },
                {
                    data: 'download',
                },
            ],
            sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
            language: {
                paginate: {
                    previous: '<i class="bi bi-chevron-double-left"></i>',
                    next: '<i class="bi bi-chevron-double-right"></i>',
                },
            },
        });

        $(document).ready(function() {
            if (getUrlParameter('param') != '') {
                if (getUrlParameter('judul') != '') {
                    $('#tableProduk').DataTable().column(1).search(getUrlParameter('param')).column(2).search(
                        getUrlParameter('judul')).draw();
                    $('.jud').html(getUrlParameter('param'))
                } else {
                    $('#tableProduk').DataTable().columns(1).search(getUrlParameter('param')).draw()
                    $('.jud').html(getUrlParameter('param'))
                }
            } else {
                $('#tbDokumenHukum').DataTable().columns(4).search('').draw()
                $('.jud').html('Produk Hukum')
            }
        });
    </script>
@endpush --}}
