<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secretaria extends Model
{
    protected $table = 'setor';
    protected $fillable = ['descricao', 'ativo'];

    public $rules = ['descricao' => 'required|min:5|max:50',];

    public $messages = ['descricao.required' => 'O campo NOME é de preenchimento obrigatório!',
                        'descricao.min' => 'O campo NOME deve conter 5 caracteres no mínimo.',
                        'descricao.max' => 'O campo NOME deve conter 50 caracteres no máximo.',];
}