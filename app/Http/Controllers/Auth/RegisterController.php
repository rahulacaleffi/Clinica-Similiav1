<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
            'email' => 'email|required|max:255|unique:tbUsuario',
            'telefone' => 'required|max:15',
            'endereco' => 'max:255'],
            ['nome.required'  => 'O nome é obrigatório',
            'nome.max'  => 'Este nome é muito grande, abrevie-o',
            'password.required'  => 'A senha é obrigatória',
            'password.min'  => 'Esta senha é muito curta (Deve conter pelo menos 6 dígitos)',
            'password.unique'  => 'Esta senha já está em uso',
            'password.confirmed'  => 'As passwords não coincidem',
            'email.email'  => 'Este não é um endereco de e-mail válido',
            'email.required'  => 'O e-mail é obrigatório',
            'email.max'  => 'Este e-mail é muito longo, utilize outro',
            'email.unique'  => 'Este e-mail já está em uso',
            'telefone.required'  => 'O número de telefone é obrigatório',
            'telefone.max'  => 'Este número de telefone não é válido',
            'telefone.min'  => 'Este número de telefone não é válido',
            'endereco.max'  => 'Este endereco é muito longo, abrevie-o']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Usuario
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nome' => $data['nome'],
            'senha' => bcrypt($data['password']),
            'email' => $data['email'],
            'telefone' => $data['telefone'],
            'endereco' => $data['endereco']
        ]);
    }
}
