<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fabricante;

class FabricanteController extends Controller{
        
        public function index(){
                //return "Mostrando todos los fabricantes";
                //return Fabricante::all();

                return response()->json(array('datos' => Fabricante::all()), 200);
                

        }
        
        public function create(){
                return "Mostrando formulario para crear un fabricante";
        }
        
        public function store(){
            
        }
        
        public function show($id){
                //return "mostrando fabricante con id: ".$id;
                $fabricante = Fabricante::find($id);

                if(!$fabricante){
                        return response()->json(array(
                                'mensaje' => 'No se encuentra este fabricante', 
                                'codigo' => 404), 404);
                } 

                return response()->json(array(
                        'datos' => $fabricante), 200);
        }
        
        public function edit($id){
                return "mostrando formulario para editar el fabricante con id: ".$id;
        }
    
        public function update($id){
            
        }
        
        //PATCH
        /*public function create(){
            
        }*/
        
        public function destroy($id){
            
        }
        
        
}
