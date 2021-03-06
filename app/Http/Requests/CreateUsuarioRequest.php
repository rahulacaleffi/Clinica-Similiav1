<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuarioRequest extends FormRequest
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
            'password' => 'required|min:6|confirmed',
            'email' => 'email|required|max:255|unique:tbUsuario',
            'telefone' => 'required|max:15',
            'endereco' => 'max:255'
        ];
    }

    public function messages(){
        return [
            'nome.required'  => 'O nome é obrigatório',
            'nome.max'  => 'Este nome é muito grande, abrevie-o',
            'password.required'  => 'A password é obrigatória',
            'password.min'  => 'Esta password é muito curta (Deve conter pelo menos 6 dígitos)',
            'password.unique'  => 'Esta password já está em uso',
            'password.confirmed'  => 'As passwords não coincidem',
            'email.email'  => 'Este não é um endereco de e-mail válido',
            'email.required'  => 'O e-mail é obrigatório',
            'email.max'  => 'Este e-mail é muito longo, utilize outro',
            'email.unique'  => 'Este e-mail já está em uso',
            'telefone.required'  => 'O número de telefone é obrigatório',
            'telefone.max'  => 'Este número de telefone não é válido',
            'telefone.min'  => 'Este número de telefone não é válido',
            'endereco.max'  => 'Este endereco é muito longo, abrevie-o'
        ];
    }
}
