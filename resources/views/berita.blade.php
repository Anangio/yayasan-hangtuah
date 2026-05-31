@extends('layouts.app')

@section('title', 'Berita')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>Berita & Kegiatan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Berita</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Wisuda Akbar Yayasan Hang Tuah 2026</h5>
                            <p class="card-text">Telah dilaksanakan wisuda akbar untuk seluruh satuan pendidikan di lingkungan Yayasan Hang Tuah.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                        <div class="card-footer text-muted">
                            <i class="fas fa-calendar"></i> 31 Mei 2026
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Pelatihan Guru Nasional</h5>
                            <p class="card-text">Yayasan Hang Tuah mengadakan pelatihan guru tingkat nasional untuk meningkatkan kompetensi.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                        <div class="card-footer text-muted">
                            <i class="fas fa-calendar"></i> 15 Mei 2026
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Penerimaan Peserta Didik Baru</h5>
                            <p class="card-text">Penerimaan peserta didik baru tahun ajaran 2026/2027 telah dibuka.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                        <div class="card-footer text-muted">
                            <i class="fas fa-calendar"></i> 1 Mei 2026
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection