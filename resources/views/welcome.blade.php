<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pendukung Keputusan Sekolah Terbaik - WSM</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="rounded-circle me-2">
                <span class="d-none d-sm-block" style="color: var(--primary-color);">SPK WSM</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#hero">Beranda</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#wsm">Metode</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#flow">Alur</a></li>
                    <li class="nav-item ms-lg-3">
                        <a href="{{ route('login') }}" class="btn btn-nav-login">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Masuk Sistem
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="hero-bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <h1 class="hero-title">
                        Penentuan Sekolah Terbaik di <span style="color: var(--accent-color);">Kabupaten Bireuen</span>
                    </h1>
                    <p class="hero-subtitle">
                        Sistem Pendukung Keputusan berbasis web yang membantu menentukan sekolah terbaik 
                        secara objektif, transparan, dan akurat menggunakan metode 
                        <strong>Weighted Sum Model (WSM)</strong>.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="{{ route('login') }}" class="btn btn-hero btn-hero-primary">
                            Mulai Sekarang <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 hero-image-container text-center" data-aos="fade-left">
                    <!-- Placeholder Illustration -->
                    <img src="https://img.freepik.com/free-vector/learning-concept-illustration_114360-6186.jpg?w=826&t=st=1686817000~exp=1686817600" alt="Education Analysis Illustration" class="hero-img img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-white">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Tentang Sistem</h2>
                <div class="line"></div>
                <p class="mt-3 text-muted w-75 mx-auto">
                    Mengapa sistem ini dibuat? Untuk mengatasi subjektivitas dalam penilaian kualitas sekolah 
                    dan memberikan rekomendasi yang berdasarkan data nyata.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon-wrapper">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h4>Objektif</h4>
                        <p class="text-muted">Menghilangkan bias subjektif dengan penilaian berbasis kriteria dan bobot yang terukur.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon-wrapper">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h4>Cepat & Akurat</h4>
                        <p class="text-muted">Proses perhitungan kompleks diselesaikan dalam hitungan detik dengan akurasi tinggi.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon-wrapper">
                            <i class="bi bi-file-earmark-spreadsheet"></i>
                        </div>
                        <h4>Transparan</h4>
                        <p class="text-muted">Hasil perhitungan dapat diekspor lengkap dengan rumus perhitungannya untuk verifikasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WSM Method Section -->
    <section id="wsm" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://img.freepik.com/free-vector/data-extraction-concept-illustration_114360-4766.jpg" alt="WSM Analysis" class="img-fluid rounded-4">
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <h2 class="fw-bold mb-4 text-dark">Metode Weighted Sum Model (WSM)</h2>
                    <p class="mb-4 text-muted">WSM adalah metode pengambilan keputusan yang paling sederhana dan populer. Metode ini mengevaluasi beberapa alternatif berdasarkan sejumlah kriteria dengan bobot tertentu.</p>
                    
                    <div class="wsm-step">
                        <div class="step-number">1</div>
                        <div>
                            <h5 class="fw-bold">Normalisasi Matriks</h5>
                            <p class="small text-muted mb-0">Menyamakan skala nilai setiap kriteria agar dapat diperbandingkan.</p>
                        </div>
                    </div>
                    <div class="wsm-step">
                        <div class="step-number">2</div>
                        <div>
                            <h5 class="fw-bold">Pembobotan</h5>
                            <p class="small text-muted mb-0">Mengalikan nilai ternormalisasi dengan bobot preferensi yang telah ditentukan.</p>
                        </div>
                    </div>
                    <div class="wsm-step">
                        <div class="step-number">3</div>
                        <div>
                            <h5 class="fw-bold">Perangkingan</h5>
                            <p class="small text-muted mb-0">Menjumlahkan total nilai untuk mendapatkan skor akhir dan urutan peringkat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Fitur Utama</h2>
                <div class="line"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-display fs-1 text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Dashboard Interaktif</h5>
                            <p class="card-text text-muted small">Visualisasi data statistik sekolah dan kriteria dalam bentuk grafik yang mudah dipahami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-sliders fs-1 text-success mb-3"></i>
                            <h5 class="card-title fw-bold">Manajemen Kriteria</h5>
                            <p class="card-text text-muted small">Fleksibilitas penuh untuk menambah, mengubah, dan mengatur bobot kriteria penilaian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4 text-center">
                            <i class="bi bi-file-earmark-excel fs-1 text-secondary mb-3"></i>
                            <h5 class="card-title fw-bold">Export Excel Cerdas</h5>
                            <p class="card-text text-muted small">Unduh laporan lengkap dengan formula Excel aktif yang memungkinkan simulasi data offline.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Flow Section -->
    <section id="flow" class="text-white text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Siap untuk Memulai?</h2>
                    <p class="mb-5 lead opacity-75">Gunakan sistem ini untuk mendapatkan rekomendasi sekolah terbaik secara cepat dan terpercaya.</p>
                    <a href="{{ route('login') }}" class="btn btn-light btn-lg rounded-pill fw-bold text-primary px-5 py-3 shadow">
                        Masuk ke Sistem Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12">
                    <a href="#" class="d-flex align-items-center text-decoration-none mb-3 footer-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="rounded-circle">
                        <span class="fs-4 fw-bold text-white">SPK WSM</span>
                    </a>
                    <p class="small opacity-75">
                        Sistem Pendukung Keputusan Penentuan Sekolah Terbaik di Kabupaten Bireuen. 
                        Dibangun dengan teknologi modern untuk hasil yang akurat.
                    </p>
                    <div class="social-links mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-6">
                    <h6 class="fw-bold mb-3">Tautan</h6>
                    <ul class="list-unstyled small opacity-75 selection:bg-info">
                        <li class="mb-2"><a href="#hero" class="text-white text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Tentang</a></li>
                        <li class="mb-2"><a href="#features" class="text-white text-decoration-none">Fitur</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-6">
                    <h6 class="fw-bold mb-3">Sosial Media</h6>
                    <ul class="list-unstyled small opacity-75">
                        <li class="mb-2"><a href="https://github.com/dhal-afdhal" class="text-white text-decoration-none">Github</a></li>
                        <li class="mb-2"><a href="#features" class="text-white text-decoration-none">Instagram</a></li>
                        <li class="mb-2"><a href="#features" class="text-white text-decoration-none">Twitter</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12">
                    <h6 class="fw-bold mb-3">Kontak</h6>
                    <p class="small opacity-75 mb-1"><i class="bi bi-geo-alt me-2"></i> Kabupaten Bireuen, Aceh</p>
                    <p class="small opacity-75 mb-1"><i class="bi bi-envelope me-2"></i> admin@disdik-bireuen.go.id</p>
                    <p class="small opacity-75"><i class="bi bi-phone me-2"></i> (0644) 123456</p>
                </div>
            </div>
            
            <div class="border-top border-secondary mt-5 pt-4 text-center small opacity-50">
                &copy; {{ date('Y') }} SPK WSM Sekolah. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Init Animation
        AOS.init({
            duration: 800,
            once: true
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
