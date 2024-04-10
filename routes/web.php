<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\StripePaymentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::post('/appoinment', [HomeController::class, 'appoinment'])->name('appoinment');
Route::get('/payment', [StripePaymentController::class, 'stripe'])->name('payment-callback');
Route::post('/stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
