<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DentistaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dentista', DentistaController::class);

Route::post('paciente/{paciente}/asigna-tratamiento', [PacienteController::class, 'asignaTratamiento'])->name('paciente.asigna-tratamiento');
Route::resource('paciente', PacienteController::class);



Route::get('inicio', function(){
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
