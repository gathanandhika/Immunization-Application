<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_imunisasi extends Model
{
    use HasFactory;
    protected $fillable = ([
        'usia',
        'jenis_imunisasi'
    ]);
}
