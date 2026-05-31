@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>Tentang Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sejarah Yayasan Hang Tuah</h3>
                    <p>Yayasan Hang Tuah didirikan pada tahun 1960 dengan tujuan untuk mencerdaskan kehidupan bangsa melalui pendidikan yang berkualitas.</p>
                    <p>Sejak awal berdirinya, Yayasan Hang Tuah telah berkomitmen untuk memberikan layanan pendidikan terbaik bagi masyarakat Indonesia.</p>
                    <p>Saat ini Yayasan Hang Tuah telah memiliki 137 satuan pendidikan yang tersebar di seluruh Indonesia.</p>
                </div>
                <div class="col-md-6">
                    <h3>Visi & Misi</h3>
                    <h5>Visi</h5>
                    <p>Menjadi yayasan pendidikan terkemuka yang menghasilkan generasi unggul, berkarakter, dan berdaya saing global.</p>
                    <h5>Misi</h5>
                    <ul>
                        <li>Menyelenggarakan pendidikan berkualitas</li>
                        <li>Mengembangkan potensi peserta didik secara optimal</li>
                        <li>Membangun karakter yang kuat berdasarkan nilai-nilai luhur</li>
                        <li>Meningkatkan kompetensi pendidik dan tenaga kependidikan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection