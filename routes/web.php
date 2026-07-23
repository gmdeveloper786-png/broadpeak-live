<?php

use App\Http\Controllers\ContactFormController;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact-us');

Route::get('/solutions', function () {
    return view('pages.solutions');
})->name('solutions');

Route::get('/network-solutions', function () {
    return view('pages.network-solutions');
})->name('network-solutions');

Route::get('/physical-security', function () {
    return view('pages.physical-security');
})->name('physical-security');

Route::get('/power-solutions', function () {
    return view('pages.power-solutions');
})->name('power-solutions');

Route::get('/storage-solutions', function () {
    return view('pages.storage-solutions');
})->name('storage-solutions');

Route::get('/infrastructure-solutions', function () {
    return view('pages.infrastructure-solutions');
})->name('infrastructure-solutions');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::post('/contact/submit', [ContactFormController::class, 'contact'])->name('contact.submit');
Route::post('/request-quote/submit', [ContactFormController::class, 'quote'])->name('quote.submit');
