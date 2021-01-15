<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\daftar_siswa;
use App\Models\prestasi;

class MiftahulController extends Controller
{
    public function home(){

        $berita = Berita::all();
        $daftar_siswa = Daftar_siswa::all();
        $prestasi = Prestasi::all();
        return view ('layouts.home', compact(
        'berita',
        'daftar_siswa',
        'prestasi'
        ));
    }

   
    public function profile(){
        return view('layouts.siswa');
    }

    public function prestasi(){
        return view('layouts.prestasi');
    }
}
