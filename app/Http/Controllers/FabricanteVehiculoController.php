<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fabricante;
use App\Vehiculo;

class FabricanteVehiculoController extends Controller{
        /*
        public function showAll(){
                return "Mostrando todos los vehiculos";
        }
        */
    
        public function index($id){
                //return "Mostrando los vehiculos del fabricantes con id: ".$id;

                $fabricante  = Fabricante::find($id);

                if(!$fabricante){
                        return response()->json(array(
                                'mensaje' => 'No se encuentra este fabricante', 
                                'codigo' => 404), 404);
                } 

                return response()->json(array(
                        'datos' => $fabricante->vehiculos
                        ), 200);
                //return response()->json($fabricante->vehiculos()->get(), 200);
        }
        
        //fabricantes/{fabricantes}/vehiculos/create
        public function create($id){
                return "mostrando formulario para agregar vehiculo al fabricante: ".$id;
        }
        
        public function store(){
            
        }
        
        //fabricantes/{fabricantes}/vehiculos/{vehiculos}
        public function show($idFabricante, $idVehiculo){
                return "mostrando vehiculo: ".$idVehiculo." del fabricante: ". $idFabricante;
        }
        
        //fabricantes/{fabricantes}/vehiculos/{vehiculos}/edit
        public function edit($idFabricante, $idVehiculo){
                return "mostrando formulario para editar el vehiculo: $idVehiculo del fabricante $idFabricante";
        }
    
        public function update($idFabricante, $idVehiculo){
            
        }
        
        //PATCH
        /*public function create(){
            
        }*/
        
        public function destroy($idFabricante, $idVehiculo){
            
        }
    
}