<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


/*Rota da primeira pagina que roda na aplicacao */
Route::get('/', [EventController::class,'index']);

Route::post('/events',[EventController::class,'store']);

Route::get('/events/createevents',[EventController::class,'createevents']);

Route::get('/contactos',function(){
    return view('contactos');
});

Route::get('/events/{id}',[EventController::class,'show']);

Route::get('/produtos',function(){
    $pesquisar=request('search');

    return view('produtos',['pesquisar'=>$pesquisar]);
});

Route::get('/produtos_teste/{id?}',function($id = null){
    return view('produtos_teste',['id'=>$id]);
});

Route::get('/entrar');

Route::get('/welcome',function(){
    return view('welcome');
});
