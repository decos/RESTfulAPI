<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fabricante;
use App\Vehiculo;

class FabricanteVehiculoController extends Controller{
        
        public function __construct()
        {
                $this->middleware('auth.basic', array(
                                'only' => array('store', 'update', 'destroy')
                        ));
        }

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
        
        public function store(Request $request){
                //fabricante_id 5
                //serie(autoincrement), no la necesitamos
                //color 1
                //cilindraje 2
                //potencia 3
                //peso 4

                if(!$request->input('color') || !$request->input('cilindraje') || !$request->input('potencia') || !$request->input('peso') || !$request->input('fabricante_id')){
                        return response()->json(array(
                                'mensaje' => 'No se pudieron procesar los valores', 
                                'codigo' => 422), 422);
                }
                
                $fabricante = Fabricante::find($request->input('fabricante_id'));

                if(!$fabricante){
                        return response()->json(array('mensaje' => 'No existe el fabricante asociado', 
                                'codigo' => 404), 404);
                }

                $fabricante->vehiculos()->create($request->all());
                return response()->json(array('mensaje' => 'Vehiculo insertado'), 201);
                //return "Podemos insertar";
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