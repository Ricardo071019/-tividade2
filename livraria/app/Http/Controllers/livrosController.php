<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class livrosController extends Controller
{
    public function index(){
    	$livros = livro::paginate(4);
    	return view ('livros.index', [
    	'livros'=>$livros]);
	}



  }



