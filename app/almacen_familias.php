<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen_familias extends Model
{
    //


   protected $table='alm_grupos';
   protected $primarykey = 'Id_Grupo';

   protected $fillable= [

		  'CodGrupo',
		  'NombreGrupo',
		  'Activo' ,
		  'Creado_el' ,
		  'Modificado_el' ,
		  'Creado_por' ,
		  'Modificado_por',
		  'Eliminado_por',
		  'Eliminado_el' ,
		  'precio_personalizado' ,
		  'valores_predeterminado'
   

	   ];

  public $timestamps = false;


  
}
