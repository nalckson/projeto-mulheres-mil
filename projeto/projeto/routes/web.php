<?php

use Illuminate\Support\Facades\Input;

Route::get('/index', function () {
    return view('paginas.index');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/contato', function() {
    return view('contato');
});

Route::post('/inicioAdm', function() {
    return view('inicioAdm');
});

Route::post('/dadosAdm', function() {
	return view('dadosAdm');   
});

Route::post('/cadastro', function() {
    return view('cadastro');
});

Route::post('/usuariosCadastrados', function() {
    return view('usuariosCadastrados');
});

Route::post('/manipularJogos', function() {
    return view('manipularJogos');
});

Route::post('criarJogoMemoria', function() {
    return view('criarJogoMemoria');
});

Route::post('criarJogoCompletar', function() {
    return view('criarJogoCompletar');
});

Route::post('/inicioAluno', function() {
    return view('inicioAluno');
});

Route::post('/escolherJogos', function() {
    return view('escolherJogos');
});

Route::post('/dadosAluno', function() {
	return view('dadosAluno');
});

Route::post('/sair', function() {
    return view('sair');
});