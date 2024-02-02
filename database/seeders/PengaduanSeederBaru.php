<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeederBaru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $nik = DB::table('masyarakat')->insertGetId([
        "nik" => "2223178345907862",
        "nama" => "Theresia Marpaung",
        "username" => "theresia",
        "password" => substr(md5("theresia"), 0, 32),
        "telepon" => "087810717145",
       ]);
       DB::table('pengaduan')->insert([
        "id_pengaduan" =>random_int(1, 20),
        "tgl_pengaduan" => now(),
        "nik" => "2223178345907862",
        "isi_laporan" => Str::random(255),
        "foto" => Str::random(255),
        "status" => '0'
       ]);
    }
}
