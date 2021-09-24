<?php

use App\Http\Controllers\MessageFormController;
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

Route::get('/', [MessageFormController::class, 'createForm']);

Route::post('/', [MessageFormController::class, 'sendForm'])->name('contact.store');

Route::get('/message-vue', function () {
	return view('message-vue');
});

Route::post('/message-vue', [MessageFormController::class, 'sendForm'])->name('contact.store');
