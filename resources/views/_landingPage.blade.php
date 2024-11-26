@extends('templates.app')

@section('content-dinamis')
    @if (Session::get('access'))
        <div class="alert alert-danger">
            {{ Session::get('access') }}</div>
    @endif
    <section id="home" class="hero">
        <div class="container text-center text-white position-relative" style="z-index: 1;">
            <h1 class="display-3 fw-bold mb-4">Selamat Datang di Cafe Modern
            </h1>
            <p class="lead mb-5">Rasakan Sentuhan Masa Depan dalam Setiap Tegukan</p>
            <a href="#menu" class="btn btn-modern">Jelajahi Menu</a>
        </div>

    </section>
    <section id="menu" class="py-5 bg-light">
        <div class="container">
            <p class="text-center text-uppercase text-warning fw-bold mb-1">
                From the best Indonesian specialty coffee to heart-warming foods
            </p>
            <h2 class="text-center mb-5 fw-bold">Our Menu</h2>
            <div class="row text-center g-4">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card border-0">
                            <img src="{{ asset($item['img']) }}" class="img-fluid rounded mb-3" alt="{{ $item->name }}">
                            <h5 class="fw-bold">{{ $item->name }}</h5>
                            <p class="text-muted small">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg"
                alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg"
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
        </div>
    </div>


    <section id="about" class="py-5 parallax" style="background-image: url('/api/placeholder/1920/1080');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 fade-in">
                    <h2 class="mb-4 text-gray-799">Tentang Cafe Moderna</h2>
                    <p class="text-gray-799">Cafe Moderna adalah titik temu antara tradisi kopi dan teknologi masa depan.
                        Kami
                        menghadirkan pengalaman kuliner yang tak terlupakan dengan sentuhan inovasi di setiap sajian.</p>
                    <p class="text-gray-799">Dengan barista robot kami yang presisi dan chef AI yang kreatif, kami
                        berkomitmen
                        untuk memberikan citarasa terdepan dalam dunia kopi dan kuliner.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fade-in">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 fade-in">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-modern w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-4 fade-in">
                    <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                    <p>Jl. Futuristik No. 2077, Neo Jakarta</p>
                </div>
                <div class="col-md-4 fade-in">
                    <i class="fas fa-phone fa-3x mb-3"></i>
                    <p>+62 8888 9999 2077</p>
                </div>
                <div class="col-md-4 fade-in">
                    <i class="fas fa-envelope fa-3x mb-3"></i>
                    <p>hello@cafemoderna.com</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2077 Cafe Moderna. Semua hak cipta dilindungi.</p>
            <div class="mt-3">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>
@endsection

@push('style')
    <style>
        :root {
            --primary-color: green;
            --secondary-color: #f8f9fa;
            --accent-color: rgb(87, 245, 87);
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .navbar {
            transition: all 0.5s ease;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.8);
        }

        .navbar-brand,
        .nav-link {
            color: var(--primary-color) !important;
        }

        .hero {
            height: 70vh;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.2' d='M0,32L48,80C96,128,192,224,288,229.3C384,235,480,149,576,128C672,107,768,149,864,170.7C960,192,1056,192,1152,170.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") repeat-x;
            animation: wave 20s linear infinite;
        }

        @keyframes wave {
            0% {
                transform: translateX(0) translateY(0) rotate(0);
            }

            100% {
                transform: translateX(-50%) translateY(0) rotate(0);
            }
        }

        .btn-modern {
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 123, 255, 0.3);
        }

        /* .card {
                            border: none;
                            border-radius: 15px;
                            overflow: hidden;
                            transition: all 0.3s ease;
                        }

                        .card:hover {
                            transform: translateY(-10px) rotate(2deg);
                            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
                        }

                        .card-img-overlay {
                            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
                        }

                        .parallax {
                            background-attachment: fixed;
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                        }

                        .fade-in {
                            opacity: 0;
                            transform: translateY(50px);
                            transition: opacity 0.8s ease, transform 0.8s ease;
                        }

                        .fade-in.visible {
                            opacity: 1;
                            transform: translateY(0);
                        }

                        #contact {
                            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
                            color: white;
                        }

                        .form-control {
                            border-radius: 20px;
                            border: none;
                            padding: 15px 20px;
                        } */

        #menu {
            background-color: #f8f9fa;
        }

        #menu h2 {
            color: #555;
            font-size: 2rem;
        }

        #menu p.text-uppercase {
            font-size: 0.9rem;
            letter-spacing: 0.1rem;
        }

        #menu .card img {
            max-height: 200px;
            object-fit: cover;
        }

        #menu h5 {
            font-size: 1.2rem;
            color: #333;
        }

        #menu p {
            font-size: 0.95rem;
            color: #777;
        }

        #menu .text-warning {
            color: #f39c12 !important;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '5px 0';
                navbar.style.backgroundColor = 'rgba(255,255,255,0.95)';
            } else {
                navbar.style.padding = '20px 0';
                navbar.style.backgroundColor = 'rgba(255,255,255,0.8)';
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Fade-in effect
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        // Parallax effect
        window.addEventListener('scroll', function() {
            const parallax = document.querySelector('.parallax');
            let scrollPosition = window.pageYOffset;
            parallax.style.backgroundPositionY = scrollPosition * 0.7 + 'px';
        });
    </script>
@endpush
