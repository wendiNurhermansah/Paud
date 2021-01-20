<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
    protected $fillble = ['id', 'n_gallery', 'gambar', 'created_at', 'updated_at'];
}
