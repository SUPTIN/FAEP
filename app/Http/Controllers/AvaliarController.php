<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AvaliarController extends Controller
{
	public function  viewAceite(){ 
        return view('avaliarAceite');
    }

    public function  viewListaAvaliar(){ 
        return view('avaliarListaAvaliados');
    }
}
