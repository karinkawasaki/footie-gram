<?php

use App\Http\Controllers\MypageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ColumnController;
use App\Http\Controllers\TextbookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/mypage',[MypageController::class,'mypage'])->name('mypage');

Route::get('/menu',[MenuController::class,'menu'])->name('menu');

Route::get('/column',[ColumnController::class,'column'])->name('column');

Route::get('/textbook',[TextbookController::class,'textbook'])->name('textbook');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
