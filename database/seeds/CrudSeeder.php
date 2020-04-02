<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id ID');

        for($i = 1; $i <=50; $i++){
        	DB::table('pegawai')->insert([
        		'nama' => $faker->name,
        		'alamat' => $faker->address
        	]);
        }
    }
}
