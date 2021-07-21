<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthorController;

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
Route::post('/contactez-nous', [ HomeController::class, 'contactSend' ])->name('contactsendpage');

Route::get("/books", [ BookController::class, "allBooks" ])->name('bookspage');
Route::get("/book/{id}", [ BookController::class, "displayOne" ])->name('bookpage');

Route::get("/authors", [ AuthorController::class, "allAuthors" ])->name('authorspage');
Route::get("/author/{id}", [ AuthorController::class, "displayOne" ])->name('authorpage');

Route::get("/sendContactMail", [ MailController::class, "contactMailSend"])->name("sendcontactmail");