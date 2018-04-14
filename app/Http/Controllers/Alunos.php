<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlunoRequest;

use App\Http\Requests;

use App\Aluno;

class Alunos extends Controller{
    public function index(){
		return Alunos::orderBy("id", "asc")->get();
	}
	
	public function salvar(CreateColaboradorRequest $request){
		$aluno = new Alunos;
		$aluno->crx_tipo = $request->input("crx_tipo");
		$aluno->crx_numero = $request->input("crx_numero");
		$aluno->usuario_id = $request->input("usuario_id");
		
		$aluno->save();
		
		return $aluno->id;
	}
	
	// public function update(CreateResponsavelRequest $request){
	// 	$responsavel = Responsavel::find($request->input('id'));

	// 	if($responsavel == null){
	// 		$responsavel = new Responsavel();
	// 	}

	// 	$responsavel->nome = $request->input("nome");
	// 	$responsavel->email = $request->input("email");
	
		
	// 	$responsavel->save();

	// 	Auth::user()->responsavel_id = $responsavel->id;
	// 	Auth::user()->save();
		
	// 	return $responsavel->id;
	// }
	
	// public function editar($id){
	// 	return $responsavel = Responsavel::find($id);
	// }
	
	// public function remover(){
	// 	$responsavel = Responsavel::find(Auth::user()->responsavel->id);

	// 	Auth::user()->responsavel_id = null;
	// 	Auth::user()->save();
		
	// 	$responsavel->delete();
		
	// 	return "Responsavel removido com sucesso!";
	// }

	// public function getResponsavelAtual(){
	// 	return Auth::Responsavel();
	// }
	
}