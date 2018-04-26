<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\periodo;

class PeriodoController extends Controller
{
	private $totalPage = 20;
	private $periodo;

	public function __construct(periodo $periodo){
    	$this->periodo = $periodo;
    }


    public function  viewListaPeriodos(){ 
    	$periodos = $this->periodo->orderBy('id')->paginate($this->totalPage);
    	return view('periodosLista', compact('periodos'));

       /* $fichas = $this->fichaPR->orderBy('contribuinte')->paginate($this->totalPage);
    	return view('fichaProduRural', compact('fichas'));*/
    }
}
