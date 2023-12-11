<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // el metodos view() se ubicara en la carpeta view y desde hay hara la busqueda
    public function index(){
        return view('curso.index');

    }

    public function create(){
        return view('curso.create');

    }

    // Para recibir una variable como argumento se debe usar un array ['nombre con el que se recibe' => $variable]
    // Usar metodo compact(), tiene la misma estructura, es una forma de hacer refencia a ella

    public function show($curso){
        //return view('curso.show', ['curso' => $curso]);
        return view('curso.show', compact('curso'));

    }
}
