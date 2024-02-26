<?php

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListingController;

Route::get('/', function () {
    return view('index', [
        'listings' => Listing::latest()->paginate(3)
    ]);
});



Route::get('/about', function () {
    $MvpRealtor = Realtor::where('is_mvp', '1')->paginate(1)[0];
    return view('about', [
        'realtors' => Realtor::all(),
        'MvpRealtor' => $MvpRealtor
    ]);
});



Route::get('/dashboard', function () {
    return view('dashboard', [
        'contacts' => auth()->user()->contacts()->get()
    ]);
})->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/listings', [ListingController::class, 'listings']);
Route::get('/search', [ListingController::class, 'search']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);


Route::post('/contact', [ContactController::class, 'store'])->middleware('auth');

