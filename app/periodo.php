<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    protected $table = 'periodoAvaliacao';
    protected $fillable = ['periodoAvaliacaoIni', 'periodoAvaliacaoFim', 'ativo'];

    public $rules = ['periodoAvaliacaoIni' => 'required|min:10|max:15',
                     'periodoAvaliacaoFim' => 'required|min:10|max:15',];

    public $messages = ['periodoAvaliacaoIni.required' => 'O campo DATA INÍCIO DA AVALIAÇÃO é de preenchimento obrigatório!',

                        'periodoAvaliacaoFim.required' => 'O Campo DATA FINAL DA AVALIAÇÃO é de preenchimento obrigatório!',

                        'periodoAvaliacaoIni.min' => 'O campo DATA INÍCIO DA AVALIAÇÃO deve conter 10 caracteres no mínimo. Ex: 01/12/2018!',
                        'periodoAvaliacaoIni.max' => 'O campo DATA INÍCIO DA AVALIAÇÃO deve conter 15 caracteres no máximo. Ex: 01/12/2018!',
                        'periodoAvaliacaoFim.min' => 'O campo DATA FINAL DA AVALIAÇÃO deve conter 10 caracteres no mínimo. Ex: 01/12/2018!',
                        'periodoAvaliacaoFim.max' => 'O campo DATA FINAL DA AVALIAÇÃO deve conter 15 caracteres no máximo. Ex: 01/12/2018!',];
}