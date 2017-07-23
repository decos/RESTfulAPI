<?php

use Illuminate\Database\Seeder;
use App\Fabricante;
use Faker\Factory as Faker; //iniciar una instancia del faker

class FabricanteSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
                $faker = Faker::create();
                
                for($i=0; $i<3; $i++){
                        Fabricante::create(
                                array(
                                        'nombre' => $faker->word(),
                                        'telefono' => $faker->randomNumber(7),
                                )
                        );
                }
                        
	}

}
