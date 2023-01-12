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


Route::get('/histoire', [Controller::class,"histoire"])->name('histoire');

Route::get('/prestations', [Controller::class,"prestations"])->name('prestations');

Route::get('/reservation', [Controller::class,"reservation"])->name('reservation');

Route::get('/contact', [Controller::class,"contact"])->name('contact');

Route::get('/servicedetail/{categorieId}', [Controller::class,"servicedetail"])->name('servicedetail');
