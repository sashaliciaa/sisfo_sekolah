<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_Kelas extends Model
{
    use HasFactory;

    public $table = "tbl_kelas";

    protected $fillable = [
        'id', 'kd_kelas', 'nm_kelas', 'jurusan', 'tingkat'
    ];
}
