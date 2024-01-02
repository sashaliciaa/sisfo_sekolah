<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    public $table = "tbl_nilai";

    protected $fillable = [
        'id', 'absensi', 'tugas', 'uts', 'uas', 'total', 'grade', 'id_siswa'
    ];
}
