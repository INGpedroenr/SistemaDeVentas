<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleVenta extends Migration
{
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->decimal('precio_venta', 11,2);
			$table->integer('descuento', 11,2);
            $table->integer('venta_id');
			$table->integer('articulo_id');
			//Referencias
			$table->foreign('venta_id')->references('id')->on('venta');
			$table->foreign('articulo_id')->references('id')->on('articulo');
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
	Schema::drop('detalle_venta');
    }
}
