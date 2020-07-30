<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1 ; $i<=10 ; $i++)
        {
            DB::table('TB_PEGAWAI')->insert([
                'pegawai_nama'      => $faker->name,
                'pegawai_jabatan'   => $faker->jobTitle,
                'pegawai_umur'      => $faker->numberBetween(24,30),
                'pegawai_alamat'    => $faker->address
            ]);
        }
        
        // DB::table('TB_PEGAWAI')->insert([
        // 	'pegawai_nama' => 'Joni',
        // 	'pegawai_jabatan' => 'Web Designer',
        // 	'pegawai_umur' => 25,
        // 	'pegawai_alamat' => 'Jl. Panglateh'
        // ]);
    }
}
