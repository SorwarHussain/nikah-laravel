<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SadakahController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\BiodataController;
use App\Http\Controllers\Api\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('user', [UserController::class,'showUser']);
Route::get('users', [UserController::class,'showAllUsers'])->middleware(['auth:sanctum', 'verified','admin']);
Route::get('/users/{id}', [UserController::class, 'detailsUser'])->middleware(['auth:sanctum', 'verified','admin']);
Route::get('dashboard', DashboardController::class);
//contact-us
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
//sadakah
//Route::get('/sadakah', [ContactController::class, 'showForm'])->name('contact.form');
Route::get('/sadakah', [SadakahController::class,'showAllSadakah'])->middleware(['auth:sanctum', 'verified','admin']);
Route::post('/sadakah', [SadakahController::class,'submitSadakahForm']);
Route::get('/sadakah/{id}', [SadakahController::class, 'detailsSadakah'])->middleware(['auth:sanctum', 'verified','admin']);
//profile
Route::get('/profile/{id?}',[ProfileController::class,'showProfile'])->name('profile.show');
Route::post('/profile',[ProfileController::class,'createProfile'])->name('profile.create');
Route::put('/profile/{id}', [ProfileController::class, 'updateProfile']);
//biodata
Route::get('/biodata',[BiodataController::class,'showBiodatas'])->name('biodata.show');
Route::get('/biodata/{id}', [BiodataController::class, 'detailsBiodata']);
//added to wishlist
Route::get('/wishlist', [WishlistController::class, 'getWishlist']);
Route::post('/wishlist/{profile}', [WishlistController::class, 'addToWishlist']);
Route::delete('/wishlist/{profile}', [WishlistController::class, 'removeFromWishlist']);