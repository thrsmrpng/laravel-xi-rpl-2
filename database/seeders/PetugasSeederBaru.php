<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeederBaru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('petugas')->insert([
            "id_petugas" => random_int(1, 20),
            "nama_petugas" => Str::random(35),
            "username" => Str::random(25),
            "password" => substr(md5(Str::random(32)), 0, 32),
            "telepon" => Str::random(13),
            "level" => "admin",
        ]);
    }
}
