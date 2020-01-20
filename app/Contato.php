<?php

namespace App;
/*
Quando coloca por exemplo getFotoImageAttribute, ele reconhece as letras maiusculas
*/

use Illuminate\Database\Eloquent\Model;

class Contato extends Model{ //dentro do contato model vamos definir quais campos serão preenchidos
    protected $fillable = [
        'nome','telefone', 'email','data_nasc','foto' //somente  o campo id nao sera preenchido pelo ususario
    ];


    public function getFotoImageAttribute($value){//
        return $this-> foto == null ? asset('images/null.png') : asset($this->foto);//vai salvar a imagem
    }
    public function getFotoFilenameattribute($value){//vai pegar o nome da foto
        return substr($this-> foto ,30 ,strlen($this->foto));
    }
    public function getDataNascAttribute($value){//
        return dateFormatDatabaseScreen($value,'screen');
    }

    public function setDataNascimentoAttribute($value){
        $this->attirbutes['data_nascimento'] = dateFormatDataBaseScreen($value);
    }

    public function setFotorAttribtue($value){
        $filename = substr(md5(rand(10000, 999999)),0,5) .'_'. $value->getClientOriginalName();//alterando o nome do arquivo
       
        $filepath = 'public/uploads/'.date('Y').'/'.date('m').'/'; 
        if ($value->isValid()){
            $path = $value ->storeAs($filepath,$filename);
        }
        $this->attributes['avatar'] = str_replace('public', 'storage',$filepath).$filename;  
    }
    
}
