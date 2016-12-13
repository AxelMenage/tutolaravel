<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//index
Route::get('/', function () {
	return view('welcome');
});

Route::get('salut', function () {
    return "salut les gens";
});



Route::get('slugid/{slug}-{id}', ['as'=>'slugId',function ($slug, $id) {
    return "Lien :". route('slugId',['slug' => $slug, 'id'=>$id]);
}])->where('slug','[a-z0-9\-]+')->where('id','[0-9]+');
;


//Ajoute un prefixe = la fnct salut/name est accessible via admin/salut/name
//middleware = met un intermediaire, ex = renvoie vers page de connexion pour accéder a /admin
Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function(){

	Route::get('salut/{name}', ['as'=>'salut', function ($name) {
    	return "salut $name";
	}]);

});


Route::resource('welcome', 'WelcomeController', ['only' => ['create', 'store']]);

Route::get('a-propos', ['as'=> 'about', 'uses'=>'PagesController@about']);


Route::resource('links', 'LinksController');
Route::get('r/{link}', ['as' => 'links.show', 'uses' => 'LinksController@show'])->where('link', '[0-9]+');
/*
Route::get('links/create', 'LinksController@create');
Route::post('links/create', 'LinksController@store');
Route::get('r/{id}', 'LinksController@show')->where('id', '[0-9]+');
*/

Route::resource('news', 'PostsController');

Route::group(['namespace' => 'Admin', 'prefix'=>'admin'], function(){
	Route::resource('posts', 'PostsController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
