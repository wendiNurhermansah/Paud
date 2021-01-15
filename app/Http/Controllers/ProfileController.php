<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
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

    
    
}
