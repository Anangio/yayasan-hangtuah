@extends('layouts.app')

@section('title', 'Perwakilan Yayasan Hang Tuah')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>Perwakilan Yayasan Hang Tuah</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Perwakilan</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h3>Perwakilan Daerah Yayasan Hang Tuah</h3>
                    <p>Berikut adalah daftar perwakilan Yayasan Hang Tuah di seluruh Indonesia</p>
                </div>
            </div>
            
            <div class="row">
                <!-- Perwakilan Jakarta -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <!-- Logo Hang Tuah - Gunakan gambar logo asli -->
                                <div class="logo-perwakilan" style="width: 80px; height: 80px; margin: 0 auto;">
                                    <img src="{{ asset('images/logo-hangtuah.png') }}" alt="Logo Hang Tuah" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <small class="d-block mt-2" style="color: #003366; font-weight: bold;">HANG TUAH</small>
                            </div>
                            <h4 class="text-center" style="color: #003366;">Perwakilan Jakarta</h4>
                            <p class="text-center text-muted">Pusat</p>
                            <hr>
                            <p><i class="fas fa-map-marker-alt" style="width: 25px; color: #003366;"></i> Jl. Pendidikan No. 123, Jakarta Pusat</p>
                            <p><i class="fas fa-phone" style="width: 25px; color: #003366;"></i> (021) 1234567</p>
                            <p><i class="fas fa-envelope" style="width: 25px; color: #003366;"></i> jakarta@yayasantungtuah.sch.id</p>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Perwakilan Surabaya -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="logo-perwakilan" style="width: 80px; height: 80px; margin: 0 auto;">
                                    <img src="{{ asset('images/logo-hangtuah.png') }}" alt="Logo Hang Tuah" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <small class="d-block mt-2" style="color: #003366; font-weight: bold;">HANG TUAH</small>
                            </div>
                            <h4 class="text-center" style="color: #003366;">Perwakilan Surabaya</h4>
                            <p class="text-center text-muted">Jawa Timur</p>
                            <hr>
                            <p><i class="fas fa-map-marker-alt" style="width: 25px; color: #003366;"></i> Jl. Raya Darmo No. 45, Surabaya</p>
                            <p><i class="fas fa-phone" style="width: 25px; color: #003366;"></i> (031) 7654321</p>
                            <p><i class="fas fa-envelope" style="width: 25px; color: #003366;"></i> surabaya@yayasantungtuah.sch.id</p>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Perwakilan Medan -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="logo-perwakilan" style="width: 80px; height: 80px; margin: 0 auto;">
                                    <img src="{{ asset('images/logo-hangtuah.png') }}" alt="Logo Hang Tuah" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <small class="d-block mt-2" style="color: #003366; font-weight: bold;">HANG TUAH</small>
                            </div>
                            <h4 class="text-center" style="color: #003366;">Perwakilan Medan</h4>
                            <p class="text-center text-muted">Sumatera Utara</p>
                            <hr>
                            <p><i class="fas fa-map-marker-alt" style="width: 25px; color: #003366;"></i> Jl. Sudirman No. 78, Medan</p>
                            <p><i class="fas fa-phone" style="width: 25px; color: #003366;"></i> (061) 9876543</p>
                            <p><i class="fas fa-envelope" style="width: 25px; color: #003366;"></i> medan@yayasantungtuah.sch.id</p>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Perwakilan Makassar -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="logo-perwakilan" style="width: 80px; height: 80px; margin: 0 auto;">
                                    <img src="{{ asset('images/logo-hangtuah.png') }}" alt="Logo Hang Tuah" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <small class="d-block mt-2" style="color: #003366; font-weight: bold;">HANG TUAH</small>
                            </div>
                            <h4 class="text-center" style="color: #003366;">Perwakilan Makassar</h4>
                            <p class="text-center text-muted">Sulawesi Selatan</p>
                            <hr>
                            <p><i class="fas fa-map-marker-alt" style="width: 25px; color: #003366;"></i> Jl. Sultan Hasanuddin No. 12, Makassar</p>
                            <p><i class="fas fa-phone" style="width: 25px; color: #003366;"></i> (0411) 456789</p>
                            <p><i class="fas fa-envelope" style="width: 25px; color: #003366;"></i> makassar@yayasantungtuah.sch.id</p>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Perwakilan Jayapura -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="logo-perwakilan" style="width: 80px; height: 80px; margin: 0 auto;">
                                    <img src="{{ asset('images/logo-hangtuah.png') }}" alt="Logo Hang Tuah" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <small class="d-block mt-2" style="color: #003366; font-weight: bold;">HANG TUAH</small>
                            </div>
                            <h4 class="text-center" style="color: #003366;">Perwakilan Jayapura</h4>
                            <p class="text-center text-muted">Papua</p>
                            <hr>
                            <p><i class="fas fa-map-marker-alt" style="width: 25px; color: #003366;"></i> Jl. Percetakan No. 34, Jayapura</p>
                            <p><i class="fas fa-phone" style="width: 25px; color: #003366;"></i> (0967) 789012</p>
                            <p><i class="fas fa-envelope" style="width: 25px; color: #003366;"></i> jayapura@yayasantungtuah.sch.id</p>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Perwakilan Balikpapan -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="logo-perwakilan" style="width: 80px; height: 80px; margin: 0 auto;">
                                    <img src="{{ asset('images/logo-hangtuah.png') }}" alt="Logo Hang Tuah" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <small class="d-block mt-2" style="color: #003366; font-weight: bold;">HANG TUAH</small>
                            </div>
                            <h4 class="text-center" style="color: #003366;">Perwakilan Balikpapan</h4>
                            <p class="text-center text-muted">Kalimantan Timur</p>
                            <hr>
                            <p><i class="fas fa-map-marker-alt" style="width: 25px; color: #003366;"></i> Jl. Jenderal Sudirman No. 56, Balikpapan</p>
                            <p><i class="fas fa-phone" style="width: 25px; color: #003366;"></i> (0542) 345678</p>
                            <p><i class="fas fa-envelope" style="width: 25px; color: #003366;"></i> balikpapan@yayasantungtuah.sch.id</p>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection