<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen_departamentos extends Model
{
    //

    protected $table = 'alm_departamentos';
    protected $primarykey = 'Id_Departamento';

    protected $fillable = [

		  'Id_Almacen',
		  'id_Empresa',
		  'Nombre_Almacen',
		  'Ubicacion_Almacen',
		  'Creado_el' ,
		  'Modificado_el',
		  'Creado_por',
		  'Modificado_por',
		  'Eliminado_por',
		  'Activo',
		  'Eliminado_el'

    ];

     public $timestamps = false;
}
