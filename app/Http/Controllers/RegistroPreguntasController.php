<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroPreguntasController extends Controller
{
    public function show(){
    	return view('RegistrarPreguntas');
    }
}
