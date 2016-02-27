<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen_unidades extends Model
{
    //

    
       protected $table='alm_unidades';
       protected $primarykey='Id_Unidades';
    
       protected  $fillable = [
       
			  'Unidad',
			  'Siglas',
			  'Creado_el',
			  'Modificado_el' ,
			  'Creado_por',
			  'Modificado_por',
			  'Eliminado_por',
			  'Activo',
			  'Eliminado_el'
    
    	   ];
    
      public $timestamps  = false;
    


}
