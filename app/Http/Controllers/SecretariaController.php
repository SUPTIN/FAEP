<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\secretaria;
use App\localTrab;

class SecretariaController extends Controller
{
	private $totalPage = 10;
	private $secretaria;
	private $localTrab;

	public function __construct(secretaria $secretaria, localTrab $localTrab){
    	$this->secretaria = $secretaria;
    	$this->localTrab = $localTrab;
    }

    public function  viewListaSec(){ 
    	$secretarias = $this->secretaria ->orderBy('descricao')->paginate($this->totalPage);
        return view('secretariasListaSec', compact('secretarias'));
    }

    public function viewFormSecretaria(){ 
        return view('secretariaForm');
    }

    public function addNovaSecretaria(Request $request){ 
        $dados = $request->except('_token');
        if ($request->ativo != '1'){
            $dados["ativo"] = '0';
        }
        $this->validate($request, $this->secretaria->rules, $this->secretaria->messages);
        $this->secretaria->create($dados);
        return redirect('secretarias');
    }

    public function viewSecretaria(Request $request){ 
    	$id = $request->id;
    	$dados = secretaria::Find($id);
    	$locais = LocalTrab::where(function($query) use ($id){
    		if($id)
    			$query->where('secretaria', '=', $id);
    	})->paginate($this->totalPage);
        return view('secretariaView', array('dados' => $dados), compact('locais'));
    }
}
