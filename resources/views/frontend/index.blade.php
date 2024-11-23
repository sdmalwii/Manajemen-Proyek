@extends('frontend.layouts.app')

@section('title', __('Beranda'))

@section('content')

    @push('statis-css')
        <style>
            .card-img-left {
                border-radius: 50%;
                width: 100%;
                height: 100%;
                object-fit: cover;
                border: none;
                margin: auto;
            }
        </style>
    @endpush

    <div id="app" class="flex-center position-ref full-height">
        <div class="section">
            <div class="container-swiper">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($slideshow as $sd)
                            <div class="swiper-slide">
                                <img src="{{ asset($sd->path) }}" class="card-img-top" alt="File"
                                    onclick="showImagePreview('{{ asset($sd->path) }}')">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>

            <div class="container my-5" id="section-1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-left p-1">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/point/1.jpg') }}" class="card-img-left" alt="Image 1">
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center">
                                    <div>
                                        <h5 class="card-title"><strong>Satu Hati, Satu Tujuan</strong></h5>
                                        <p class="card-text">Persatuan emosi dan visi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-left p-1">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/point/2.jpg') }}" class="card-img-left" alt="Image 1">
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center">
                                    <div>
                                        <h5 class="card-title"><strong>Serempak Maju</strong></h5>
                                        <p class="card-text"> Bergerak bersama menuju kemajuan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-left p-1">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/point/3.jpg') }}" class="card-img-left" alt="Image 1">
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center">
                                    <div>
                                        <h5 class="card-title"><strong>Tumbuh Bersama</strong></h5>
                                        <p class="card-text">Berkembang bersama sebagai komunitas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-left p-1">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/point/4.jpg') }}" class="card-img-left" alt="Image 1">
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center">
                                    <div>
                                        <h5 class="card-title"><strong>Sinergi Warga</strong></h5>
                                        <p class="card-text">Kolaborasi efektif antar warga</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-left p-1">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/point/5.jpg') }}" class="card-img-left" alt="Image 1">
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center">
                                    <div>
                                        <h5 class="card-title"><strong>Harmoni di Hati</strong></h5>
                                        <p class="card-text">Perdamaian menciptakan keharmonisan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card text-left p-1">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/point/6.jpg') }}" class="card-img-left" alt="Image 1">
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center">
                                    <div>
                                        <h5 class="card-title"><strong>Kesatuan dalam Keragaman</strong></h5>
                                        <p class="card-text">Bersatu dalam keberagaman yang indah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5" id="section-2">
                <div class="row  align-items-center justify-content-center">
                    <div class="col-md-8 mb-4">
                        <blockquote class="rt-blockquote">
                            Di tengah keberagaman yang melimpah, Rukun Tetangga kami berkembang sebagai simbol keharmonisan,
                            di
                            mana setiap suara didengar, setiap tangan bersatu, dan setiap hati berbagi dalam membangun
                            komunitas
                            yang kuat, sejahtera, dan penuh kepedulian. <br>
                            <span class="chairperson">- Ketua RT 11/08 Kampung ABCD</span>
                        </blockquote>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ asset('img/foot/ketua-rt.png') }}" alt="Deskripsi Foto" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="my-5" id="section-3">
                <div class="container">
                    <div class="row mb-3 align-items-center">
                        <div class="col-6 col-md-8 d-flex align-items-center">
                            <h4 class="title-sub mb-0">BERITA TERKINI</h4>
                        </div>
                        <div class="col-6 col-md-4 d-flex justify-content-end">
                            <a href="{{ route('home.index_berita') }}" class="lihat-semua">Lihat Semua Berita </a>
                        </div>
                    </div>

                    <div class="row my-5">
                        @if (count($news) > 0)
                            @foreach ($news as $new)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                        <img src="{{ asset($new->gambar) }}" class="card-img-top" alt="Gambar Berita">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $new->judul }}</h5>
                                            <p class="card-text">{{ date('d F Y', strtotime($new->created_at)) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="d-flex align-items-center justify-content-center alert alert-secondary mx-auto"
                                role="alert">
                                Tidak ada data berita
                            </div>
                        @endif
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-6 col-md-8 d-flex align-items-center">
                            <h4 class="title-sub mb-0">GALERI KEGIATAN</h4>
                        </div>
                        <div class="col-6 col-md-4 d-flex justify-content-end">
                            <a href="{{ route('home.index_galeri') }}" class="lihat-semua">Lihat Semua Galeri </a>
                        </div>
                    </div>
                    <div class="row my-5">
                        @if (count($gallerys) > 0)
                            @foreach ($gallerys as $uuid => $gallery)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                        @if ($gallery->count() > 0)
                                            <div style="position: relative; display: block;">
                                                <a href="{{ asset($gallery->first()->path) }}"
                                                    data-lightbox="gallery-{{ $uuid }}"
                                                    data-title="{{ $gallery->first()->alt }}"
                                                    style="position: relative; display: block;">
                                                    <img src="{{ asset($gallery->first()->path) }}" class="card-img-top"
                                                        alt="{{ $gallery->first()->alt }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $gallery->first()->alt }}</h5>
                                                    <p class="card-text">
                                                        {{ date('d F Y', strtotime($gallery->first()->created_at)) }}
                                                    </p>
                                                </div>
                                            </div>

                                            @foreach ($gallery->slice(1) as $image)
                                                <a href="{{ asset($image->path) }}"
                                                    data-lightbox="gallery-{{ $uuid }}"
                                                    data-title="{{ $image->alt }}" class="d-none"></a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="d-flex align-items-center justify-content-center alert alert-secondary mx-auto"
                                role="alert">
                                Tidak ada galeri kegiatan
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="my-5" id="section-4">
                <div class="container">
                    <div class="card kemas-card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/Logo-kemas-white.png') }}" alt="Logo Kemas" class="logo">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-bold">Apa Itu Kemas.id ?</h5>
                                    <p class="card-text text-justify">Platform digital yang dirancang untuk meningkatkan
                                        kualitas hidup masyarakat melalui berbagai layanan dan fitur. Aplikasi ini bertujuan
                                        untuk menjadi jembatan penghubung antara masyarakat dengan berbagai sumber daya dan
                                        bantuan yang dapat mendukung dan memudahkan pelayanan Masyarakat di lingkungan RT.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('custom-scripts')
        <script>
            const swiper = new Swiper('.swiper', {
                direction: 'horizontal',
                loop: true,

                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        </script>
    @endpush
@endsection
