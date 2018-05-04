<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\secretaria;
use App\localTrab;
use App\avaliador;

class SecretariaController extends Controller
{
	private $totalPage = 10;
    private $totalPAvaliador = 5;
	private $secretaria;
	private $localTrab;
    private $avaliador;

	public function __construct(secretaria $secretaria, localTrab $localTrab, avaliador $avaliador){
    	$this->secretaria = $secretaria;
    	$this->localTrab = $localTrab;
        $this->avaliador = $avaliador;

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

        $avaliadores = avaliador::where(function($query) use ($id){
            if($id)
                $query->where('setor', '=', $id);
        })->paginate($this->totalPAvaliador);
        return view('secretariaView', array('dados' => $dados), compact('locais', 'avaliadores'));
    }

    public function viewFormEditSecretaria(Request $request){ 
        $id= $request->id;
        $dados = secretaria::find($id);
        return view('secretariaFormEdit', array('dados' => $dados));
    }
    
    public function atualizaSecretaria(Request $request){ 
        $id= $request->id;
        $dados = secretaria::find($id);
        $this->validate($request, $this->secretaria->rules, $this->secretaria->messages);
        if ($dados && $dados->exists){
            $parametros = $request->all();
            $dados->fill($parametros)->save();
        }
        return redirect('secretarias');
    }

    public function viewFormLocalTrab(Request $request){
    	$id = $request->id;
    	return view('secretariaFormNovoLocalTrab')->with('secretaria',$id);
    }

    public function addNovoLocalTrab(Request $request){ 
        $dados = $request->except('_token');
        $id = $request->id;
        $this->validate($request, $this->localTrab->rules, $this->localTrab->messages);
        $this->localTrab->create($dados);
        $caminho = $id. '/viewSecretaria';
        return redirect()->to($caminho);
    }
    public function editFormLocalTrab(Request $request){ 
        $id = $request->id;
        $dados = localTrab::find($id);        
        return view('secretariaFormEditLocalTrab', array('dados' => $dados));
    }
    public function atualizaLocalTrab(Request $request){ 
        $dados = $request->except('_token');
        $id = $request->id;
        $this->validate($request, $this->localTrab->rules, $this->localTrab->messages);
        $dados = localTrab::find($id);
        if ($dados && $dados->exists){
            $parametros = $request->all();
            $dados->fill($parametros)->save();
        }
        
        $caminho = $dados->secretaria. '/viewSecretaria';
        return redirect()->to($caminho);
    }
}
