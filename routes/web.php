<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CidadeController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/empresa/create', [EmpresaController::class, 'create'])->middleware('auth')->name('novaempresa');
Route::get('empresas',[EmpresaController::class,'index'])->middleware('auth')->name('listar_empresas');
Route::get('load_cidades',[CidadeController::class,'loadcidades'])->middleware('auth')->name('load_cidades');