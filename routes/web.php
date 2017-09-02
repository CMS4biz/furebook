<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return 'All Cats';
})->middleware('auth');

Route::get('about', function (){
	return view('about')->with('cat',9000);
});
/*
Route::get('cats/{id}', function ($id) {
	$cat = Furebook\Cat::find($id);
    return view('cats.show')->with('cat',$cat);
})->where('id','[0-9]+');*/ 

Route::get('cats/create', function(){
	return view('cats.create');
})->middleware('auth');;

Route::post('cats', function()
{
	$cat = Furebook\Cat::create(Input::all());

	return redirect('cats/'.$cat->id)
		->withSuccess('Cat has been created.');
})->middleware('auth');;

Route::get('cats/{cat}/edit', function(Furebook\Cat $cat)
{
	return view('cats.edit')->with('cat', $cat);
	
})->middleware('auth');

Route::put('cats/{cat}', function(Furebook\Cat $cat)
{
	$cat->update(Input::all());

	return redirect('cats/'.$cat->id)
		->withSuccess('Cat has been updated.');
});

Route::get('cats/{cat}', function(Furebook\Cat $cat)
{
	return view('cats.show')->with('cat', $cat);

})->where('id', '[0-9]+')->middleware('auth');

Route::get('cats',function(){
	$cats = Furebook\Cat::all();
	return view('cats.index')->with('cats',$cats);
})->middleware('auth');

Route::get('cats\breeds\{name}',function($name){
	$breed = Furebook\Breed::with('cats')->whereName($name)->first();
	return view('cats.index')->with('breed',$breed)->with('cats', $breed->cats);  
})->middleware('auth');
/*
Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
});
