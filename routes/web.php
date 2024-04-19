<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
// al listings 
Route::get('/', [ListingController::class, 'index']);


// Show Create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');



// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// single listing 
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show Register/Create From
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new User
Route::post('/users', [UserController::class,'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage']);