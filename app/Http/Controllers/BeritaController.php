<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\info_sekolah;
use App\Models\gallery;

class BeritaController extends Controller
{
    public function berita(){
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        return view('berita.beritatop', compact(
            'agenda',
            'pengumuman',
            'berita'
        ));
    }

    public function info(){
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $info_sekolah = Info_sekolah::all();
        return view('berita.infosekolah', compact(
            'agenda',
            'pengumuman',
            'berita',
            'info_sekolah'
        ));
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view('berita.gallery', compact('gallery'));
    }
}
