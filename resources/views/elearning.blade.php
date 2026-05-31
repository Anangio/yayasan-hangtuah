@extends('layouts.app')

@section('title', 'E-Learning Yayasan Hang Tuah')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>E-Learning Yayasan Hang Tuah</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">E-Learning</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <!-- Intro Section -->
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h3>Platform Pembelajaran Digital</h3>
                    <p>Akses materi pembelajaran, tugas, dan ujian secara online kapan saja dan dimana saja</p>
                </div>
            </div>
            
            <!-- Fitur E-Learning -->
            <div class="row mb-5">
                <div class="col-md-3 text-center mb-4">
                    <div class="p-4 border rounded shadow-sm">
                        <i class="fas fa-chalkboard-teacher" style="font-size: 48px; color: #003366;"></i>
                        <h5 class="mt-3">Video Pembelajaran</h5>
                        <p class="text-muted">Akses ribuan video pembelajaran interaktif</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="p-4 border rounded shadow-sm">
                        <i class="fas fa-tasks" style="font-size: 48px; color: #003366;"></i>
                        <h5 class="mt-3">Tugas Online</h5>
                        <p class="text-muted">Kerjakan dan kumpulkan tugas secara digital</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="p-4 border rounded shadow-sm">
                        <i class="fas fa-file-alt" style="font-size: 48px; color: #003366;"></i>
                        <h5 class="mt-3">Ujian Online</h5>
                        <p class="text-muted">Ikuti ujian dengan sistem computerized</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="p-4 border rounded shadow-sm">
                        <i class="fas fa-chart-line" style="font-size: 48px; color: #003366;"></i>
                        <h5 class="mt-3">Laporan Nilai</h5>
                        <p class="text-muted">Pantau perkembangan nilai secara realtime</p>
                    </div>
                </div>
            </div>
            
            <!-- Pilihan Login -->
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="mb-0">Login E-Learning</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-3">
                                <a href="#" class="btn btn-outline-primary btn-lg">
                                    <i class="fas fa-user-graduate"></i> Login sebagai Siswa
                                </a>
                                <a href="#" class="btn btn-outline-success btn-lg">
                                    <i class="fas fa-chalkboard-user"></i> Login sebagai Guru
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-lg">
                                    <i class="fas fa-user-tie"></i> Login sebagai Admin
                                </a>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <small>Belum punya akun? <a href="#">Hubungi Administrator Sekolah</a></small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Informasi Tambahan -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle"></i> Untuk informasi lebih lanjut tentang E-Learning, silakan hubungi operator sekolah masing-masing.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection