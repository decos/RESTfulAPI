<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //iniciar una instancia del faker

class Oauth2Seeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
                for($i=0; $i<10; $i++){
                        //Acceder a la tabla y llamar al metodo insert
                        DB::table('oauth_clients')->insert(
                                array(
                                        'id' => 'id'.$i,
                                        'secret' => 'secret'.$i,
                                        'name' => 'name'.$i,
                                ));
                }
                        
	}

}
