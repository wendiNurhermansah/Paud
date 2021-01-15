<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class daftar_siswa extends Model
{
    protected $table = 'daftar_siswa';
    protected $fillable = ['id', 'nama_siswa', 'gambar', 'created_at', 'updated_at'];
}
