<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');
        for($x = 1 ; $x <=10 ; $x++){
            DB::table('TB_M_SISWA')->insert([
                'Siswa_nama' => $faker->name,
                'Siswa_umur' => $faker->numberBetween(11,17),
                'Siswa_alamat' => $faker->address
            ]);
        }      
    }
}
