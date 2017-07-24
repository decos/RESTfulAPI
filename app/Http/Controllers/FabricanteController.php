<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fabricante;

class FabricanteController extends Controller{
        
        public function __construct()
        {
                $this->middleware('auth.basic', array(
                                'only' => array('store', 'update', 'destroy')
                        ));
        }

        public function index(){
                //return "Mostrando todos los fabricantes";
                //return Fabricante::all();

                return response()->json(array('datos' => Fabricante::all()), 200);
                

        }
        /*
        public function create(){
                return "Mostrando formulario para crear un fabricante";
        }
        */
        public function store(Request $request)
        {
                if(!$request->input('nombre') || !$request->input('telefono')){
                        return response()->json(array(
                                'mensaje' => 'No se pudieron procesar los valores', 
                                'codigo' => 422), 422);
                }
                Fabricante::create($request->all());
                return response()->json(array('mensaje' => 'Fabricante insertado'), 201);
                //return "Peticion recibida";
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
        /*
        public function edit($id){
                return "mostrando formulario para editar el fabricante con id: ".$id;
        }
        */
        public function update(Request $request, $id){
                
                $metodo =  $request->method();
                
                $fabricante = Fabricante::find($id);
                
                if(!$fabricante){
                        return response()->json(array('mensaje' => 'No se encuentra este fabricante', 
                                'codigo' => 404), 404);
                } 
                
                //Cuando no enviamos nada, la entidad no cambia
                if($metodo === 'PATCH'){
                        $nombre = $request->input("nombre");
                        
                        if($nombre != null && $nombre != ''){
                                $fabricante->nombre = $nombre;
                        }
                        
                        $telefono = $request->input("telefono");
                        
                        if($telefono != null && $telefono != ''){
                                $fabricante->telefono = $telefono;
                        }
                        
                        $fabricante->save();
                        
                        return response()->json(array('mensaje' => 'Fabricante editado PATCH'), 200);
                } 
                
                $nombre = $request->input("nombre");
                $telefono = $request->input("telefono");
                
                if(!$nombre || !$telefono){
                        return response()->json(array(
                                'mensaje' => 'No se pudieron procesar los valores', 
                                'codigo' => 422), 422);
                }
                
                $fabricante->nombre = $nombre;
                $fabricante->telefono = $telefono;
                
                $fabricante->save();
                
                return response()->json(array('mensaje' => 'Fabricante editado PUT'), 200);
        }
        
        //PATCH
        /*public function create(){
            
        }*/
        
        public function destroy($id){
            
        }
        
        
}
