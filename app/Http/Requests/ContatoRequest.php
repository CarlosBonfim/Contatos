<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()// Nao esta sendo ultilizada a autroização, por isso está true
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()// regras
    {
        switch($this->method()){
            case "POST"://verificacao de um novo registro
                return[
                    'nome' =>'required|max:80',
                    'telefone' => 'required|max:15',
                    'email' =>'email|max:50|unique:contatos',
                    'data_nasc' =>'date_format:"d/m/y"',//dia mes e ano, com demarcador de barra
                    'foto' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'//valida se é uma imagem, se tem imagem e o formato da imagem
                ];
            break;

        case "PUT":
            return[//verificação de um registro existente
                'nome' =>'required|max:80',
                'telefone' => 'required|max:15',
                'email' =>'email|max:50|unique:contatos,email,'.$this->id,//e informado o id do contato para que ele ignore o contato na hora de validar
                'data_nasc' =>'date_format:"d/m/y"',//dia mes e ano, com demarcador de barra
                'foto' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'//valida se é uma imagem, se tem imagem e o formato da imagem
            ];
            break;
                
        default:break;  
        }
    } 
    public function messages(){
        return[
            'nome.required' =>'Por favor insira um nome',
            'email.email' =>'Informe um e-mail valido'//email.email quer dizer que o e-mail tem quer ser um e-mail
            'data_nasc.date_format' => 'O campo deve está no formato dia/mes/ano'//mesma situação do e-mail, deve ser uma data
        ]
    }
}
