<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    
    protected $table = "tbAluno";

    protected $fillable = array('crx_tipo', 'crx_numero');

    protected $hidden = array('user_id');

    public function usuario(){
      return $this->belongsTo('App\Usuario');
    }

    public function colaborador()
    {
        return $this->hasOne('App\Colaborador');
    }
}
