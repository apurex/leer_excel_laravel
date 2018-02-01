<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CedulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
	    \DB::table('cedulas')->insert(array(
	        'nombre' => $faker->firstNameFemale,
            'cedula' => $faker->isbn10,
	    ));
	}
    }
}
