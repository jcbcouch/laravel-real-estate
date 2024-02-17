<?php

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminListingController;
use App\Http\Controllers\AdminRealtorController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\RealtorController;

Route::get('/', function () {
    return view('index', [
        'listings' => Listing::latest()->paginate(3)
    ]);
});

Route::get('/test', function () {
    $realtor = Realtor::where('is_mvp', 'on')->paginate(1);
    dd($realtor);
});

Route::get('/about', function () {
    $MvpRealtor = Realtor::where('is_mvp', 'on')->paginate(1)[0];
    return view('about', [
        'realtors' => Realtor::all(),
        'MvpRealtor' => $MvpRealtor
    ]);
});

Route::get('/listings', function () {
    return view('listings', [
        // 'listings' => Listing::latest()->paginate(6)
        'listings' => Listing::all()
    ]);
});

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/search', [ListingController::class, 'search']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/admin/listings', [AdminListingController::class, 'listings'])->middleware(['auth', 'admin']);
Route::get('/admin/listings/create', [AdminListingController::class, 'create']);
Route::post('/admin/listings', [AdminListingController::class, 'store']);
Route::get('/admin/listings/{listing}/edit', [AdminListingController::class, 'edit'])->middleware(['auth', 'admin']);
Route::put('/admin/listings/{listing}', [AdminListingController::class, 'update'])->middleware(['auth', 'admin']);
Route::delete('/admin/listings/{listing}', [AdminListingController::class, 'destroy'])->middleware('auth');


Route::get('/admin/realtors', [AdminRealtorController::class, 'realtors'])->middleware(['auth', 'admin']);
Route::get('/admin/realtors/create', [RealtorController::class, 'create']);
Route::post('/admin/realtors', [RealtorController::class, 'store']);

