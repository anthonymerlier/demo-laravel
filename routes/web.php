<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [ HomeController::class, 'home' ])->name('homepage');

Route::get('/about/index', [ HomeController::class, "about" ])->name('aboutpage');

Route::get('/contactez-nous', [ HomeController::class, 'contact' ])->name('contactpage');