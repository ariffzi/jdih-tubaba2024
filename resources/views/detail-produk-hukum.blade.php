@extends('layouts.main')

@section('content')
    <!-- ======================== detail produk hukum ========================= -->
    <section class="margin-top pt-lg-3 pt-md-4 pt-5 ">
        <div class="page-detail-produk container">
            <div class="konten mt-lg-5 mt-md-4 mt-3">
                <div class="row mt-lg-5 col-md-12 col-12 mt-md-4 mt-3">
                    {{-- <div class="col-lg-5">
                        <div class="card card-pdf p-2">
                            <iframe src="https://aplikasi.tubaba.go.id/storage/disk/jdih/file_peraturan/{{ $dokumen }}#toolbar=0" class="cont-pdf"></iframe>
                        </div>
                    </div> --}}

                    <div class="col-lg-8">
                        <div class="card shadow-sm rounded-4">
                            <div class="card-body">
                                <h2 class="px-2 pt-2"> METADATA PERATURAN</h2>
                                <hr class="pb-2">
                                <table class="table ket table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Jenis Peraturan</td>
                                            <td>:</td>
                                            <td>{{ $jenis_peraturan }}</td>
                                        </tr>

                                        <tr>
                                            <td>Judul Peraturan</td>
                                            <td>:</td>
                                            <td>
                                                {{ $judul_peraturan }}
                                            </td>
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
                                <hr>
                            </div>

                            <div class="d-flex px-4 pb-3 ">
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

                    <div class="col-lg-4">
                        <div class="card shadow-sm mb-3 rounded-4">
                            <div class="card-body">
                                @if ($status_peraturan->perubahan->judul_dokumen_perubahan)
                                    <div class="col-12">
                                        <div class="fw-bolder fs-5">File - File :</div>
                                        <hr>
                                        <div class="pt-2 text-capitalize pb-3 text-decoration-none text-primary-emphasis">Salinan Peraturan {{ $jenis_peraturan }} No {{ filter_var($nomor_peraturan, FILTER_SANITIZE_NUMBER_INT) }} Tahun {{ $tahun_peraturan }}</div>

                                        <div class="d-flex justify-content-center gap-1">
                                            <input id="nameDoc" type="text" value="{{ $dokumen }}" hidden>
                                            <span></span>
                                            <button id="downloads" type="button" class="btn btn-unduh ps-lg-4 pe-lg-4">
                                                Unduh
                                                <i class="bi bi-arrow-right ms-3"></i>
                                            </button>
                                            <button id="priview" type="button" class="btn btn-unduh ps-lg-4 pe-lg-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Lihat
                                                <i class="bi bi-eye ms-3"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="card shadow-sm mb-3 rounded-4">
                            <div class="card-body">
                                @if ($status_peraturan->perubahan->judul_dokumen_perubahan)
                                    <div class="col-12">
                                        <div class="fw-bolder fs-5">Merubah :</div>
                                        <hr>
                                        <table class="table ket table-borderless">
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($status_peraturan->perubahan->judul_dokumen_perubahan as $doc_perubahan)
                                                    <tr style="font-size: 12px">
                                                        <td style="width: 5%">{{ $i++ }}.</td>
                                                        <td style="width: 95%">
                                                            <a href="/produk-hukum/detail?code={{ $doc_perubahan->id_dokumen_perubahan }}" class="text-decoration-none text-primary-emphasis">
                                                                {{ $doc_perubahan->judul_dokumen_perubahan }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            <tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="card shadow-sm mb-3 rounded-4">
                            <div class="card-body">
                                @if ($status_peraturan->diubah_dengan->judul_dokumen_dirubah_dengan)
                                    <div class="col-12">
                                        <div class="fw-bolder fs-5">Diubah Dengan :</div>
                                        <hr>
                                        <table class="table table-borderless">
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($status_peraturan->diubah_dengan as $doc_diubah)
                                                    <tr style="font-size: 12px">
                                                        <td style="width: 5%">{{ $i++ }}.</td>
                                                        <td style="width: 95%">
                                                            <a href="/produk-hukum/detail?code={{ $doc_diubah->id_dukumen_berlaku }}" class="text-decoration-none text-primary-emphasis">
                                                                {{ $doc_diubah->dokumen_berlaku }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            <tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body d-flex justify-content-center" style="min-height: 620px">
                    <iframe src="https://aplikasi.tubaba.go.id/storage/disk/jdih/file_peraturan/{{ $dokumen }}#toolbar=0" style="width: 100%"></iframe>
                </div>
            </div>
        </div>
    </div>
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
