<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResponsavelRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'crx' => 'required|max:25'
            'contribuicao' => 'required'
        ];
    }

    public function messages(){
        return [
            'nome.required'  => 'O nome é obrigatório',
            'nome.max'  => 'Esse nome é muito grande, abrevie-o',
            'crx.required'  => 'O CRM/CRO é obrigatório',
            'crx.max'  => 'Esse CRM/CRO é muito grande',
            'contribuicao.required'  => 'O valor de contribuição é obrigatório'
        ];
    }
}
