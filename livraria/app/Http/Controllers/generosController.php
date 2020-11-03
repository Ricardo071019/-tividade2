<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class livrosController extends Controller
{
    public function index(){
    	$generos = generos::paginate(4);
    	return view ('generos.index', [
    	'generos'=>$generos]);
	}



  }
