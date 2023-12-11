<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    public $table = "tbl_guru";

    protected $fillable = [
        'id_guru','nuptk','nm_guru','gender','tgl_lahir','alamat'
    ];
}
