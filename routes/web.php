<?php

use App\Http\Controllers\BarracksController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoldierController;
use Spatie\Ignition\Contracts\Solution;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'hola';
});

Route::get('/calcular-cuadratica', [CursoController::class, 'createCuadratica']);
Route::post('/calcular-cuadratica', [CursoController::class, 'storeCuadratica'])->name('cuadratica.store');

Route::get ('/calcular-factorial', [CursoController::class,'createfactorial']);
Route::post ('/calcular-factorial', [CursoController::class,'storefactorial'])->name('factorial.store');

Route::get('/formularioProducto',[ProductController::class,'create']);
Route::post('/storeProducto',[ProductController::class,'store'])->name('product.store');

Route::get('/registroSoldado',[SoldierController::class,'create']);
Route::post('/storeSoldados',[SoldierController::class,'store'])->name('soldier.store');

Route::get('/registroCuartel',[BarracksController::class,'create']);
Route::post('/storeCuartel',[BarracksController::class,'store'])->name('barracks.store');

Route::get('/registroCuerpo',[BodyController::class,'create']);
Route::post('/storeCuerpo',[BodyController::class,'store'])->name('body.store');

Route::get('/registroCompany',[CompanyController::class,'create']);
Route::post('/storeCompany',[CompanyController::class,'store'])->name('company.store');

Route::get('/registroServicio',[ServiceController::class,'create']);
Route::post('/serviceStore',[ServiceController::class,'store'])->name('service.store');

