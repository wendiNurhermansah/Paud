<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita(){
        return view('berita.beritatop');
    }

    public function info(){
        return view('berita.infosekolah');
    }

    public function gallery(){
        return view('berita.gallery');
    }
}
