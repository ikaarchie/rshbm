@extends('layouts.app')

@section('content')
<!-- ======= Header ======= -->
<header id="header">
    {{-- <a href="index.html" class="logo"><img src="{{ url('img/logo.png') }}" alt="" class="img-fluid"></a>
    --}}
    <h1 class="logo"><a href="#">Rumah Sakit<br />Hermina Banyumanik</a></h1>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#penyakit">Penyakit</a></li>
            <li><a class="nav-link scrollto" href="#alat">Tindakan & alat</a></li>
            <li><a class="nav-link scrollto " href="#gizi">Gizi</a></li>
            <li><a class="nav-link scrollto" href="#info">Informasi lainnya</a></li>
            <li><a class="nav-link scrollto" href="#coba">Coba</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Edukasi Pasien</h1>
                <h2>Edukasi pasien tentang <span class="running-text"></span></h3>
                </h2>

                <div class="home-sci">
                    <a href="#" style="--i:1"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/rsuherminabanyumanik/" style="--i:2"><i
                            class='bx bxl-instagram'></i></a>
                    <a href="https://www.tiktok.com/@rsuherminabanyumanik" style="--i:3"><i
                            class='bx bxl-tiktok'></i></a>
                </div>

                <div>
                    <a href="#penyakit" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ url('img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <section id="penyakit" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Penyakit</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sapiente beatae voluptatum aliquid
                    inventore eveniet placeat quidem ipsam quod tempore porro autem alias eligendi eum, sequi ex.
                    Id, pariatur quas.</p>
            </div>

            {{-- <div class="gallery">
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                    <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="penyakit" data-title="Caption1">
                        <div class="content">
                            <h4>Image Hover Effect</h4>
                            <p>Deskripsi ditulis disini</p>
                        </div>
                    </a>
                </div>
            </div> --}}

            {{-- <div class="gallery">
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption1">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption2">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption3">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption4">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption5">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption6">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
                <a href="{{ url('img/penyakit.jpg') }}" data-lightbox="models" data-title="Caption7">
                    <img src="{{ url('img/penyakit.jpg') }}" alt="">
                </a>
            </div> --}}

            <div class=" swiper">
                <div class="card__content">
                    <ul class="cards swiper-wrapper">

                        @foreach($penyakit as $key => $isi)
                        <li class="swiper-slide">
                            <a href="{{ asset('gambar-konten/'.$isi->gambar) }}" data-lightbox="{{ $isi->jenis }}"
                                data-title="{{ $isi->judul }}" class="card">
                                <img src="{{ asset('gambar-konten/'.$isi->gambar) }}" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb" src="{{ url('img/logo.png') }}" alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title">{{ $isi->judul }}</h3>
                                            <span class="card__status">Lebih lanjut <i
                                                    class='bx bx-chevrons-right'></i></span>
                                        </div>
                                    </div>
                                    <p class="card__description">{{ $isi->deskripsi }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    {{-- <i class='bx bxs-chevron-right'></i> --}}
                </div>

                <div class="swiper-button-prev">
                    {{-- <i class='bx bxs-chevron-left'></i> --}}
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="alat" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Alat</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sapiente beatae voluptatum aliquid
                    inventore eveniet placeat quidem ipsam quod tempore porro autem alias eligendi eum, sequi ex.
                    Id, pariatur quas.</p>
            </div>

            <div class=" swiper">
                <div class="card__content">
                    <ul class="cards swiper-wrapper">

                        @foreach($alat as $key => $isi)
                        <li class="swiper-slide">
                            <a href="{{ asset('gambar-konten/'.$isi->gambar) }}" data-lightbox="{{ $isi->jenis }}"
                                data-title="{{ $isi->judul }}" class="card">
                                <img src="{{ asset('gambar-konten/'.$isi->gambar) }}" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb" src="{{ url('img/logo.png') }}" alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title">{{ $isi->judul }}</h3>
                                            <span class="card__status">Lebih lanjut <i
                                                    class='bx bx-chevrons-right'></i></span>
                                        </div>
                                    </div>
                                    <p class="card__description">{{ $isi->deskripsi }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    {{-- <i class='bx bxs-chevron-right'></i> --}}
                </div>

                <div class="swiper-button-prev">
                    {{-- <i class='bx bxs-chevron-left'></i> --}}
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section id="gizi" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gizi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sapiente beatae voluptatum aliquid
                    inventore eveniet placeat quidem ipsam quod tempore porro autem alias eligendi eum, sequi ex.
                    Id, pariatur quas.</p>
            </div>

            <div class=" swiper">
                <div class="card__content">
                    <ul class="cards swiper-wrapper">

                        @foreach($gizi as $key => $isi)
                        <li class="swiper-slide">
                            <a href="{{ asset('gambar-konten/'.$isi->gambar) }}" data-lightbox="{{ $isi->jenis }}"
                                data-title="{{ $isi->judul }}" class="card">
                                <img src="{{ asset('gambar-konten/'.$isi->gambar) }}" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb" src="{{ url('img/logo.png') }}" alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title">{{ $isi->judul }}</h3>
                                            <span class="card__status">Lebih lanjut <i
                                                    class='bx bx-chevrons-right'></i></span>
                                        </div>
                                    </div>
                                    <p class="card__description">{{ $isi->deskripsi }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    {{-- <i class='bx bxs-chevron-right'></i> --}}
                </div>

                <div class="swiper-button-prev">
                    {{-- <i class='bx bxs-chevron-left'></i> --}}
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section id="info" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi Lainnya</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sapiente beatae voluptatum aliquid
                    inventore eveniet placeat quidem ipsam quod tempore porro autem alias eligendi eum, sequi ex.
                    Id, pariatur quas.</p>
            </div>

            <div class=" swiper">
                <div class="card__content">
                    <ul class="cards swiper-wrapper">

                        @foreach($info as $key => $isi)
                        <li class="swiper-slide">
                            <a href="{{ asset('gambar-konten/'.$isi->gambar) }}" data-lightbox="{{ $isi->jenis }}"
                                data-title="{{ $isi->judul }}" class="card">
                                <img src="{{ asset('gambar-konten/'.$isi->gambar) }}" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb" src="{{ url('img/logo.png') }}" alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title">{{ $isi->judul }}</h3>
                                            <span class="card__status">Lebih lanjut <i
                                                    class='bx bx-chevrons-right'></i></span>
                                        </div>
                                    </div>
                                    <p class="card__description">{{ $isi->deskripsi }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    {{-- <i class='bx bxs-chevron-right'></i> --}}
                </div>

                <div class="swiper-button-prev">
                    {{-- <i class='bx bxs-chevron-left'></i> --}}
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="coba" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Coba</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sapiente beatae voluptatum aliquid
                    inventore eveniet placeat quidem ipsam quod tempore porro autem alias eligendi eum, sequi ex.
                    Id, pariatur quas.</p>
            </div>

            <div class="swiper">
                <div class="card__content">
                    <ul class="cards swiper-wrapper">

                        @foreach($konten as $key => $isi)
                        <li class="swiper-slide">
                            <a href="{{ asset('gambar-konten/'.$isi->gambar) }}" data-lightbox="{{ $isi->jenis }}"
                                data-title="{{ $isi->judul }}" class="card">
                                <img src="{{ asset('gambar-konten/'.$isi->gambar) }}" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <img class="card__thumb" src="{{ url('img/logo.png') }}" alt="" />
                                        <div class="card__header-text">
                                            <h3 class="card__title">{{ $isi->judul }}</h3>
                                            <span class="card__status">Lebih lanjut <i
                                                    class='bx bx-chevrons-right'></i></span>
                                        </div>
                                    </div>
                                    <p class="card__description">{{ $isi->deskripsi }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    {{-- <i class='bx bxs-chevron-right'></i> --}}
                </div>

                <div class="swiper-button-prev">
                    {{-- <i class='bx bxs-chevron-left'></i> --}}
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <img src="{{ url('img/logo.png') }}" alt="" style="max-width: 4vw" class="mb-2">
                    <p class="mb-2">
                        Jl. Jend. Polisi Anton Soedjarwo No. 195A<br>
                        Semarang, Jawa Tengah<br>
                        Indonesia<br>
                    </p>
                    <p>
                        <strong>Call Center :</strong> 1500 488<br>
                        <strong>Emergency 24 Jam :</strong> 0815-1403-7978 (SPGDT)<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    {{-- <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul> --}}
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    {{-- <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul> --}}
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    {{-- <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form> --}}
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright 2024, IT Support RSHBM
                </div>
            </div>

            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="facebook"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/rsuherminabanyumanik/" class="instagram"><i
                        class='bx bxl-instagram'></i></a>
                <a href="https://www.tiktok.com/@rsuherminabanyumanik" class="tiktok"><i class='bx bxl-tiktok'></i></a>
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection