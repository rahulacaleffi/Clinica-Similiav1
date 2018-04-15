<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/clinica', function () {
    return view('clinica');
});
Route::get('/equipe', function () {
    return view('equipe');
});
Route::prefix('/cursos')->group(function () {
	Route::get('/', function () {
        return view('cursos/index');
    });
    Route::get('/metododasensacao', function () {
        return view('cursos/metododasensacao');
    });
    Route::get('/wwr', function () {
        return view('cursos/wwr');
    });
    Route::get('/macreprw', function () {
        return view('cursos/macreprw');
    });
    Route::get('/casosmensais', function () {
        return view('cursos/casosmensais');
    });
});
Route::prefix('/colaborador')->group(function () {
	Route::get('/', function () {
	    return view('colaborador/index');
	});
	Route::get('/cadastro', function () {
	    return view('colaborador/cadastro');
	});
});
Route::prefix('/usuario')->group(function () {
    Route::get('/', function () {
        return view('usuario/index');
    });
    Route::get('/index', function () {
        return view('usuario/index');
    });
    Route::get('/logado', function () {
        return view('usuario/logado');
    });
    Route::get('/registrar', function () {
        return view('usuario/registro');
    });
});
Route::get('/ambulatorio', function () {
    return view('ambulatorio/index');
});

Route::post("/api/v1/usuarios/salvar", "Usuarios@salvar");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
