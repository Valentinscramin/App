<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\URL;

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

Route::get('/', [ContactsController::class, 'index'])->name('contacts.home');
Route::get('/new', [ContactsController::class, 'create'])->name('contacts.new');
Route::post('/store', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/{contacts}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
Route::post('/{contacts}/update', [ContactsController::class, 'update'])->name('contacts.update');
Route::post('/{contacts}/destroy', [ContactsController::class, 'destroy'])->name('contacts.destroy');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

URL::forceScheme('https');
