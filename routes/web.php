<?php

// desabilitando regra do phpcs pois as linhas de rotas costumam ser longas
// phpcs:disable Generic.Files.LineLength.TooLong,Generic.Files.LineLength.MaxExceeded

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web as Web;
use App\Http\Controllers\Admin as Admin;

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
Route::get('/', [Web\HomeController::class, 'index'])->name('site.index');

//sobre nós
Route::get('/sobre-nos', [Web\AboutController::class, 'index'])->name('site.about');

//contato
Route::get('/contato', [Web\ContactController::class, 'index'])->name('site.contact');

//rotas admin
Route::prefix('/admin')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('site.customers');

    Route::get('/fornecedores', [Admin\SupplierController::class, 'index'])->name('site.suppliers');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('site.products');
});


//fallback
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para acessar a página inicial.';
});
