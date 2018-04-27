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
    }

    public function  viewFormPeriodos(){ 
        return view('periodosForm');
    }

    public function  addNovoPeriodoAva(Request $request){ 

        $dados = $request->except('_token');
        if ($request->ativo != '1'){
            $dados["ativo"] = '0';
        }
        $this->validate($request, $this->periodo->rules, $this->periodo->messages);

        $this->periodo->create($dados);

        return PeriodoController::viewListaPeriodos();
    }
}
