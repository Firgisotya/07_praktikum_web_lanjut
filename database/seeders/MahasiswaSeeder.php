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
            'Email' => 'firgi@gmail.com',
            'Tanggal_Lahir' => '2002-02-28',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '081334552124',
        ],
        [
            'Nim' => 2041720001,
            'Nama' => 'Samsul',
            'Email' => 'samsul@gmail.com',
            'Tanggal_Lahir' => '2001-02-28',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '0872134124',
        ],
        [
            'Nim' => 2041720002,
            'Nama' => 'Arif',
            'Email' => 'arif@gmail.com',
            'Tanggal_Lahir' => '200-02-01',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '085124214',
        ],
        [
            'Nim' => 2041720003,
            'Nama' => 'Sofyan',
            'Email' => 'sofyan@gmail.com',
            'Tanggal_Lahir' => '2003-03-28',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '0816586534',
        ],
        [
            'Nim' => 2041720004,
            'Nama' => 'Dani',
            'Email' => 'dani@gmail.com',
            'Tanggal_Lahir' => '2003-03-02',
            'Kelas' => 'TI-2E',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '09823412',
        ],
        [
            'Nim' => 2041720005,
            'Nama' => 'Doni',
            'Email' => 'doni@gmail.com',
            'Tanggal_Lahir' => '2003-04-28',
            'Kelas' => 'TI-2H',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '32431241',
        ],
        [
            'Nim' => 2041720006,
            'Nama' => 'Dina',
            'Email' => 'dina@gmail.com',
            'Tanggal_Lahir' => '2003-03-28',
            'Kelas' => 'TI-2D',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '1249689120',
        ],
        [
            'Nim' => 2041720007,
            'Nama' => 'Rifa',
            'Email' => 'rifa@gmail.com',
            'Tanggal_Lahir' => '2003-08-01',
            'Kelas' => 'TI-2F',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '28345926',
        ],
        [
            'Nim' => 2041720008,
            'Nama' => 'Adi',
            'Email' => 'adi@gmail.com',
            'Tanggal_Lahir' => '2003-01-07',
            'Kelas' => 'TI-2B',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '82394023749',
        ],
        [
            'Nim' => 2041720009,
            'Nama' => 'Roni',
            'Email' => 'roni@gmail.com',
            'Tanggal_Lahir' => '2001-03-01',
            'Kelas' => 'TI-2C',
            'Jurusan' => 'Teknik Informatika',
            'No_Handphone' => '182469214680',
        ]
        ]);
    }
}
