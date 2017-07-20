<?php namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
class VehiculoController extends Controller{
        
        public function showAll(){
                return "Mostrando todos los vehiculos";
        }
    
    
        public function index($id){
                return "Mostrando los vehiculos del fabricantes con id: ".$id;
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