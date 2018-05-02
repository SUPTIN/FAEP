<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localTrab extends Model
{
    protected $table = 'localTrabalho';
    protected $fillable = ['descricao', 'secretaria'];

    public $rules = ['descricao' => 'required|min:5|max:50',
                     'secretaria' => 'required'];

    public $messages = ['descricao.required' => 'O campo NOME é de preenchimento obrigatório!',
                        'descricao.min' => 'O campo NOME deve conter 5 caracteres no mínimo.',
                        'descricao.max' => 'O campo NOME deve conter 50 caracteres no máximo.',
                        'secretaria.required' => 'O campo SECRETARIA é de preenchimento obrigatório!',];
}