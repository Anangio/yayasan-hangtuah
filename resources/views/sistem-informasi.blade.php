@extends('layouts.app')

@section('title', 'Sistem Informasi Yayasan Hang Tuah')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>Sistem Informasi Yayasan Hang Tuah</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Sistem Informasi</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <!-- Intro -->
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h3>Sistem Informasi Terintegrasi</h3>
                    <p>Akses berbagai layanan informasi Yayasan Hang Tuah dalam satu platform</p>
                </div>
            </div>
            
            <!-- Layanan Sistem Informasi -->
            <div class="row">
                <!-- SIPENDIK -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-database" style="font-size: 48px; color: #003366;"></i>
                            </div>
                            <h4>SIPENDIK</h4>
                            <p class="text-muted">Sistem Informasi Pendataan Pendidikan</p>
                            <hr>
                            <p>Data siswa, guru, tendik, dan satuan pendidikan</p>
                            <a href="#" class="btn btn-primary">Akses SIPENDIK</a>
                        </div>
                    </div>
                </div>
                
                <!-- SIKEP -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-users" style="font-size: 48px; color: #003366;"></i>
                            </div>
                            <h4>SIKEP</h4>
                            <p class="text-muted">Sistem Informasi Kepegawaian</p>
                            <hr>
                            <p>Data kepegawaian, absensi, dan penggajian guru & tendik</p>
                            <a href="#" class="btn btn-primary">Akses SIKEP</a>
                        </div>
                    </div>
                </div>
                
                <!-- SIKAS -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-money-bill-wave" style="font-size: 48px; color: #003366;"></i>
                            </div>
                            <h4>SIKAS</h4>
                            <p class="text-muted">Sistem Informasi Keuangan & SPP</p>
                            <hr>
                            <p>Informasi pembayaran SPP, gaji, dan keuangan sekolah</p>
                            <a href="#" class="btn btn-primary">Akses SIKAS</a>
                        </div>
                    </div>
                </div>
                
                <!-- SIMPUS -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-book" style="font-size: 48px; color: #003366;"></i>
                            </div>
                            <h4>SIMPUS</h4>
                            <p class="text-muted">Sistem Informasi Perpustakaan</p>
                            <hr>
                            <p>Katalog buku, peminjaman, dan pengembalian buku online</p>
                            <a href="#" class="btn btn-primary">Akses SIMPUS</a>
                        </div>
                    </div>
                </div>
                
                <!-- SIRAPAT -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-chart-line" style="font-size: 48px; color: #003366;"></i>
                            </div>
                            <h4>SIRAPAT</h4>
                            <p class="text-muted">Sistem Informasi Raport Digital</p>
                            <hr>
                            <p>Lihat raport dan nilai siswa secara online</p>
                            <a href="#" class="btn btn-primary">Akses SIRAPAT</a>
                        </div>
                    </div>
                </div>
                
                <!-- SIPPN -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-school" style="font-size: 48px; color: #003366;"></i>
                            </div>
                            <h4>SIPPN</h4>
                            <p class="text-muted">Sistem Informasi PPDB Online</p>
                            <hr>
                            <p>Pendaftaran peserta didik baru secara online</p>
                            <a href="#" class="btn btn-primary">Akses SIPPN</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Informasi Tambahan -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-warning text-center">
                        <i class="fas fa-exclamation-triangle"></i> 
                        <strong>Perhatian:</strong> Untuk mengakses sistem informasi, Anda harus login terlebih dahulu. 
                        Hubungi admin sekolah jika mengalami kendala.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection