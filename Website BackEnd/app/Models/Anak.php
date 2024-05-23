<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $fillable = ([
        'nama',
        'usia',
        'tanggal_lahir',
        'jenis_kelamin',
        'tinggi_badan',
        'berat_badan',
        'nama_orangtua',
        'nohp_ortu',
        'alamat',
        'id_orangtua'
    ]);

    public static function countAnak()
    {
        return static::count();
    }

    // public function orangtua(){
    //     return $this->belongsTo(Orang_tua::class, 'id_ortu', 'id');
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
