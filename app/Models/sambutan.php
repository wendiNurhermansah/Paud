<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sambutan extends Model
{
    protected $table = 'sambutan';
    protected $fillable = ['id', 'isi_sambutan', 'created_at', 'updated_at'];
}
