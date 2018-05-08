<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avaliador extends Model
{
    protected $table = 'avaliadores';
    protected $fillable = ['nome', 'setor','aceite', 'ativo'];

    public $rules = ['nome' => 'required|min:5|max:50'];

    public $messages = ['nome.required' => 'O campo NOME é de preenchimento obrigatório!',
                        'nome.min' => 'O campo NOME deve conter 5 caracteres no mínimo.',
                        'nome.max' => 'O campo NOME deve conter 50 caracteres no máximo.',];
}