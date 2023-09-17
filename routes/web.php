<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PostController::class,'index'])->name('index');

Route::post('/store',[AdminController::class,'store'])->middleware(['auth', 'verified'])->name('storePost');

Route::put('/post/{post}',[AdminController::class, 'update'])->name('updatePost');
Route::get('/edit/{post}',[AdminController::class,'edit'])->name('editPost');


Route::get('/admin/dashboard', [AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/createPost', [AdminController::class,'create'])->middleware(['auth', 'verified'])->name('createPost');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
