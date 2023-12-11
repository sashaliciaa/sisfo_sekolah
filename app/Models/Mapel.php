<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    public $table = "tbl_mapel";

    protected $fillable = [
        'id_mapel','nm_mapel','nm_guru'
    ];
}
