<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\secretaria;
use App\localTrab;
use App\avaliador;

class AvaliadorController extends Controller
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

    public function  viewFormAvaliador(Request $request){
        $id = $request->id; 
        return view('avaliadorFormNovo')->with('secretaria',$id);
    }

    public function  addAvaliador(Request $request){
    	$dados = $request->except('_token');
        $id = $request->id; 

        $this->validate($request, $this->avaliador->rules, $this->avaliador->messages);
        $this->avaliador->create($dados);

        $caminho = $id. '/viewSecretaria';
        return redirect()->to($caminho);
    }
    public function editFormAvaliador(Request $request){ 
        $id = $request->id;
        $dados = avaliador::find($id);        
        return view('avaliadorFormEdit', array('dados' => $dados));
    }

    public function atualizaAvaliador(Request $request){ 
        $dados = $request->except('_token');
        $id = $request->id;
        $this->validate($request, $this->avaliador->rules, $this->avaliador->messages);
        $dados = avaliador::find($id);
        if ($dados && $dados->exists){
            $parametros = $request->all();
            $dados->fill($parametros)->save();
        }
        
        $caminho = $dados->setor. '/viewSecretaria';
        return redirect()->to($caminho);
    }

    public function  viewListaAvaliadores(){ 
        return view('avaliadorListaAvaliadores');
    }
}
