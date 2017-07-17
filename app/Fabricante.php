<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
//Fabricante posee muchos vehiculos

class Fabricante extends Model{
        
        protected $table = "fabricantes";
        protected $fillable = array('nombre', 'telefono');
    
        public function vehiculos(){
            $this->hasMany("Vehiculo");
        }
        
}
