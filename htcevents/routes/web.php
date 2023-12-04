<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\EventController;
use App\Http\Controllers\SomaController;


Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/soma', [SomaController::class, 'soma']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $busca = request ('search');

    return view('products' , ['busca' => $busca]);
});

Route::get('/product/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
