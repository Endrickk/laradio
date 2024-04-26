<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Http\Controllers\API\Usuario as APIUsuario;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('v1')->group(function (){
    Route::get('lista', function (){
        return Usuario::listar(10);
    });

    Route::post('cadastrar', [APIUsuario::class, 'salvar']);
});
