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
use Illuminate\Http\RedirectResponse;
use Swift_Attachment;

class UserController extends BaseController{

	public function get_inicio(){

		return View::make('propio/inicio');


	}

	public function post_inicio(Request $request){

		if($request->input('detalle')){
			return redirect('detalleventa');
		}

		if($request->input('enviar')){
			return redirect('enviarimagen');
		}
		
		if($request->input('validar')){
			return redirect('validarpagos');
		}

		if($request->input('logout')){
			Auth::logout();
			return View::make('propio/inicio');

		}
		else{
			if (Auth::attempt(['email' => $request->input('email') , 'password' => $request->input('password')],true)) {
         
	            return View::make('propio/inicio');
				
	        }
	        else{ 
	        	return View::make('propio/inicio');

			}
		}
		



	}

	public function get_somos(){

		return View::make('propio/somos');

	}

	public function get_ubicacion(){

		return View::make('propio/ubicacion');

	}

	public function get_contactenos(){

		return View::make('propio/contactenos');

	}

	public function post_contactenos(Request $request){
		$datos=array(
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'asunto' => $request->input('asunto'),
			'mensaje' => $request->input('mensaje')
			 );

	
		\Mail::send('propio.plantilla',$datos, function ($message)  {
				
				$message->to('gd02589@gmail.com', 'Gustavo De La Cruz')->subject('CONTACTO-CLIENTE');
		});

		echo 'ENVIADO';

	}


	public function get_catalogo(){

			return View::make('propio/catalogo');

		}



	public function get_regitrarse(){

		return View::make('propio/registrarse')->with('mensaje','0');
	}
	

	public function post_regitrarse(Request $request){
		$datos = array(
			'name' =>$request->input('name') ,
			'email' =>$request->input('email'),
			'password' =>bcrypt($request->input('password')),
			 'calidad' =>"USUARIO"
					 );

		$user = new User($datos);
		$user->save();

		return View::make('propio/registrarse')->with('mensaje','1');
	}

	public function get_detalleventa(){


			$user=Auth::user();

			$consulta=Venta::where('id_cliente',$user->id)->where('estado','SIN PAGO')->first();
			$productos=array('0' => '0');
			$detalles=null;

			$x=1;

			if($consulta){
				$detalles=DetalleVenta::where('id_venta',$consulta->id)->get();

				$productos=array('0' => '0');

					foreach($detalles as $detalle){
					$producto=Producto::find($detalle->id_producto);
					$productos=array_add($productos,$x ,$producto);
					$x++;
				

			}
			}
			
			return View::make('propio/detalle')->with('detalles',$detalles)->with('productos',$productos);
		}

	

		public function get_validarpagos(){

			$ventas=null;
			$ventas=Venta::where('estado','SIN PAGO')->get();
			$clientes=array('0' => '0');
			

			$x=1;

			if($ventas){
				
				
					foreach($ventas as $venta){
					$cliente=User::find($venta->id_cliente);
					$clientes=array_add($clientes,$x ,$cliente);
					$x++;
				

			}
			

			return View::make('propio/validarpagos')->with('ventas',$ventas)->with('clientes',$clientes);

		}
}
		public function post_validarpagos(Request $request){

			$venta=Venta::find($request->input('id_venta'));
			$venta->estado= "PROCESANDO";
			$venta->save();

			return redirect()->action('UserController@get_validarpagos');

		}

		public function get_enviarmensaje(){

			return View::make('propio.enviarimagen');

		}

		public function post_enviarmensaje(Request $request){
			$file = $request->file('foto');
			$request->file('foto')->move(public_path(), 'hola.png');

			if ($request->hasFile('foto'))
				{
	    //

					$user=Auth::user();
					$consulta=Venta::where('id_cliente',$user->id)->where('estado','SIN PAGO')->first();

					$datos=array(
						'name' => $user->name,
						'email' => $user->email,
						'asunto' => "Validacion De Compra",
						'mensaje' => $request->input('mensaje'),
						'id_venta'=> $consulta->id

						 );

					\Mail::send('propio.plantillaimagen',$datos, function ($message) use($file) {

							$message->to('gd02589@gmail.com', 'Gustavo De La Cruz')->subject('Validacion De Compra');
					});

					echo 'ENVIADO';
				}
		}

	}