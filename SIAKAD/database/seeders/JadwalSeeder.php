<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $jam = ['08:00:00', '10:30:00', '13:00:00', '15:30:00', '18:30:00'];

        for ($i = 0; $i < 13; $i++) {
            Jadwal::create([
                'kode_matakuliah' => DB::table('matakuliah')->inRandomOrder()->value('kode_matakuliah'),
                'nidn' => DB::table('dosen')->inRandomOrder()->value('nidn'),
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'D', 'E']),
                'hari' => $faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']),
                'jam' => '2026-06-30 ' . $faker->randomElement($jam),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
