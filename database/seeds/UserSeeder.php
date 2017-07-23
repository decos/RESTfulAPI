<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
                User::create(
                        array(
                                'email' => 'fake@fake.com',
                                'password' => Hash::make('algo'),
                        )
                );  
	}

}
