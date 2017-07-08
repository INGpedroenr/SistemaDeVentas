<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleIngreso extends Migration
{
    public function up()
    {
        Schema::create('detalle_ingreso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->decimal('precio_compra', 11,2);
			$table->decimal('precio_venta', 11,2);
            $table->integer('ingreso_id');
			$table->integer('articulo_id');
			//Referencias
			$table->foreign('ingreso_id')->references('id')->on('ingreso');
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
	Schema::drop('detalle_ingreso');
    }
}
