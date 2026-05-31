@extends('layouts.app')

@section('title', 'Daerah')

@section('content')
    <div class="page-header">
        <div class="container">
            <h1>Wilayah Daerah</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Daerah</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <div class="daerah-grid">
                @php
                    $daerah = ['AMBON', 'BATAM', 'BELAWAN', 'JAKARTA', 'JAYAPURA', 'KUPANG', 'MAKASSAR', 'MANADO', 'MERAUKE', 'PADANG', 'PONTIANAK', 'SORONG'];
                @endphp
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