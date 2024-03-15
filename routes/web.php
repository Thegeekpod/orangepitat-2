<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
Route::get('/testimonials', [IndexController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact-us');
Route::get('/about', [IndexController::class, 'about'])->name('about-us');
//service
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/services-details', [IndexController::class, 'services_details'])->name('services-details');











