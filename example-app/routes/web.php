<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Uid\NilUlid;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/',HomeController::class);



Route::get('laravel/{link1}/{link2?}', function($link1, $link2=null){
    
    if ($link2){
        return "que pasa valemia";
    }else {
        return "Esta es un prueba de los enrutadores php con direccion $link1 en la categoria: $link2";
        
    }
    
});

// Grupos que comparten un mismo controlador
/*

Route::get('curso', [CursoController::class, 'index']);

Route::get('curso/create', [CursoController::class, 'create']);

Route::get('curso/{link1}', [CursoController::class, 'show']);

 */

 Route::controller(CursoController::class) -> group(function(){
    Route::get('curso', 'index');
    Route::get('curso/create', 'create');
    Route::get('curso/{link}', 'show');
 });