<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen_productos extends Model
{
    //

       protected $table='alm_productos';
       protected $primarykey='Id_Producto';
    
       protected  $fillable = [


	          'Id_TipoIva',
			  'Id_TipoIvaVenta',
			  'Id_Servidor',
			  'Id_Grupo',
			  'id_Empresa',
			  'id_Almacen',
			  'id_MedidaCompra',
			  'Id_Departamento',
			  'Id_Unidades',
			  'Id_Marcas',
			  'Id_Proveedor',
			  'Cod_Producto' ,
			  'Nombre_Producto' ,
			  'UnidadMedida',
			  'Modelo' ,
			  'Garantia',
			  'Costo' ,
			  'IvaCompraPorc' ,
			  'IvaVentaPorc' ,
			  'PrecioVenta' ,
			  'MetodoCosto',
			  'TipoPrecio' ,
			  'UltimoCosto' ,
			  'CostoPromedio' ,
			  'CostoCalculado' ,
			  'CostoProvee' ,
			  'CostoOtros' ,
			  'PrecioMax' ,
			  'PrecOferta' ,
			  'PrecMayor' ,
			  'PrecMini' ,
			  'Estatus' ,
			  'PedirServidor',
			  'CodISLR',
			  'CodImpMunicip',
			  'CodAlternos',
			  'PorcPrecMax' ,
			  'PorcPrecOferta' ,
			  'PorcPrecMayor' ,
			  'PorcPrecMini' ,
			  'Tipo_Producto',
			  'ExistenciaMax' ,
			  'ExistenciaMin' ,
			  'PuntoReorden' ,
			  'ExistencaActual' ,
			  'ExistCompromet' ,
			  'ExisteDisponible' ,
			  'Factor_UnidMedida' ,
			  'Creado_el',
			  'Modificado_el',
			  'Creado_por' ,
			  'Modificado_por' ,
			  'Eliminado_por' ,
			  'Activo' ,
			  'Eliminado_el'
    
    	   ];
    
      public $timestamps  = false;
    
}
