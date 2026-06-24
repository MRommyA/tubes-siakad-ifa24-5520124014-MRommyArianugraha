<?php

namespace Database\Seeders;

use App\Models\Krs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');

        $mahasiswas = DB::table('mahasiswa')->pluck('npm');
        $matakuliahs = DB::table('matakuliah')->pluck('kode_matakuliah');

        foreach ($mahasiswas as $npm) {
            $num = $faker->numberBetween(2, 6);
            foreach ($matakuliahs->random($num) as $kode) {
                Krs::create([
                    'npm' => $npm,
                    'kode_matakuliah' => $kode,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

    }
}
