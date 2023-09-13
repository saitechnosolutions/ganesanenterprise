<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::view('About-Us','pages.about');
Route::view('Products','pages.products');
Route::view('Contact-Us','pages.about');

Route::resource('Contact-Us',ContactController::class);
Route::post('Formsubmit',[ContactController::class,'formsubmission']);


