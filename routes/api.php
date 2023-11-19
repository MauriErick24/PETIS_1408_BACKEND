<?php

use App\Http\Controllers\AuspiciadorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\PremioController;
use App\Http\Controllers\RequisitoController;
use App\Http\Controllers\tipoEventoController;
use App\Models\Premio;
use App\Models\Requisito;
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

Route::resource('evento', EventoController::class);
Route::resource('tipoEvento', tipoEventoController::class);
Route::resource('auspiciadores', AuspiciadorController::class);
Route::resource('organizadores', OrganizadorController::class);
Route::resource('premios', PremioController::class);
Route::resource('requisitos', RequisitoController::class);


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('register', 'AuthController@register');
    Route::post('me', 'AuthController@me');
});
