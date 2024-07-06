<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
//paso 3 crear la funcion 
//compact para enviar variable
class loginReturn extends Controller
{

    //retorna datos de la base de datos en el blade login
    public function getConsulta()
    {
        $productos = \DB::table('registros')->select('id', 'correo')->get();
        return view('connect.login', compact('registros'));
    }

}
