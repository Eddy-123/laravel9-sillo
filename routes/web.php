<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');
Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);
Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');
