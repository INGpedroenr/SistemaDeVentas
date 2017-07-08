<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVenta extends Migration
{
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_comprobante', 50);
            $table->string('serie_comprobante', 15);
			$table->string('num_comprobante',20);
			$table->dateTime('fecha_hora');
			$table->decimal('impuesto', 4,2);
			$table->decimal('total_venta', 11,2);
			$table->string('estado', 20);
            $table->integer('users_id');
			$table->integer('cliente_id');
			//Referencias
			$table->foreign('users_id')->references('id')->on('users');
			$table->foreign('cliente_id')->references('id')->on('persona');
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
	Schema::drop('venta');
    }
}
