<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ContactController;
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
    return view('welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact/all', [ContactController::class, 'contactData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::get('/contact/{id}', [ContactController::class, 'contactSingle'])->name('contact-single');

Route::post('/contact/{id}', [ContactController::class, 'contactUpdate'])->name('contact-update');
Route::get('/contact/{id}/delete', [ContactController::class, 'contactDelete'])->name('contact-delete');
// Route::post('/contact/submit', function () {
//     return Request::all();
// })->name('contact-form');
Route::get('users', function()
{
    return 'Users!';
});

Route::resource('projects', FlightController::class);