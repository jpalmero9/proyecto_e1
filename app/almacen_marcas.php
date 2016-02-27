<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen_marcas extends Model
{
    //


	   protected $table='alm_marcas';
	   protected $primarykey='Id_Marcas';
	
	   protected  $fillable = [

			  'Marca' ,
			  'Estatus',
			  'Creado_el',
			  'Modificado_el' ,
			  'Creado_por',
			  'Modificado_por' ,
			  'Eliminado_por' ,
			  'Activo' ,
			  'Eliminado_el' 	   
	
		   ];
	
	  public $timestamps  = false;
	





}
