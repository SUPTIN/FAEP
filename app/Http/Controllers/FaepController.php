<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FaepController extends Controller
{
    public function  informacao(){ 
        return view('informacaoSistema');
    }

    public function  viewLog(){ 
        return view('logsAlteracao');
    }

    public function  viewUser(){ 
        return view('user');
    }

  
}
