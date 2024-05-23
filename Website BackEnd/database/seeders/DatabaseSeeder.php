<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anak;
use App\Models\jadwal_imunisasi;
use App\Models\KembangAnak;
use App\Models\Orang_tua;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Anak::create([
        'nama' => 'Abey',
        'usia' => '2 bulan',
        'tanggal_lahir' => '2021-02-12',
        'jenis_kelamin' => 'Laki-laki',
        'tinggi_badan' => '20',
        'berat_badan' => '3',
        'nama_orangtua' => 'Barbabra',
        'nohp_ortu' => '0973648356',
        'alamat' => 'Jacksonville',
        'id_orangtua' => '1'
       ]);

       Anak::create([
        'nama' => 'Cacilie',
        'usia' => '5 bulan',
        'tanggal_lahir' => '2022-01-11',
        'jenis_kelamin' => 'Perempuan',
        'tinggi_badan' => '30',
        'berat_badan' => '5',
        'nama_orangtua' => 'Mallorie',
        'nohp_ortu' => '09823847283',
        'alamat' => 'Japan',
        'id_orangtua' => '2'
       ]);

       Anak::create([
        'nama' => 'inglis',
        'usia' => '4 bulan',
        'tanggal_lahir' => '2022-01-19',
        'jenis_kelamin' => 'Laki-laki',
        'tinggi_badan' => '35',
        'berat_badan' => '4',
        'nama_orangtua' => 'Agna',
        'nohp_ortu' => '087318473',
        'alamat' => 'GrennVille',
        'id_orangtua' => '3'
       ]);

       Anak::create([
        'nama' => 'Roley',
        'usia' => '7 bulan',
        'tanggal_lahir' => '2022-02-13',
        'jenis_kelamin' => 'Laki-laki',
        'tinggi_badan' => '45',
        'berat_badan' => '6',
        'nama_orangtua' => 'Francisca',
        'nohp_ortu' => '0984349458',
        'alamat' => 'Breiodalsvik',
        'id_orangtua' => '4'
       ]);
       Anak::create([
        'nama' => 'Persis',
        'usia' => '6 bulan',
        'tanggal_lahir' => '2022-02-23',
        'jenis_kelamin' => 'Perempuan',
        'tinggi_badan' => '30',
        'berat_badan' => '5',
        'nama_orangtua' => 'Nessie',
        'nohp_ortu' => '0875273264',
        'alamat' => 'Bengkalis-Sumatra Island',
        'id_orangtua' => '5'
       ]);

       User::create([
        'nama' => 'Barbabra',
        'email' => 'barbra@gmail.com',
        'password' => Hash::make('barbar'),
        'role' => 'orang tua'
       ]);

       User::create([
        'nama' => 'Mallorie',
        'email' => 'mallorie@gmail.com',
        'password' => Hash::make('barbar'),
        'role' => 'orang tua'
       ]);
       User::create([
        'nama' => 'Agna',
        'email' => 'agna@gmail.com',
        'password' => Hash::make('agna123'),
        'role' => 'orang tua'
       ]);

       User::create([
        'nama' => 'Francisca',
        'email' => 'fransisca@gmail.com',
        'password' => Hash::make('fransisca'),
        'role' => 'orang tua'
       ]);

       User::create([
        'nama' => 'Nessie',
        'email' => 'nessie@gmail.com',
        'password' => Hash::make('nessie1234'),
        'role' => 'orang tua'
       ]);

       jadwal_imunisasi::create([
        'usia' => '0-1 bulan',
        'jenis_imunisasi' => 'Polio 0 dan BCG'
       ]);

       jadwal_imunisasi::create([
        'usia' => '2 bulan',
        'jenis_imunisasi' => 'DP-HIB 1, Polio 1, hepatitis 2, rotavirus, PCV'
       ]);

       jadwal_imunisasi::create([
        'usia' => '3 bulan',
        'jenis_imunisasi' => 'DPT-HIB 2, Polio 2, hepatitis 3'
       ]);

       jadwal_imunisasi::create([
        'usia' => '4 bulan',
        'jenis_imunisasi' => 'DPT-HIB 3, Polio 3, hepatitis 4, rotavirus 2' 
       ]);

       jadwal_imunisasi::create([
        'usia' => '6 bulan',
        'jenis_imunisasi' => 'PCV 3, influenza 1, rotavirus 3'
       ]);
       jadwal_imunisasi::create([
        'usia' => '9 bulan',
        'jenis_imunisasi' => 'Campat atau MR'
       ]);

       KembangAnak::create([
        'id_anak' => '1',
        'tanggal' => '2023-03-30',
        'tinggi_badan' => '90',
        'berat_badan' => '30'
       ]);
       
       KembangAnak::create([
        'id_anak' => '2',
        'tanggal' => '2023-03-30',
        'tinggi_badan' => '70',
        'berat_badan' => '35'
       ]);

       KembangAnak::create([
        'id_anak' => '3',
        'tanggal' => '2023-03-30',
        'tinggi_badan' => '80',
        'berat_badan' => '37'
       ]);

       KembangAnak::create([
        'id_anak' => '4',
        'tanggal' => '2023-03-30',
        'tinggi_badan' => '60',
        'berat_badan' => '45'
       ]);

       KembangAnak::create([
        'id_anak' => '5',
        'tanggal' => '2023-03-30',
        'tinggi_badan' => '80',
        'berat_badan' => '55'
       ]);


    }
}
