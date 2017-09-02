<?php
namespace Furebook\Http\Composers;

use Furebook\Breed;
use Illuminate\Contracts\View\View;

//use Illuminate\View\View;


class CatFormComposer{
	protected $breeds;
	
	public function __construct(Breed $breeds){
		$this->breeds = $breeds;
	}
	
	public function compose(View $view){
		
		$view->with('breeds', $this->breeds->pluck('name','id'));
		
	}
}