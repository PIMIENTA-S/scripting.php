<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Esta es la pagina principal";

    }

    public function create(){
        return "Formulario para la creacion de cursos";

    }

    public function show($curso){
        return "Bienvenido a $curso";

    }
}
