<?php

use App\Http\Controllers\controladorGit;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[controladorGit::class, 'welcome']);
Route::get('formulario',[controladorGit::class, 'Formulario'])->name('form');
Route::get('tabla',[controladorGit::class, 'Tabla'])->name('tab');


Route::post('registrar',[controladorGit::class, 'procesarFormulario'])->name('guardar');