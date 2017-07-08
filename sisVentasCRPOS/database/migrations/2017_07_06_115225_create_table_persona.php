<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersona extends Migration
{
    Schema::create('persona', function (Blueprint $table)
	{
            $table->increments('id');
            $table->string('tipo_persona', 50);
			$table->string('nombre',50);
			$table->string('tipo_documento',50);
			$table->string('num_documento',50);
			$table->string('direccion',70);
			$table->string('telefono',15);
			$table->string('email', 50);
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
	Schema::drop('persona');
    }
}
