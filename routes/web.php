<?php

// desabilitando regra do phpcs pois as linhas de rotas costumam ser longas
// phpcs:disable Generic.Files.LineLength.TooLong,Generic.Files.LineLength.MaxExceeded

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web as Controller;

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

//login

//home
Route::get('/', [Controller\HomeController::class, 'index'])->name('site.index');

//sobre nós
Route::get('/sobre-nos', [Controller\AboutController::class, 'index'])->name('site.about');

//contato
Route::get('/contato', [Controller\ContactController::class, 'index'])->name('site.contact');


Route::prefix('/admin')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('site.customers');

    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('site.suppliers');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('site.products');
});
