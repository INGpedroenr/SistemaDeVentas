<?php

namespace sisVentasCRPOS;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table='categoria';
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable =[ 
		'nombre',
		'descripcion',
		'condicion'
	];

	protected $guarded =[ 
	
	];
}
