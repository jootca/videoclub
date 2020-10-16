<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@getHome');
Route::get('login', function () {
   
    return view('auth.login');
});
Route::get('logout', function () {
   
    return view('logout');
});
Route::get('catalog', 'CatalogController@getIndex');
Route::get('catalog/show/{id}', 'CatalogController@getShow');
Route::get('catalog/create', 'CatalogController@getCreate');
Route::get('catalog/edit/{id}', 'CatalogController@getId');

/*Route::get('/pelicula/{id?}',function($id='puto'){
    return "peliculas estupidas como $id";
})->where('id','[0-9]+');*/

/*Route::get('/peliculas/{nombre}',function($nombre){
    return view('home')->with('nombre',$nombre);
});*/

/*Route::get('/peliculas/{nombre}',function($nombre){
    return view('home',['nombre'=>$nombre]);
});*/