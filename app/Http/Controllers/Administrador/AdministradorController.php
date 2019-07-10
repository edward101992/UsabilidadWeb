<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class AdministradorController extends Controller
{
    
	  public function listaUsuarios(){ 
        //$usuarios2 = DB::table('users')->get();
        $usuarios2 = User::paginate(3);
        $titulo = "Lista Usuarios 2 de Base Datos";
       // return view('Usuarios2',compact('titulo','usuarios2'));
        return view('AdministradorViews.listaUsuarios',compact('titulo','usuarios2'));

    }

}
