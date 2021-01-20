<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class info_sekolah extends Model
{
    protected $table = 'info_sekolah';
    protected $fillable = ['id', 'nama_fasilitas', 'gambar', 'created_at', 'updated_at'];
}
