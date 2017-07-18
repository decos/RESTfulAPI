<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VehiculosMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculos', function(Blueprint $table)
		{
			$table->increments('serie');
                                                //Agregar manualmente
                                                $table->string("color");
                                                $table->float("cilindraje");
                                                $table->integer("potencia");
                                                $table->float("peso");
                                                //Clave Foranea
                                                //Unsigned=No tiene signo (siempre seran valores positivos)
                                                $table->integer("fabricante_id")->unsigned();
                                                $table->foreign("fabricante_id")->references("id")->on("fabricantes");
                                                //
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehiculos');
	}

}
