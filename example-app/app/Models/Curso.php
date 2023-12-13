<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
}

/*
> use App\Models\Curso                                  PASO 1                                                                                               
> $curso=new Curso();                                   PASO 2                                                                                               
= App\Models\Curso {#6269}

> $curso->name='Laravel';                               PASO 3                                                                                               
= "Laravel"

> $curso->descripcion='El mejor framework de PHP';      PASO 4                                                                                               
= "El mejor framework de PHP"

> $curso;                                                                                                                                              
= App\Models\Curso {#6269
    name: "Laravel",
    descripcion: "El mejor framework de PHP",
  }

> $curso->save();                                       PASO 5                                                                                               
= true
*/


