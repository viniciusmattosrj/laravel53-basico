<?php

Route::get('/categoria/{idCat}/nome-fixo/{prm2}',function($idCat,$prm2){
   return "Posts da categoria {$idCat} - {$prm2}"; 
});

Route::get('/nome/nome2/nome6',function(){
    return 'Rota Grande';
})->name('rota.nomeada');

Route::any('/any',function(){
    return 'Route any';
});

Route::match(['get','post'], '/match',function(){
    return 'Route match';
});

Route::post('/post',function(){
   return 'Route Post'; 
});

Route::get('/contato',function(){
   return 'Contato';
});

Route::get('/empresa',function(){
   return view('empresa'); 
});

Route::get('/', function () {
    //return view('welcome');
    return redirect ()->route('rota.nomeada');
});
