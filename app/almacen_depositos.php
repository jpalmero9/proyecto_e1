<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen_depositos extends Model
{
    //

   protected $table='alm_almacen';
   protected $primarykey = 'Id_Almacen';

   protected $fillable = [
   
	   'id_Empresa',
	   'Nombre_Almacen',
	   'Ubicacion_Almacen',
	   'Creado_el',
	   'Modificado_el',
	   'Creado_por',
	   'Modificado_por',
	   'Eliminado_por',
	   'Activo',
	   'Eliminado_el'

	   ];

  public $timestamps = false;
}


 