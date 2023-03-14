<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $data = [
            [
                'foto_profile' => 'hanif.jpeg',
                'nama' => 'Hanif Naufal Rafandi',
                'slug' => 'hanif',
                'pendidikan' => 'Mahasiswa',
                'kelas' => 'TI-2G',
                'absen' => '14',
                'nim' => '2141720127',
                'nohp' => '081235485829'
            ],
            [
                'foto_profile' => 'trisinus.jpeg',
                'nama' => 'Trisinus Gulo',
                'slug' => 'trisinus',
                'pendidikan' => 'Mahasiswa',
                'kelas' => 'TI-2G',
                'absen' => '28',
                'nim' => '2141720035',
                'nohp' => '081235487842'
            ]
        ];
        DB::table('profile')->insert($data);
    }
}
