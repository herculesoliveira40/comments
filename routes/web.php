<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.user.index');
Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/users/{user}/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/update/{id}', [CommentController::class, 'update'])->name('comments.update');

Route::controller(CommentController::class)->group(function () {
   // Route::get('/comments','index')->name('comments.index');
    Route::get('/comments','al')->name('comments.al');
    
});

Route::get('/register', [UserController::class, 'create']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/auth', [UserController::class, 'auth'])->name('usuario.auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout'); // Alias Route

