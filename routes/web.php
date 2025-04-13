<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\socialiteController;
use App\Http\Controllers\FormCompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/auth/google', [SocialiteController::class, 'googleLogin'])->name('auth.google');
Route::get('/auth/google/callback', [SocialiteController::class, 'googleAuthentication'])->name('auth.google.callback');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/formcompany/create', [FormCompanyController::class, 'create'])->name('formcompany.create');
Route::post('/formcompany/store', [FormCompanyController::class, 'store'])->name('formcompany.store');


Route::get('/dashboard', [FormCompanyController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/search', [FormCompanyController::class, 'search'])->name('dashboard.search');

Route::get('/company/{id}', [FormCompanyController::class, 'show'])->name('company.show');




require __DIR__.'/auth.php';