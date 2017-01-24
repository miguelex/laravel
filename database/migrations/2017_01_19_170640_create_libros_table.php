<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre');
            $table->string('autor');
            $table->string('paginas');
            $table->timestamps();
            //Clave ajena
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('libros');
	}

}
