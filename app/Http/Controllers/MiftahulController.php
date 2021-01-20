<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\daftar_siswa;
use App\Models\prestasi;
use App\Models\agenda;
use App\Models\pengumuman;
use App\Models\pendaftaran;


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
        $berita = Berita::all();
        $daftar_siswa = Daftar_siswa::all();
        $prestasi = Prestasi::all();
        return view('layouts.siswa', compact(
            'berita',
            'daftar_siswa',
            'prestasi'
        ));
    }

    public function prestasi(){
        $berita = Berita::all();
        $daftar_siswa = Daftar_siswa::all();
        $prestasi = Prestasi::all();
        $agenda = Agenda::all();
        $pengumuman = Pengumuman::all();
        return view('layouts.prestasi', compact(
            'berita',
            'daftar_siswa',
            'prestasi',
            'agenda',
            'pengumuman'
        ));
    }

    public function store(Request $request){
        $request->validate([
            'n_ayah' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'n_siswa' => 'required',
            'umur' => 'required',
            't_lahir' => 'required',
            'tanggal_L' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $pendaftaran = new pendaftaran();
        $pendaftaran->n_ayah = $request->n_ayah;
        $pendaftaran->nik = $request->nik;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->pekerjaan = $request->pekerjaan;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->n_siswa = $request->n_siswa;
        $pendaftaran->umur = $request->umur;
        $pendaftaran->t_lahir = $request->t_lahir;
        $pendaftaran->tanggal_L = $request->tanggal_L;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->save();

        return response()->json([
            'massage' => 'data berhasil di tambahkan.'
        ]);
    }
}
