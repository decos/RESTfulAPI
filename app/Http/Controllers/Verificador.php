<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//Agregar su definicion
use Auth;

class Verificador extends Controller
{
    public function verificar($usuario, $contrasena){
    	
    	$credentials = array(
    			'email' => $usuario,
    			'password' => $contrasena,
    		);

    	if(Auth::once($credentials)){
    		return Auth::user()->id;
    	}

    	return false;

    }
}
