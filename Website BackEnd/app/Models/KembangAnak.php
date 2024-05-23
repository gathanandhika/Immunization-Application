<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KembangAnak extends Model
{
    use HasFactory;
    protected $fillable = ([
        'id_anak',
        'tanggal',
        'tinggi_badan',
        'berat_badan'
    ]);
}
