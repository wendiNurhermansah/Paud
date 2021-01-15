<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table = 'prestasi';
    protected $fillable = ['id', 'n_prestasi', 'isi_prestasi', 'gambar', 'created_at', 'updated_at'];
}
