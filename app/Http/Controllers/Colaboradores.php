<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colaborador;

header("Access-Control-Allow-Origin: http://www.clinicasimilia.com.br");

//...

use App\Http\Requests\CreateColaboradorRequest;
use App\Http\Requests\CreateColaboradorInteiroRequest;

class Colaboradores extends Controller{
    public function index(){
		return Colaborador::orderBy("id", "asc")->get();
	}

	public function criarInteiro(CreateColaboradorInteiroRequest $request){
		$colaborador = new Colaborador;
		$colaborador->ambulatorio = $request->input("ambulatorio", 0);
		$colaborador->wwr = $request->input("wwr", 0);
		$colaborador->casosmensais = $request->input("casosmensais", 0);
		$colaborador->metododasensacao = $request->input("metododasensacao", 0);
		$colaborador->macreprw = $request->input("macreprw", 0);
		$colaborador->contribuicao = $request->input("contribuicao", 0);
		
		$colaborador->save();

		$aluno = $colaborador->aluno()->create([
			'crx_tipo' => $request->input("crx_tipo"),
			'crx_numero' => $request->input("crx_numero")
		]);

		$colaborador->aluno()->associate($aluno);
		$colaborador->save();

		$usuario = $aluno->usuario()->create([
			'nome' => $request->input("nome"),
			'senha' => $request->input("senha", rand(1, 1000)),
			'email' => $request->input("email"),
			'telefone' => $request->input("telefone"),
			'endereco' => $request->input("endereco")
		]);

		$aluno->usuario()->associate($usuario);
		$aluno->save();
		
		return $colaborador->id;
	}
	
	public function salvar(CreateColaboradorRequest $request){
		$colaborador = new Colaborador;
		$colaborador->ambulatorio = $request->input("ambulatorio", 0);
		$colaborador->wwr = $request->input("wwr", 0);
		$colaborador->casosmensais = $request->input("casosmensais", 0);
		$colaborador->metododasensacao = $request->input("metododasensacao", 0);
		$colaborador->macreprw = $request->input("macreprw", 0);
		$colaborador->contribuicao = $request->input("contribuicao", 0);
		$colaborador->aluno_id = $request->input("aluno_id");
		
		$colaborador->save();
		
		return $colaborador->id;
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