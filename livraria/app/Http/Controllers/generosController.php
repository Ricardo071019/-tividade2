<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    public function index(){
    	$generos = genero::paginate(4);
    	return view ('generos.index', [
    	'generos'=>$generos]);
	}



  }
 