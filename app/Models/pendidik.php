<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pendidik extends Model
{
    protected $table = 'pendidik';
    protected $fillable = ['id', 'nama_pendidik', 'gambar', 'created_at', 'updated_at'];
}
