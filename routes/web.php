<?php


Route::get('/', function () {
    return view('pagina');
});

Route::get('/primeiraview', function () {
    return view('minhaview');
});

//parametros para views
Route::get('/ola', function (){

    return view('minhaview')
        ->with('nome', 'Joao')
        ->with('sobrenome', 'Silva');
});

//parametros por url
Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome){
    /*
    return view('minhaview')
        ->with('nome', $nome)
        ->with('sobrenome', $sobrenome);*/

    //outra opcao para passagem de parametros: array associativo
    /*$parametros = ['nome'=>$nome, 'sobrenome'=>$sobrenome];
    return view('minhaview', $parametros);*/

    //terceira opcao, monta array associativo sozinho atraves de compact
    return view('minhaview', compact('nome', 'sobrenome'));
});

//verificar se view existe
Route::get('/email/{email}', function ($email){

    if(View::exists('email')){
        return view('email', compact('email'));
    } else{
        return view('erro');
    }
});