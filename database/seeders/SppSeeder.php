<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('spps')->insert([
            'id_spp' =>rand(1, 50),
            'tahun' => random_int(1999, 2024),
            'nominal' => rand(1, 15),
        ]);
    }
}
