<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
//Fabricante posee muchos vehiculos

class Fabricante extends Model{
        
        protected $table = "fabricantes";
        protected $fillable = array('nombre', 'telefono');
    	
        protected $hidden = array('created_at', 'updated_at');

        public function vehiculos(){
            $this->hasMany("Vehiculo");
        }
        
}
