<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "guilherme";
    $idade = 24;
    $profissao = 'programador';
    $arr = [1,2,3,4,5];
    $nomes = ["matheus", "joão", "maria", "guilherme"];

    return view('welcome',
    [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => "programador",
        'arr' => $arr,
        'nomes' => $nomes
        ]);
});

Route::get('contato', function () {
    return view('contact');
});

Route::get('/produtos', function (){

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null){
    return view ('product', ['id'=>$id]);
});
