<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Controllers\Controller;

class FabricanteController extends Controller{
        
        public function index(){
                return "Mostrando todos los fabricantes";
        }
        
        public function create(){
                return "Mostrando formulario para crear un fabricante";
        }
        
        public function store(){
            
        }
        
        public function show($id){
                return "mostrando fabricante con id: ".$id;
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
