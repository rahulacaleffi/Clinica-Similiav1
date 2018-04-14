<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
	public $timestamps = false;
	
	protected $table = "tbColaborador";
   
	protected $fillable = array('ambulatorio', 'wwr', 'casosmensais', 'metododasensacao', 'macreprw', 'contribuicao');
   
	protected $hidden = array('aluno_id');

    public function aluno(){
      return $this->belongsTo('App\Aluno');
    }
   
}
 

