<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\paginas\casasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginas\indexController;
use App\Http\Controllers\paginas\perfilController;
use App\Http\Controllers\paginas\sobreNosController;
use App\Http\Controllers\paginas\perfilCasaController;

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
    
    Route::get('/',[indexController::class,'index'])->name('index');
    Route::get('/casasAvenda',[casasController::class,'index'])->name('casasAvenda.index');
    Route::get('/casasAlugada',[casasController::class,'index'])->name('casasAlugada.index');
    Route::get('/sobreNos',[sobreNosController::class,'index'])->name('sobreNos.index');
    Route::get('/perfil',[perfilController::class,'index'])->name('perfil.index');
    Route::get('/perfilCasa',[perfilCasaController::class,'index'])->name('perfilCasa.index');
    
    Route::get("/Dashboard",[dashboardController::class, "index"])->name('dashboard.index');

