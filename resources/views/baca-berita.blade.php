@extends('layouts.main')
@section('content')
    <!-- ======================== baca berita ========================= -->
    <section class="baca-berita mt-5">
        <div class="gambar-berita pt-5">
            <img class="img-fluid" src="{{ $data['media_url'] }}" alt="" />
        </div>
        {{-- {{ $data }} --}}
        <div class="mt-5">
            <div class="row">
                {{-- <div class="col-lg-8 col-md-10 col-12 judul-berita">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta,
                    fugit commodi dolores deleniti, beatae suscipit est doloremque
                    dignissimos
                </div> --}}
                <div class="col-lg-4 col-md col-12"></div>

                <div class="row mt-lg-5 mt-md-5 mt-3">
                    <div class="col-lg-3 col-md-3 col-12">
                        @php
                            $time = $date = Carbon\Carbon::parse($data['timestamp'], 'UTC')->locale('id');
                        @endphp
                        <div class="tgl">{{ $time->isoFormat('dddd, D MMMM Y') }}</div>
                        {{-- <div class="dibaca mt-1">Dibaca 123 Kali</div> --}}
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 mt-lg-0 mt-md-0 mt-4 isber">
                        {{ $data['caption'] }}
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <div>
                    <div class="text-end">
                        Diposting oleh<span class="bold"> Admin</span>
                    </div>
                    <div class="kej">{{ $data['username'] }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
