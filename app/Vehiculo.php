<?php namespace App;

use Illuminate\Database\Eloquent\Model;

//Vehiculo tiene un fabricante 

class Vehiculo extends Model {
        
        protected $table = "vehiculos";
        protected $primaryKey =  "serie";
        protected $fillable = array('color', 'cilindraje', 'potencia', 'peso');
        
        public function fabricante(){
            $this->belongsTo("Fabricante");
        }
        
}
