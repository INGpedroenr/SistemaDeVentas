<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArticulo extends Migration
{
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 50);
            $table->string('nombre', 100);
			$table->integer('stock');
			$table->string('descripcion', 512);
			$table->string('imagen', 50);
			$table->string('estado', 20);
            $table->integer('categoria_id');
			//Referencias
			$table->foreign('categoria_id')->references('id')->on('categoria');
            $table->rememberToken();
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
	Schema::drop('articulo');
    }
}
