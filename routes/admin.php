<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\location\LocationController;
use App\Http\Controllers\admin\packages\PackagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Auth\AuthController;
use App\Http\Controllers\admin\project\ProjectController;
use App\Http\Controllers\admin\testimonials\TestimonialController;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
// 
Route::group(['prefix'=>'admin', 'middleware'=>'admin'],function(){
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
Route::resource('/projects', ProjectController::class);
Route::resource('/testimonials', TestimonialController::class);
Route::post('/delete/image', [ProjectController::class, 'deleteImage'])->name('admin.deleteImage');
// location
Route::resource('/location', LocationController::class);
Route::get('/locations/create', [LocationController::class,'create'])->name('locations.create');
Route::get('/locations/{location}/edit',  [LocationController::class,'edit'])->name('locations.edit');
Route::post('/locationstore', [LocationController::class,'store'])->name('locations.store');
Route::put('/locations/{id}',  [LocationController::class,'update'])->name('locations.update');
Route::delete('locations/{slug}', [LocationController::class,'destroy'])->name('locations.destroy');

Route::get('/packages/create',[PackagesController::class,'create'])->name('package.create');

Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});

