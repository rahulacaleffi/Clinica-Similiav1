<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'crx_tipo' => 'required|size:3',
            'crx_numero' => 'required|max:10|unique:tbAluno'
        ];
    }

    public function messages(){
        return [
            'crx_tipo.required'  => 'Por favor, indique qual o seu Conselho Regional',
            'crx_tipo.size'  => 'Por favor, indique qual o seu Conselho Regional',
            'crx_numero.required'  => 'O número de registro no Conselho Regional é obrigatório',
            'crx_numero.max'  => 'Este não é um número de registro no Conselho Regional válido',
            'crx_numero.unique'  => 'Este número de registro no Conselho Regional já está em uso'
        ];
    }
}
