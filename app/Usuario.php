<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = "tbUsuario";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('nome', 'senha', 'email', 'telefone', 'endereco');

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array('senha', 'remember_token');

    public function aluno()
    {
        return $this->hasOne('App\Aluno');
    }
}
