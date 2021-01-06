<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiftahulController extends Controller
{
    public function home(){
        return view ('layouts.home');
    }

    public function sejarah(){
        return view('profile.sejarah');
    }

    public function sambutan(){
        return view('profile.sambutan');
    }

    public function visi(){
        return view('profile.visi&misi');
    }

    public function guru(){
        return view('profile.dataguru');
    }

    public function berita(){
        return view('berita.beritatop');
    }

    public function info(){
        return view('berita.infosekolah');
    }
}
