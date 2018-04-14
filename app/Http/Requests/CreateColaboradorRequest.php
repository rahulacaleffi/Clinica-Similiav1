<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateColaboradorRequest extends FormRequest
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
            'contribuicao' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'contribuicao.required'  => 'O valor de contribuição mensal é obrigatório',
            'contribuicao.numerico'  => 'O valor de contribuição deve conter apenas números'
        ];
    }
}
