<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Uid\NilUlid;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('laravel', function(){
    return "primeros pasos con laravel";
});



Route::get('laravel/{link1}/{link2?}', function($link1, $link2=null){
    
    if ($link2==null){
        return "que pasa valemia";
    }else {
        return "Esta es un prueba de los enrutadores php con direccion $link1 en la categoria: $link2";
        
    }
    
});
Route::get('laravel/{link}', function($link){
    return "bienvenido a: $link";
});

Route::get('laravel/{link1}/{link2}', function($link1, $link2){
    return "Esta es un prueba de los enrutadores php con direccion $link1 en la categoria $link2";
});