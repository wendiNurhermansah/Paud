<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['id', 'judul', 'isi_berita', 'gambar', 'created_at', 'updated_at'];
}
