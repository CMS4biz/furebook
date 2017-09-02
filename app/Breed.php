<?php

namespace Furebook;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model{
	
	public $timestamps = false;
	
	protected $fillable = [
        'name'
    ];
	
	public function cats(){
		return $this->hasMany('Furebook\Cat'); 
	}
}


?>