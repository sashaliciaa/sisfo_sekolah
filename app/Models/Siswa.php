<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $table = "tbl_siswa";

    protected $fillable = [
        'id', 'nis', 'nm_siswa', 'gender', 'tgl_lahir', 'alamat', 'gambar'
    ];
}
