<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User as ModeloUser;


class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	  	ModeloUser::create([
    		'usuario_nombre'=>'Edward',
    		'usuario_apellido'=>'Ramos',
        	'email'=>'edwardconw@gmail.com',
        	'usuario_telefono'=>'3115720193'
        	'usuario_imagen'=>'ruta/imagen/mia.jpg',
        	'password'=> bcrypt('123'),
        	'usuario_estado'=>true,
        	 $token=remenberToken();
        	 'remember_token'=>$token,
        	 'rol_id'=>'1',
        	 timestamps();
    	 
    	]);
			
			ModeloUser::create([
    		'usuario_nombre'=>'Juan',
    		'usuario_apellido'=>'Perez',
        	'email'=>'juan@gmail.com',
        	'usuario_telefono'=>'3111111111'
        	'usuario_imagen'=>'ruta/imagen/juan.jpg',
        	'password'=> bcrypt('123'),
        	'usuario_estado'=>true,
        	 $token=remenberToken();
        	 'remember_token'=>$token,
        	 'rol_id'=>'2',
        	 timestamps();
        	]);

        	ModeloUser::create([
    		'usuario_nombre'=>'Laura',
    		'usuario_apellido'=>'Pedraza',
        	'email'=>'laura@gmail.com',
        	'usuario_telefono'=>'3153777921'
        	'usuario_imagen'=>'ruta/imagen/laura.jpg',
        	'password'=> bcrypt('123'),
        	'usuario_estado'=>true,
        	 $token=remenberToken();
        	 'remember_token'=>$token,
        	 'rol_id'=>'3',
        	 timestamps();
        	]);


        	ModeloUser::create([
    		'usuario_nombre'=>'Mario',
    		'usuario_apellido'=>'Ramirez',
        	'email'=>'mario@gmail.com',
        	'usuario_telefono'=>'3122222222'
        	'usuario_imagen'=>'ruta/imagen/mario.jpg',
        	'password'=> bcrypt('123'),
        	'usuario_estado'=>false,
        	 $token=remenberToken();
        	 'remember_token'=>$token,
        	 'rol_id'=>'1',
        	 timestamps();
        	]);


        	ModeloUser::create([
    		'usuario_nombre'=>'Camilo',
    		'usuario_apellido'=>'Oviedo',
        	'email'=>'camilo@gmail.com',
        	'usuario_telefono'=>'33333333333'
        	'usuario_imagen'=>'ruta/imagen/camilo.jpg',
        	'password'=> bcrypt('123'),
        	'usuario_estado'=>false,
        	 $token=remenberToken();
        	 'remember_token'=>$token,
        	 'rol_id'=>'2',
        	 timestamps();
        	]);

        	ModeloUser::create([
    		'usuario_nombre'=>'Sara',
    		'usuario_apellido'=>'Pino',
        	'email'=>'sara@gmail.com',
        	'usuario_telefono'=>'33333333333'
        	'usuario_imagen'=>'ruta/imagen/sara.jpg',
        	'password'=> bcrypt('123'),
        	'usuario_estado'=>false,
        	 $token=remenberToken();
        	 'remember_token'=>$token,
        	 'rol_id'=>'3',
        	 timestamps();
        	]);


    }
}

