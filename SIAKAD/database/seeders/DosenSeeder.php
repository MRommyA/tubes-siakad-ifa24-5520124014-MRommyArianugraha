<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i < 10; $i++){
            $dosen = [
                'nidn' => $faker->unique()->numerify('##########'),
                'nama' => $faker->name,
                'created_at' => now(),
                'updated_at' => now()
            ];

            Dosen::create($dosen);
        }
        
    }
}
