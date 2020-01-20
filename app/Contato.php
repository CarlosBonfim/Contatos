<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model //dentro do contato model vamos definir quais campos serão preenchidos
{
    protected $fillable = [
        'nome','telefone', 'email','data_nasc','foto' //somente  o campo id nao sera preenchido pelo ususario
    ];
}
