
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
        <label for="pic-1" class="lightbox"
          ><img src="/assets/img/banner.png"
        /></label>
        <input type="checkbox" id="pic-2" />
        <label for="pic-2" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=20"
        /></label>
        <input type="checkbox" id="pic-3" />
        <label for="pic-3" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=22"
        /></label>
        <input type="checkbox" id="pic-4" />
        <label for="pic-4" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=42"
        /></label>
        <input type="checkbox" id="pic-5" />
        <label for="pic-5" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=48"
        /></label>
        <input type="checkbox" id="pic-6" />
        <label for="pic-6" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=60"
        /></label>
        <input type="checkbox" id="pic-7" />
        <label for="pic-7" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=201"
        /></label>
        <input type="checkbox" id="pic-8" />
        <label for="pic-8" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=7"
        /></label>
        <input type="checkbox" id="pic-9" />
        <label for="pic-9" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=119"
        /></label>
        <input type="checkbox" id="pic-10" />
        <label for="pic-10" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=180"
        /></label>
        <input type="checkbox" id="pic-11" />
        <label for="pic-11" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=96"
        /></label>
        <input type="checkbox" id="pic-12" />
        <label for="pic-12" class="lightbox"
          ><img src="http://unsplash.it/800/600?image=24"
        /></label>
        <div class="grid">
          <label for="pic-1" class="grid-item"
            ><img src="/assets/img/banner.png"
          /></label>
          <label for="pic-2" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=20"
          /></label>
          <label for="pic-3" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=22"
          /></label>
          <label for="pic-4" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=42"
          /></label>
          <label for="pic-5" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=48"
          /></label>
          <label for="pic-6" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=60"
          /></label>
          <label for="pic-7" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=201"
          /></label>
          <label for="pic-8" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=7"
          /></label>
          <label for="pic-9" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=119"
          /></label>
          <label for="pic-10" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=180"
          /></label>
          <label for="pic-11" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=96"
          /></label>
          <label for="pic-12" class="grid-item"
            ><img src="http://unsplash.it/400/300?image=24"
          /></label>
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
