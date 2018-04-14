<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;

use App\Http\Requests;

use App\Usuario;

class Usuarios extends Controller{
    public function index(){
		return Usuarios::orderBy("id", "asc")->get();
	}
	
	public function salvar(CreateUsuarioRequest $request){
		$usuario = new Usuario;
		$usuario->nome = $request->input("nome");
		$usuario->senha = $request->input("senha", rand(1, 1000));
		$usuario->email = $request->input("email");
		$usuario->telefone = $request->input("telefone");
		$usuario->endereco = $request->input("endereco");
		
		$usuario->save();
		
		return $usuario->id;
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