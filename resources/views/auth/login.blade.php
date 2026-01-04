<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SPK WSM Sekolah</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-card">
        <div class="login-left">
            <div class="text-center w-100" style="max-width: 350px;">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Sekolah" class="logo-img" onerror="this.src='https://ui-avatars.com/api/?name=SPK+Admin&background=4e73df&color=fff&size=100'">
                <h3 class="fw-bold text-gray-900 mb-1">Selamat Datang</h3>
                <p class="text-muted mb-4 small">Silakan login untuk mengakses sistem SPK WSM.</p>

                @if ($errors->any())
                    <div class="alert alert-danger py-2 text-start small border-0 bg-danger bg-opacity-10 text-danger rounded-3">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label ms-1 small fw-bold text-muted">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 border rounded-start-3 ps-3 text-muted"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control border-start-0 ps-2" placeholder="contoh@sekolah.sch.id" required>
                        </div>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="form-label ms-1 small fw-bold text-muted">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 border rounded-start-3 ps-3 text-muted"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" class="form-control border-start-0 ps-2" placeholder="••••••••" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        Login Sekarang <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="login-right">
            <div class="login-right-content">
                <h2 class="fw-bold mb-3">Sistem Pendukung Keputusan</h2>
                <p class="lead mb-4">Penentuan Sekolah Terbaik menggunakan metode Weighted Sum Model yang akurat dan transparan.</p>
                <div class="d-flex justify-content-center gap-3">
                    <div class="bg-white bg-opacity-25 p-3 rounded-3 text-white">
                        <i class="bi bi-check-circle fs-3 d-block mb-1"></i>
                        <small>Akurat</small>
                    </div>
                    <div class="bg-white bg-opacity-25 p-3 rounded-3 text-white">
                        <i class="bi bi-lightning fs-3 d-block mb-1"></i>
                        <small>Cepat</small>
                    </div>
                    <div class="bg-white bg-opacity-25 p-3 rounded-3 text-white">
                        <i class="bi bi-graph-up fs-3 d-block mb-1"></i>
                        <small>Terukur</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
