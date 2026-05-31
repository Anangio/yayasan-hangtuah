<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Yayasan Hang Tuah - @yield('title', 'Keberadaan Kami, Mencerdaskan Anda')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
        }
        
        /* Top Bar dengan Email dan Telepon - Style Baru */
        .top-bar {
            background: linear-gradient(135deg, #001a33 0%, #002244 100%);
            color: white;
            padding: 8px 0;
            font-size: 13px;
            position: relative;
            z-index: 1001;
        }
        
        .top-bar .contact-info {
            display: flex;
            justify-content: flex-end;
            gap: 25px;
        }
        
        .top-bar .contact-info span {
            transition: all 0.3s ease;
        }
        
        .top-bar .contact-info span:hover {
            transform: translateY(-2px);
        }
        
        .top-bar i {
            margin-right: 8px;
            font-size: 14px;
        }
        
        /* Main Header */
        .main-header {
            background: linear-gradient(135deg, #004d99 0%, #003366 100%);
            color: white;
            padding: 30px 0;
            position: relative;
            overflow: hidden;
        }
        
        .main-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .main-header::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 250px;
            height: 250px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .logo-area {
            position: relative;
            z-index: 2;
        }
        
        .logo-area h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .logo-area p {
            font-size: 14px;
            margin: 8px 0 0;
            opacity: 0.9;
            font-style: italic;
        }
        
        /* Navigation - Navbar Cantik Modern */
        .navbar-custom {
            background: linear-gradient(135deg, #002244 0%, #001a33 100%);
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            border-bottom: 2px solid #ffd700;
        }
        
        .navbar-custom .container {
            position: relative;
        }
        
        .navbar-custom .navbar-nav {
            margin: 0 auto;
            gap: 5px;
        }
        
        .navbar-custom .nav-item {
            margin: 0;
            padding: 0;
            position: relative;
        }
        
        /* Efek garis bawah animasi */
        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            padding: 18px 22px;
            font-weight: 500;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
            letter-spacing: 0.5px;
        }
        
        .navbar-custom .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #ffd700, #ffed4a);
            transition: width 0.3s ease;
            border-radius: 3px 3px 0 0;
        }
        
        .navbar-custom .nav-link:hover::before {
            width: 70%;
        }
        
        .navbar-custom .nav-link.active::before {
            width: 70%;
        }
        
        .navbar-custom .nav-link:hover {
            color: white !important;
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-2px);
        }
        
        .navbar-custom .nav-link.active {
            color: white !important;
            background: rgba(255, 215, 0, 0.15);
        }
        
        /* Dropdown untuk menu (jika diperlukan di masa depan) */
        .dropdown-menu {
            background: linear-gradient(135deg, #002244, #001a33);
            border: none;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin-top: 0;
            padding: 10px 0;
        }
        
        .dropdown-item {
            color: white;
            padding: 10px 25px;
            transition: all 0.3s;
        }
        
        .dropdown-item:hover {
            background: #004d99;
            color: white;
        }
        
        /* Navbar Toggler */
        .navbar-toggler {
            background: #004d99;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.5);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 51, 102, 0.85), rgba(0, 51, 102, 0.85)), url('https://via.placeholder.com/1920x400?text=Yayasan+Hang+Tuah');
            background-size: cover;
            background-position: center;
            height: 350px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
        }
        
        .hero h2 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 0.8s ease;
        }
        
        .hero p {
            font-size: 18px;
            animation: fadeInUp 0.8s ease 0.2s both;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Stats Section */
        .stats-section {
            padding: 70px 0;
            background-color: #fff;
        }
        
        .stats-title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #003366;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .stats-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ffd700, #003366);
            margin: 15px auto 0;
            border-radius: 2px;
        }
        
        .stats-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 50px;
            font-size: 16px;
        }
        
        .stat-card {
            text-align: center;
            padding: 35px 20px;
            background: linear-gradient(135deg, #004d99, #003366);
            border-radius: 15px;
            color: white;
            transition: all 0.4s ease;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.05);
            transform: rotate(45deg);
            transition: all 0.5s;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 35px rgba(0,0,0,0.2);
        }
        
        .stat-card:hover::before {
            top: -30%;
            right: -30%;
        }
        
        .stat-number {
            font-size: 52px;
            font-weight: 800;
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 18px;
            opacity: 0.9;
            font-weight: 500;
        }
        
        /* Daerah Section */
        .daerah-section {
            padding: 70px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .daerah-title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #003366;
            margin-bottom: 15px;
        }
        
        .daerah-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ffd700, #003366);
            margin: 15px auto 0;
            border-radius: 2px;
        }
        
        .daerah-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 50px;
        }
        
        .daerah-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
        }
        
        .daerah-item {
            background: white;
            padding: 25px 15px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid rgba(0,51,102,0.1);
        }
        
        .daerah-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            background: linear-gradient(135deg, #004d99, #003366);
            color: white;
        }
        
        .daerah-item i {
            font-size: 40px;
            color: #004d99;
            margin-bottom: 15px;
            transition: all 0.3s;
        }
        
        .daerah-item:hover i {
            color: white;
            transform: scale(1.1);
        }
        
        .daerah-item h5 {
            margin: 0;
            font-size: 16px;
            font-weight: 600;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, #001a33, #002244);
            color: white;
            padding: 50px 0 20px;
        }
        
        footer h5 {
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        footer h5::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: #ffd700;
            border-radius: 2px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: #ffd700;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-block;
            margin-right: 15px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 13px;
            color: #aaa;
        }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #004d99, #003366);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -10%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }
        
        .page-header h1 {
            font-size: 38px;
            font-weight: 700;
            position: relative;
            z-index: 2;
        }
        
        .breadcrumb {
            background: transparent;
            padding: 0;
            justify-content: center;
            position: relative;
            z-index: 2;
        }
        
        .breadcrumb-item a {
            color: #ffd700;
            text-decoration: none;
        }
        
        .breadcrumb-item a:hover {
            text-decoration: underline;
        }
        
        .breadcrumb-item.active {
            color: white;
        }
        
        .content-section {
            padding: 70px 0;
            min-height: 500px;
        }
        
        /* Card Style untuk halaman lain */
        .card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #004d99, #003366);
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #003366, #002244);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,51,102,0.3);
        }
        
        .btn-outline-primary {
            border: 2px solid #004d99;
            color: #004d99;
        }
        
        .btn-outline-primary:hover {
            background: linear-gradient(135deg, #004d99, #003366);
            border-color: transparent;
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .navbar-custom .navbar-nav {
                gap: 0;
                padding: 15px 0;
            }
            
            .navbar-custom .nav-link {
                padding: 12px 20px;
            }
            
            .navbar-custom .nav-link::before {
                display: none;
            }
            
            .navbar-custom .nav-link:hover {
                background: #004d99;
            }
            
            .top-bar .contact-info {
                justify-content: center;
                margin-top: 8px;
            }
            
            .top-bar .text-end {
                text-align: center !important;
            }
            
            .hero h2 {
                font-size: 28px;
            }
            
            .stat-number {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>

    <!-- Top Bar dengan Email dan Telepon -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <i class="fas fa-envelope"></i> hangtuah_pusat@yahoo.co.id
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <span><i class="fas fa-phone"></i> 0214500718</span>
                        <span><i class="fas fa-clock"></i> Senin - Jumat, 07:30 - 16:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <div class="main-header">
        <div class="container">
            <div class="logo-area text-center">
                <h1 style="font-weight: bold;">Selamat Datang di SMK Hang Tuah 1 Jakarta</h1>
                <p>"Wujudkan masa depan cerah anak Anda bersama kami"</p>
            </div>
        </div>
    </div>
    
    <!-- Navigation Navbar Cantik -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">
                            <i class="fas fa-info-circle me-1"></i> Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('berita') }}">
                            <i class="fas fa-newspaper me-1"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('daerah') ? 'active' : '' }}" href="{{ route('daerah') }}">
                            <i class="fas fa-map-marker-alt me-1"></i> Daerah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('perwakilan') ? 'active' : '' }}" href="{{ route('perwakilan') }}">
                            <i class="fas fa-building me-1"></i> Perwakilan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('elearning') ? 'active' : '' }}" href="{{ route('elearning') }}">
                            <i class="fas fa-laptop me-1"></i> E-Learning
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sistem-informasi') ? 'active' : '' }}" href="{{ route('sistem-informasi') }}">
                            <i class="fas fa-database me-1"></i> Sistem Informasi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Content -->
    @yield('content')
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Yayasan Hang Tuah</h5>
                    <p>Berdedikasi untuk mencerdaskan kehidupan bangsa melalui pendidikan berkualitas.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Kontak Kami</h5>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i> Jl. Pendidikan No. 123, Jakarta<br>
                        <i class="fas fa-phone me-2"></i> 0214500718<br>
                        <i class="fas fa-envelope me-2"></i> hangtuah_pusat@yahoo.co.id
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Menu Cepat</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('berita') }}">Berita</a></li>
                        <li><a href="{{ route('perwakilan') }}">Perwakilan</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} RRS Production.
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>