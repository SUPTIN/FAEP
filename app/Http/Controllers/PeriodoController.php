<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\periodo;

class PeriodoController extends Controller
{
	private $totalPage = 10;
	private $periodo;

	public function __construct(periodo $periodo){
    	$this->periodo = $periodo;
    }

    public function viewListaPeriodos(){ 
    	$periodos = $this->periodo->orderBy('id','desc')->paginate($this->totalPage);
    	return view('periodosLista', compact('periodos'));
    }

    public function viewFormPeriodos(){ 
        return view('periodosForm');
    }

    public function addNovoPeriodoAva(Request $request){ 
        $dados = $request->except('_token');
        if ($request->ativo != '1'){
            $dados["ativo"] = '0';
        }
        $this->validate($request, $this->periodo->rules, $this->periodo->messages);
        $this->periodo->create($dados);
        return redirect('periodos');
    }

    public function viewFormEditPeriodo(Request $request){ 
        $id= $request->id;
        $dados = periodo::find($id);
        return view('periodosFormEdit', array('dados' => $dados));
    }

    public function atualizaPeriodoAva(Request $request){ 
        $id= $request->id;
        $dados = periodo::find($id);
        if ($dados && $dados->exists){
            $parametros = $request->all();
            $dados->fill($parametros)->save();
        }
        return redirect('periodos');
    }
}
