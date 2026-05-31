<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            'satdik' => 137,
            'siswa' => 22647,
            'guru' => 1556,
            'tendik' => 468
        ];
        
        $daerah = [
            'AMBON', 'BATAM', 'BELAWAN', 'JAKARTA', 'JAYAPURA', 'KUPANG',
            'MAKASSAR', 'MANADO', 'MERAUKE', 'PADANG', 'PONTIANAK', 'SORONG'
        ];
        
        return view('home', compact('stats', 'daerah'));
    }
    
    public function tentang()
    {
        return view('tentang');
    }
    
    public function berita()
    {
        return view('berita');
    }
    
    public function daerah()
    {
        return view('daerah');
    }
    
    public function perwakilan()
    {
        return view('perwakilan');
    }
    
    public function elearning()
    {
        return view('elearning');
    }
    
    public function sistemInformasi()
    {
        return view('sistem-informasi');
    }
}