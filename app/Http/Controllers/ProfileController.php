<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sejarah;
use App\Models\agenda;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\sambutan;
use App\Models\pendidik;

class ProfileController extends Controller
{
    public function sejarah(){
        $sejarah = Sejarah::all();
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        return view('profile.sejarah', compact(
            'sejarah',
            'agenda',
            'pengumuman',
            'berita'
        ));
    }

    public function sambutan(){
        $sejarah = Sejarah::all();
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $sambutan = Sambutan::all();
        return view('profile.sambutan', compact(
            'sambutan',
            'sejarah',
            'agenda',
            'pengumuman',
            'berita'
        ));
    }

    public function visi(){
        $sejarah = Sejarah::all();
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $sambutan = Sambutan::all();
        return view('profile.visi&misi', compact(
            'sambutan',
            'sejarah',
            'agenda',
            'pengumuman',
            'berita'
        ));
    }

    public function guru(){
        $sejarah = Sejarah::all();
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $sambutan = Sambutan::all();
        $pendidik = Pendidik::all();
        return view('profile.dataguru', compact(
            'sambutan',
            'sejarah',
            'agenda',
            'pengumuman',
            'berita',
            'pendidik'
        ));
    }

    
    
}
