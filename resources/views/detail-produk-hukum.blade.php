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
                        {{ $judul_dokumen_perubahan }}
                    </div>
                </div>

                <div class="row mt-lg-5 col-md-12 col-12 mt-md-4 mt-3 m-0 p-0">
                    <div class="col-lg-5">
                        <div class="card card-pdf p-2">
                            <iframe src="https://aplikasi.tubaba.go.id/storage/disk/jdih/file_peraturan/{{ $dokumen }}#toolbar=0" class="cont-pdf"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 col-12 ps-lg-5 ps-md-0 ps-0 mt-lg-0 mt-md-4 mt-3 m-0 p-0">
                        <table class="table ket">
                            <tbody>
                                <tr>
                                    <td>Jenis Peraturan</td>
                                    <td>:</td>
                                    <td>{{ $jenis_peraturan }}</td>
                                </tr>

                                <tr>
                                    <td>Pemrakarsa</td>
                                    <td>:</td>
                                    <td>{{ $pemrakarsa }}</td>
                                </tr>

                                <tr>
                                    <td>Nomor</td>
                                    <td>:</td>
                                    <td>{{ filter_var($nomor_peraturan, FILTER_SANITIZE_NUMBER_INT) }}</td>
                                </tr>

                                <tr>
                                    <td>Tahun Peraturan</td>
                                    <td>:</td>
                                    <td>{{ $tahun_peraturan }}</td>
                                </tr>

                                <tr>
                                    <td>Judul Peraturan</td>
                                    <td>:</td>
                                    <td>
                                        {{ $judul_peraturan }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>Tanggal Penetapan</td>
                                    <td>:</td>
                                    <td>{{ $tanggal_penetapan_peraturan }}</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Pengundangan</td>
                                    <td>:</td>
                                    <td>{{ $tanggal_pengundangan_peraturan }}</td>
                                </tr>

                                <tr>
                                    @if ($status_dokumen == 1)
                                        @php
                                            $status = 'Berlaku';
                                        @endphp
                                    @else
                                        @php
                                            $status = 'Tidak Berlaku';
                                        @endphp
                                    @endif
                                    <td>Status Peraturan</td>
                                    <td>:</td>
                                    <td>{{ $status }}</td>
                                </tr>

                                @if ($status_perubahan == 1)
                                    <tr>
                                        <td>Status Peraturan</td>
                                        <td>:</td>
                                        <td class="fw-bold">{{ $judul_dokumen_perubahan }}</td>
                                    </tr>
                                @endif

                                <tr>
                                    <td>Penandatangganan</td>
                                    <td>:</td>
                                    <td>{{ $penandatangganan }}</td>
                                </tr>

                                <tr>
                                    <td>Tempat Penetapan</td>
                                    <td>:</td>
                                    <td>{{ $tempat_penetapan_peraturan }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="d-flex mt-lg-4">
                            <div class="flex-grow-1">
                                {{-- <a href="#"> --}}
                                {{-- <form action="/produk-hukum/download?dokumen={{ $dokumen }}" method="get">
                                    @csrf --}}
                                <input id="nameDoc" type="text" value="{{ $dokumen }}" hidden>
                                <button id="downloads" type="button" class="btn btn-unduh ps-lg-4 pe-lg-4">
                                    Download File
                                    <i class="bi bi-arrow-right ms-3"></i>
                                </button>
                                {{-- </form> --}}
                                {{-- </a> --}}
                            </div>
                            <div class="p-2 me-4 inf">
                                <i class="bi bi-eye me-3">
                                </i>
                                @if ($view == '' || $view == null)
                                    @php
                                        $countView = 0;
                                    @endphp
                                @else
                                    @php
                                        $countView = $view;
                                    @endphp
                                @endif {{ $countView }} kali
                            </div>
                            <div class="p-2 inf">
                                <i class="bi bi-download me-3"></i>
                                @if ($download == '' || $download == null)
                                    @php
                                        $countdownload = 0;
                                    @endphp
                                @else
                                    @php
                                        $countdownload = $download;
                                    @endphp
                                @endif {{ $countdownload }} kali
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        $('#downloads').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: '/produk-hukum/download',
                data: {
                    dokumen: $('#nameDoc').val()
                },
                success: function(response) {
                    window.open(response.url, '_blank');
                },
            });
        });
    </script>
@endpush
