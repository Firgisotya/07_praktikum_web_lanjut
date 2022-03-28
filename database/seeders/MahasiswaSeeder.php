<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
        [
            'Nim' => 2041720207,
            'Nama' => 'Firgi Sotya Izzuddin',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '081334552124',
        ],
        [
            'Nim' => 2041720001,
            'Nama' => 'Samsul',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '0872134124',
        ],
        [
            'Nim' => 2041720002,
            'Nama' => 'Arif',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '085124214',
        ],
        [
            'Nim' => 2041720003,
            'Nama' => 'Sofyan',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '0816586534',
        ]
        ]);
    }
}
