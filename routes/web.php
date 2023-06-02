<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrepriseController;

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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/entreprise/connect', [EntrepriseController::class, 'connect'])
        ->name('entreprise.connect');

Route::post('/entreprise/checkForm', [EntrepriseController::class, 'checkForm'])
        ->name('entreprise.checkForm');

Route::get('/entreprise/create', [EntrepriseController::class, 'create'])
        ->name('entreprise.create');

Route::post('/entreprise', [EntrepriseController::class, 'store'])
        ->name('entreprise.store');

Route::post('/entreprise/disconnect', [EntrepriseController::class, 'disconnect'])
        ->name('entreprise.disconnect');
