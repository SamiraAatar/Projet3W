<?php

use App\Http\Controllers\Controller;
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

Route::get('/',[Controller::class,"home"])->name('home');

Route::get('/histoire', function () {
    $titre="Ns.Beauty";
    return view('histoire',["titre"=>$titre]);
})->name('histoire');

Route::get('/prestations', function () {
    return view('prestations');
})->name('prestations');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/servicedetail', function () {
    return view('servicedetail');
})->name('servicedetail');
