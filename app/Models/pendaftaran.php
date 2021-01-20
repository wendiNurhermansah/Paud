<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['id', 'n_ayah', 'nik', 'alamat', 'pekerjaan', 'no_hp', 'n_siswa', 'umur', 'jenis_kelamin', 't_lahir', 'tanggal_L', 'created_at', 'updated_at'];
}
