<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    protected $table = 'periodoAvaliacao';
    protected $fillable = ['periodoAvaliacaoIni', 'periodoAvalicaoFim', 'ativo'];

    public $rules = ['periodoAvaliacaoIni' => 'required',
                     'periodoAvalicaoFim' => 'required',];

    /*public $messages = ['contribuinte.required' => 'O campo CONTRIBUINTE é de preenchimento obrigatório!',
                     'inscEstadual.required' => 'O Campo INSC. ESTADUAL é de preenchimento obrigatório!',
                      'contribuinte.min' => 'O campo CONTRIBUINTE deve conter 3 caracteres!',];*/
}