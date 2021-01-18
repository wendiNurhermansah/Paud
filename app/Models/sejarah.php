<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sejarah extends Model
{
    protected $table = 'sejarah';
    protected $fillable = ['id', 'isi', 'gambar', 'created_at', 'updated_at'];
}
