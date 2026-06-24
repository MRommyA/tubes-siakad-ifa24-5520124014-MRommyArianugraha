<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');

        $matkuls = [
            'Basis Data',
            'Struktur Data',
            'Jaringan Komputer',
            'Pemrograman Web',
            'Rekayasa Perangkat Lunak',
            'Interaksi Manusia dan Komputer',
            'Komunikasi Data',
            'IT Governance',
            'Pemrograman Web II',
            'Multimedia',
            'Basis Data II',
            'Pemrograman Gim',
            'Pemrograman Berorientasi Objek'
        ];
        foreach($matkuls as $matkul){
            $sks = $faker->numberBetween(2,3);
            $praktikum = $faker->numberBetween(0,1);
            $random = $faker->unique()->numberBetween(11,69);
            $kode_mk = 'IF' . $random . $praktikum . '2' . $sks;
            Matakuliah::create([
                'kode_matakuliah' => $kode_mk,
                'nama_matakuliah' => $matkul,
                'sks' => $sks,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
