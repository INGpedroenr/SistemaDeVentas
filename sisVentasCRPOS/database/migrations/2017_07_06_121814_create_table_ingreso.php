<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngreso extends Migration
{
     public function up()
    {
        Schema::create('ingreso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_comprobante', 20);
            $table->string('serie_comprobante', 20);
			$table->string('num_comprobante', 20);
            $table->dateTime('fecha_hora');
			$table->decimal('impuesto', 4,2);
			$table->string('estado', 20);
			$table->integer('proveedor_id');
			//Referencias
			$table->foreign('proveedor_id')->references('id')->on('persona');
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
	Schema::drop('ingreso');
    }
}
