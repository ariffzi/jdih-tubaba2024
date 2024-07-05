<footer class="margin-top">
    <div class="card container">
        <div class="d-grid d-md-flex d-lg-flex logo mt-3 mt-md-4 mt-lg-5">
            <div class="d-flex justify-content-center justify-content-md-start justify-content-lg-start col-12 col-md-auto col-lg-auto">
                <img class="img-fluid pe-2" src="/assets/logo/Logo-JDIH.svg" alt="" />
                <img class="img-fluid pe-2" src="/assets/logo/lambang_tubaba.svg" alt="" />
            </div>

            <div class="col-12 col-md-10 col-lg-8 ps-3 pe-lg-0 pe-md-3 text-lg-start text-md-start text-center mt-3 mt-md-0 mt-lg-0">
                <div class="head">JDIH KABUPATEN TUBABA</div>
                <div class="keterangan mt-2">
                    JDIH Kabupaten Tubaba hadir untuk meningkatkan pelayanan kepada
                    masyarakat atas kebutuhan dokumentasi dan informasi hukum secara
                    lengkap, akurat, mudah dan cepat.
                </div>
            </div>
        </div>

        <div class="line mb-3 mt-3"></div>

        <div class="row ket">
            <div class="col-6 col-md-3 col-lg-3">
                <div class="head mb-2">Kontak Kami</div>
                <div class="keterangan d-flex">
                    <div class="col-auto"><i class="bi bi-houses-fill"> </i></div>
                    <div class="col ps-3 ket-2">
                        Jl. Tuan Rio Sanak, Komplek Perkantoran Pemerintah Daerah
                        Kabupaten Tulang Bawang Barat, Panaragan 34593
                    </div>
                </div>
                <div class="keterangan d-flex">
                    <div class="col-auto">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="col ps-3">-</div>
                </div>
                <div class="keterangan d-flex">
                    <div class="col-auto">
                        <i class="bi bi-envelope-at-fill"></i>
                    </div>
                    <div class="col ps-3 ket-2">jdih@tubaba.go.id</div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-3">
                <div class="head mb-2">Link Terkait</div>
                <a href="https://jdihn.go.id/">
                    <div class="row keterangan d-flex">
                        <div class="col-auto">
                            <i class="bi bi-globe-central-south-asia"></i>
                        </div>
                        <div class="col ket-2 link">JDIH Nasional</div>
                    </div>
                </a>

                <a href="https://jdih.lampungprov.go.id/">
                    <div class="row keterangan d-flex">
                        <div class="col-auto">
                            <i class="bi bi-globe-central-south-asia"></i>
                        </div>
                        <div class="col ket-2 link">JDIH Provinsi Lampung</div>
                    </div>
                </a>

                <a href="https://www.kemendagri.go.id/">
                    <div class="row keterangan d-flex">
                        <div class="col-auto">
                            <i class="bi bi-globe-central-south-asia"></i>
                        </div>
                        <div class="col ket-2 link">Kemendagri</div>
                    </div>
                </a>

                <a href="https://bphn.go.id/">
                    <div class="row keterangan d-flex">
                        <div class="col-auto">
                            <i class="bi bi-globe-central-south-asia"></i>
                        </div>
                        <div class="col ket-2 link">BPHN</div>
                    </div>
                </a>

                <a href="https://mahkamahagung.go.id/">
                    <div class="row keterangan d-flex">
                        <div class="col-auto">
                            <i class="bi bi-globe-central-south-asia"></i>
                        </div>
                        <div class="col ket-2 link">Mahkamah Agung</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-3 mt-4 mt-md-0 mt-lg-0">
                <div class="head mb-2">Sosial Media</div>

                {{-- <a href="#">
                    <div class="row keterangan">
                        <div class="col-auto">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div class="col ket-2 link">Bagian Hukum Tubaba</div>
                    </div>
                </a>

                <a href="#">
                    <div class="row keterangan">
                        <div class="col-auto">
                            <i class="bi bi-twitter-x"></i>
                        </div>
                        <div class="col ket-2 link">Bagian Hukum Tubaba</div>
                    </div>
                </a> --}}

                <a href="https://www.instagram.com/bagianhukumtubaba_/">
                    <div class="row keterangan">
                        <div class="col-auto">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div class="col ket-2 link">Bagian Hukum Tubaba</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-3 mt-4 mt-md-0 mt-lg-0">
                @php
                    $get_harian = Storage::disk('public_html')->get('content/hari_ini.json');
                    $harian = json_decode($get_harian);
                @endphp
                <div class="head mb-2">Data Pengunjung</div>
                <div class="row keterangan">
                    <div class="col-6 ket-2">Hari ini</div>
                    <div class="col-6 ket-2">{{ $harian->count }}</div>
                </div>
                <div class="row keterangan">
                    @php
                        $get_total = Storage::disk('public_html')->get('content/total.json');
                        $total = json_decode($get_total);
                    @endphp
                    <div class="col-6 ket-2">Total Pengunjung</div>
                    <div class="col-6 ket-2">{{ $total->count }}</div>
                </div>
                <div class="row keterangan">
                    @php
                        $pengunjung = Http::get('https://aplikasi.tubaba.go.id/api/jdih/pengunjung');
                        $total_pengunjung = json_decode($pengunjung);
                    @endphp
                    <div class="col-6 ket-2">Total View Produk hukum</div>
                    <div class="col-6 ket-2">{{ $total_pengunjung->all->total }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright mt-4 d-flex justify-content-center align-items-center text-center p-4">
        Copyrights © 2023 by Bagian Hukum dan Kerjasama Setda Pemerintah
        Kabupaten Tulang Bawang Barat.
    </div>
</footer>
