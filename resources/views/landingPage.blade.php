@extends('templates.app')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #3498db;
            --text-color: #2c3e50;
            --bg-light: #ecf0f1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            overflow-x: hidden;
            background-color: var(--bg-light);
        }

        /* Keyframe Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes floatAnimation {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        /* Swiper Home Slider */
        .swiper-home {
            height: 100vh;
            color: white;
            position: relative;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide-content {
            text-align: center;
            max-width: 800px;
            padding: 20px;
            animation: fadeIn 1.5s ease-out;
        }

        /* Menu Section */
        #menu {
            background: linear-gradient(135deg, #f9f9f9, #f0f0f0);
            padding: 80px 0;
        }

        .menu-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .menu-card-img {
            position: relative;
            overflow: hidden;
        }

        .menu-card-img img {
            transition: transform 0.5s ease;
        }

        .menu-card:hover .menu-card-img img {
            transform: scale(1.1);
        }

        .menu-card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 15px;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .menu-card:hover .menu-card-overlay {
            opacity: 1;
        }

        /* About Section */
        #about {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
                gap: 30px;
            }
        }

        /* Utility Classes */
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .btn-modern {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush

@section('content-dinamis')
    @if (Session::get('access'))
        <div class="alert alert-danger">{{ Session::get('access') }}</div>
    @endif

    <!-- Home Slider -->
    <section class="swiper swiper-home">
        <div class="swiper-wrapper text-white">
            <div class="swiper-slide"
                style="background-image: url('https://img.freepik.com/free-vector/restaurant-mural-wallpaper_52683-47493.jpg')">
                <div class="slide-overlay">
                    <div class="slide-content text-center">
                        <h1 class="display-3 fw-bold text-shadow mb-4">
                            <i class="ri-cup-line me-3 icon-animated"></i>
                            Cafe Moderna
                        </h1>
                        <p class="lead mb-5 text-shadow">Teknologi Bertemu Tradisi dalam Setiap Tegukan</p>
                        <a href="#menu" class="btn btn-modern btn-lg text-white">
                            Jelajahi Menu
                            <i class="ri-arrow-right-line ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"
                style="background-image: url('https://img.freepik.com/free-vector/realistic-coffee-time-background-with-coffee-cup_79603-1559.jpg?semt=ais_hybrid')">
                <div class="slide-overlay">
                    <div class="slide-content text-center">
                        <h1 class="display-3 fw-bold text-shadow mb-4">
                            <i class="ri-robot-line me-3 icon-animated"></i>
                            Inovasi Tanpa Batas
                        </h1>
                        <p class="lead mb-5 text-shadow">Pengalaman Kopi Masa Depan</p>
                        <a href="#about" class="btn btn-modern btn-lg text-white">
                            Tentang Kami
                            <i class="ri-information-line ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-uppercase text-muted fw-bold mb-2">Specialty of The House</p>
                <h2 class="display-5 fw-bold">Koleksi Menu Kami</h2>
            </div>
            <div class="row g-4">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="menu-card h-100">
                            <div class="menu-card-img position-relative">
                                <img src="{{ asset($item['img']) }}" class="img-fluid w-100" alt="{{ $item->name }}">
                                <div class="menu-card-overlay">
                                    <h5 class="text-white mb-2">{{ $item->name }}</h5>
                                    <p class="small text-white-50">{{ $item->description }}</p>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-3">{{ $item->name }}</h5>
                                <p class="text-muted small mb-3">{{ $item->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="h5 mb-0">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        Order
                                        <i class="ri-shopping-cart-line ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="about-content">
                <div class="about-image d-flex flex-shrink-0 col-md-6 justify-content-center">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/010/847/929/small/international-day-of-coffee-background-coffee-cup-logo-free-vector.jpg"
                        class="img-fluid" alt="Cafe Moderna Interior">
                </div>
                <div class="about-text">
                    <h2 class="display-5 fw-bold mb-4">Tentang Cafe Moderna</h2>
                    <p class="lead mb-4">
                        Cafe Moderna adalah revolusi kuliner yang memadukan tradisi kopi Indonesia
                        dengan teknologi masa depan. Kami tidak sekadar menyajikan minuman,
                        tetapi menciptakan pengalaman yang melampaui batas konvensional.
                    </p>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <i class="ri-robot-line fa-3x me-3 text-accent"></i>
                                <span>Robot Barista Canggih</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <i class="ri-test-tube-line fa-3x me-3 text-accent"></i>
                                <span>Teknik Brewing Inovatif</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <i class="ri-earth-line fa-3x me-3 text-accent"></i>
                                <span>Sumber Bahan Lokal</span>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-modern mt-4">
                        Hubungi Kami
                        <i class="ri-arrow-right-line ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Home Slider Initialization
        new Swiper('.swiper-home', {
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Scroll Reveal
        document.addEventListener('DOMContentLoaded', () => {
            const scrollReveal = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            };

            const revealObserver = new IntersectionObserver(scrollReveal, {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            });

            document.querySelectorAll('.fade-in, .menu-card, .about-content').forEach(section => {
                revealObserver.observe(section);
            });
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
