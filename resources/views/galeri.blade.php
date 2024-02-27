@extends('layouts.main')
@section('content')
<!-- ======================== page galeri ========================= -->
<section class="page-galeri">
    <div class="head mb-2">
        <div class="row">
            <div class="col-6 jud">Galeri</div>
            <div class="col-6 text-end d-grid align-content-end">
                <div class="jak">Bagian Hukum</div>
                <div class="kab">Kabupaten Tulang Bawang Barat</div>
            </div>
        </div>
    </div>

    <div class="content">
        <input type="checkbox" id="pic-1" />
        <label for="pic-1" class="lightbox"><img src="/assets/img/galeri/1.png" /></label>
        <input type="checkbox" id="pic-2" />
        <label for="pic-2" class="lightbox"><img src="/assets/img/galeri/2.png" /></label>
        <input type="checkbox" id="pic-3" />
        <label for="pic-3" class="lightbox"><img src="/assets/img/galeri/3.png" /></label>
        <input type="checkbox" id="pic-4" />
        <label for="pic-4" class="lightbox"><img src="/assets/img/galeri/4.png" /></label>
        <input type="checkbox" id="pic-5" />
        <label for="pic-5" class="lightbox"><img src="/assets/img/galeri/5.png" /></label>
        <input type="checkbox" id="pic-6" />
        <label for="pic-6" class="lightbox"><img src="/assets/img/galeri/6.png" /></label>
        <input type="checkbox" id="pic-7" />
        <label for="pic-7" class="lightbox"><img src="/assets/img/galeri/7.png" /></label>
        <input type="checkbox" id="pic-8" />
        <label for="pic-8" class="lightbox"><img src="/assets/img/galeri/8.png" /></label>
        <input type="checkbox" id="pic-9" />
        <label for="pic-9" class="lightbox"><img src="/assets/img/galeri/9.png" /></label>
        <input type="checkbox" id="pic-10" />
        <label for="pic-10" class="lightbox"><img src="/assets/img/galeri/10.png" /></label>
        <input type="checkbox" id="pic-11" />
        <label for="pic-11" class="lightbox"><img src="/assets/img/galeri/11.png" /></label>
        <input type="checkbox" id="pic-12" />
        <label for="pic-12" class="lightbox"><img src="/assets/img/galeri/12.png" /></label>
        <div class="grid">
            <label for="pic-1" class="grid-item"><img src="/assets/img/galeri/1.png" /></label>
            <label for="pic-2" class="grid-item"><img src="/assets/img/galeri/2.png" /></label>
            <label for="pic-3" class="grid-item"><img src="/assets/img/galeri/3.png" /></label>
            <label for="pic-4" class="grid-item"><img src="/assets/img/galeri/4.png" /></label>
            <label for="pic-5" class="grid-item"><img src="/assets/img/galeri/5.png" /></label>
            <label for="pic-6" class="grid-item"><img src="/assets/img/galeri/6.png" /></label>
            <label for="pic-7" class="grid-item"><img src="/assets/img/galeri/7.png" /></label>
            <label for="pic-8" class="grid-item"><img src="/assets/img/galeri/8.png" /></label>
            <label for="pic-9" class="grid-item"><img src="/assets/img/galeri/9.png" /></label>
            <label for="pic-10" class="grid-item"><img src="/assets/img/galeri/10.png" /></label>
            <label for="pic-11" class="grid-item"><img src="/assets/img/galeri/11.png" /></label>
            <label for="pic-12" class="grid-item"><img src="/assets/img/galeri/12.png" /></label>
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
