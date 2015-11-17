<?php

namespace App\Http\Controllers;

use Auth;
use View;
use App\User;
use App\Producto;
use App\Venta;
use App\DetalleVenta;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

 
	
class CatalogoController extends BaseController{

	public function get_catalogo(){

		$productos = Producto::all();

		return View::make('propio.catalogo')-> with('productos',$productos);
	}

	public function post_catalogo(Request $request){
		$user=Auth::user();
		$producto = Producto::find($request->input('id_producto'));

		
		$consulta=Venta::where('id_cliente',$user->id)->where('estado','SIN PAGO')->first();

		if($consulta){
			$detalleventa=null;
			$detalleventa=DetalleVenta::where('id_venta',$consulta->id)->where('id_producto',$producto->id)->first();

			

			if($detalleventa==null){
				$detalleventa= new DetalleVenta();

				$detalleventa->id_venta=$consulta->id;
				$detalleventa->id_producto=$request->input('id_producto');
				$detalleventa->cantidad = 1;
				$detalleventa->save();
			}
			else{
				$detalleventa->cantidad=$detalleventa->cantidad + 1;
				$detalleventa->save();
			}
		
			
		}
		else{

			$venta= new Venta();
			$venta->id_cliente=$user->id;
			$venta->estado="SIN PAGO";
			$venta->save(); 

			$detalleventa= new DetalleVenta();

			$detalleventa->id_venta=$venta->id;
			$detalleventa->id_producto=$request->input('id_producto');
			$detalleventa->cantidad="1";
			$detalleventa->save();	

		}

	

		return redirect()->action('UserController@get_detalleventa');

		
	}
}
 ?>