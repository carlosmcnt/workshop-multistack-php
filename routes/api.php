<?php

use App\Http\Controllers\AdocaoController;
use App\Http\Controllers\PetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rota para representar a listagem de pets
Route::get('/pets', [PetController::class, 'index']);

// Rota para representar o cadastro de pets
Route::post('/pets', [PetController::class, 'store']);

// Rota para representar o cadastro de uma nova adoção feita
Route::post('/adocoes', [AdocaoController::class, 'store']);

// Rota para representar a listagem de adoções
Route::get('/adocoes', [AdocaoController::class, 'index']);


/*
POST: CADASTRO
Route::post('/pets', function () {
    echo 'estou cadastrando novo pet';
});

PUT: ATUALIZA
Route::put('/pets', function () {
    echo 'estou atualizando um pet';
});

DELETE: DELETA
Route::delete('/pets', function () {
    echo 'estou apagando um pet';
});
*/

