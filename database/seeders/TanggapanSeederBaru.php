<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TanggapanSeederBaru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $petugasid = DB::table('petugas')->insertGetId([
            "id_petugas" => "01",
            "nama_petugas" => "Theresia Marpaung",
            "usename" => "Theresia",
            "password" => substr(md5("theresia"), 0, 32),
            "telepon" => "087810717145",
            "level" => "admin",
        ]);
    }
}
