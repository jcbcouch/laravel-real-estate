<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminListingController;
use App\Http\Controllers\AdminRealtorController;

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/listings', [AdminListingController::class, 'listings'])->middleware(['auth', 'admin']);
Route::get('/admin/listings/create', [AdminListingController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/admin/listings', [AdminListingController::class, 'store'])->middleware(['auth', 'admin']);
Route::get('/admin/listings/{listing}/edit', [AdminListingController::class, 'edit'])->middleware(['auth', 'admin']);
Route::put('/admin/listings/{listing}', [AdminListingController::class, 'update'])->middleware(['auth', 'admin']);
Route::delete('/admin/listings/{listing}', [AdminListingController::class, 'destroy'])->middleware(['auth', 'admin']);


Route::get('/admin/realtors', [AdminRealtorController::class, 'realtors'])->middleware(['auth', 'admin']);
Route::get('/admin/realtors/create', [AdminRealtorController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/admin/realtors', [AdminRealtorController::class, 'store'])->middleware(['auth', 'admin']);
Route::get('/admin/realtors/{realtor}/edit', [AdminRealtorController::class, 'edit'])->middleware(['auth', 'admin']);
Route::put('/admin/realtors/{realtor}', [AdminRealtorController::class, 'update'])->middleware(['auth', 'admin']);
Route::delete('/admin/realtors/{realtor}', [AdminRealtorController::class, 'destroy'])->middleware(['auth', 'admin']);

Route::get('/admin/contacts', [AdminContactController::class, 'contacts'])->middleware(['auth', 'admin']);
Route::get('/admin/contacts/{contact}/details', [AdminContactController::class, 'details'])->middleware(['auth', 'admin']);
Route::delete('/admin/contacts/{contact}', [AdminContactController::class, 'destroy'])->middleware(['auth', 'admin']);