<?php

namespace Furebook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model{
	
	protected $fillable = [
        'name', 'data_of_brith', 'breed_id' 
    ];
	
	public function breed (){
		return $this->belongsTo('Furebook\Breed');
	}
}


?>