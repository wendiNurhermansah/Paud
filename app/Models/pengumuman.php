<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['id', 'isi_pengumuman', 'created_at', 'updated_at'];
}
