<?php

use App\Http\Controllers\DentistaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\TratamientoController;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// 
// 

Route::get('/', function () {
    return view('perfect-smile-index');
});

Route::resource('dentista', DentistaController::class)->middleware('verified');

Route::post('paciente/{paciente}/asigna-tratamiento', [PacienteController::class, 'asignaTratamiento'])->name('paciente.asigna-tratamiento');
Route::post('paciente/{paciente}/asigna-factura', [PacienteController::class, 'asignaFactura'])->name('paciente.asigna-factura');

Route::resource('paciente', PacienteController::class)->middleware('verified');

Route::resource('tratamiento', TratamientoController::class)->middleware('verified');

Route::resource('factura', FacturaController::class)->middleware('verified');

Route::resource('inventario', InventarioController::class)->middleware('verified');



Route::get('log', function(){
    return view('auth/perfect-smile-login');
});

Route::get('inicio', function(){
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
