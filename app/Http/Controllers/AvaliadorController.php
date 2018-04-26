<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AvaliadorController extends Controller
{
    public function  viewListaAvaliadores(){ 
        return view('avaliadorListaAvaliadores');
    }
}
