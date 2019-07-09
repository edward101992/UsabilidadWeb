<?php

namespace App\Http\Controllers\Inicio;
use App\Http\Controllers\Controller;
use Auth;
//use App\Usuario;
use App\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    
	public function example(){

		return view('PlantillaViews.example');
	}

	public function registro(){
		return view('InicioViews.registro');
	}


	public function registroNuevo(){
		$datos = request()->all();
        User::create([
            'usuario_nombre'=> $datos['nombre'],
            'usuario_apellido'=>$datos['apellido'],
            'usuario_telefono'=>$datos['telefono'],
            'email'=> $datos['email'],        
            //'usuario_imagen'=>$datos['imagen'],
            'password'=>bcrypt($datos['password']),
           // 'usuario_estado'=>$datos['estado'], 
            'rol_id'=>$datos['rolId'],


        ]);   
         return redirect('example');


	}
/*
	public function login(){
	 $credentials = $this->validate(request(),[
			'email'=>'email|required|string|max:300',
			'password'=>'required|string|min:8|confirmed'
		]);
	 
	 if (Auth::attempt($credentials)) {
		return redirect('example');
	}else {
		return 'Sesion NOO iniciada';
	}

	}
*/

	public function login(){

		return view('InicioViews.login');
	}

}