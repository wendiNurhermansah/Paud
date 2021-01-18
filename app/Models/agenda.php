<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $table = 'agenda';
    protected $fillable = ['id', 'isi_agenda', 'created_at', 'updated_at'];
}

