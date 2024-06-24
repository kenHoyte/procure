<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Models\Req;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('frontend/dashboard', function () {
    return view('frontend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('backend/main', function () {
    $reqs=Req::all();
    return view('backend.layout.maincontent', compact('reqs'));
})->middleware(['auth', 'verified'])->name('main');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::post('/addRequest', [RequestController::class, 'addRequest'])->name('addRequest');
});

require __DIR__.'/auth.php';
