<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $mahasiswaList = [];
        for($i = 0; $i < 10; $i++){
            $npm = '55201' . $faker->randomElement(['22', '23', '24', '25']) . $faker->unique()->numerify('###');
            $mahasiswaList[] = [
                'npm' => $npm,
                'nidn' => DB::table('dosen')->inRandomOrder()->value('nidn'),
                'nama' => $faker->name,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        foreach($mahasiswaList as $data){
            $mahasiswa = Mahasiswa::create($data);
            
            $user = User::create([
                'name'     => $mahasiswa->nama,
                'username' => $mahasiswa->npm,
                'email'    => $mahasiswa->npm . '@student.unsur.ac.id', 
                'password' => Hash::make('password'),
                'npm'      => $mahasiswa->npm,
            ]);

            $user->assignRole('Mahasiswa');
        }
    }
}
