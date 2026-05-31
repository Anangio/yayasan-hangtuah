@extends('layouts.app')

@section('title', 'Beranda - Keberadaan Kami, Mencerdaskan Anda')

@section('content')
    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Selamat Datang di Website SMK Hang Tuah 1 Jakarta</h2>
                    <p class="lead">"Keberadaan Kami, Mencerdaskan Anda"</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Data Yayasan Section -->
    <div class="stats-section">
        <div class="container">
            <h3 class="stats-title">Data Yayasan Hang Tuah</h3>
            <p class="stats-subtitle">Berikut adalah Pencapaian yang telah kami raih dari awal berdirinya Yayasan Hang Tuah hingga saat ini</p>
            
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">{{ number_format($stats['satdik']) }}</div>
                        <div class="stat-label">Data Satdik</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">{{ number_format($stats['siswa']) }}</div>
                        <div class="stat-label">Data Siswa</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">{{ number_format($stats['guru']) }}</div>
                        <div class="stat-label">Data Guru</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">{{ number_format($stats['tendik']) }}</div>
                        <div class="stat-label">Data Tendik</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Satdik Yayasan Hang Tuah Pusat -->
    <div class="daerah-section">
        <div class="container">
            <h3 class="daerah-title">Satdik Yayasan Hang Tuah Pusat</h3>
            <p class="daerah-subtitle">Satuan Pendidikan di bawah Naungan Yayasan Hang Tuah Pusat</p>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="daerah-item" style="display: inline-block; width: auto; padding: 20px 40px;">
                        <i class="fas fa-school"></i>
                        <h5>PUSAT JAKARTA</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Satdik Seluruh Indonesia -->
    <div class="stats-section">
        <div class="container">
            <h3 class="stats-title">Satdik Yayasan Hang Tuah Seluruh Indonesia</h3>
            <p class="stats-subtitle">Satuan Pendidikan di bawah naungan Yayasan Hang Tuah seluruh Indonesia</p>
            
            <div class="daerah-grid">
                @foreach($daerah as $d)
                <div class="daerah-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>DAERAH {{ $d }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection