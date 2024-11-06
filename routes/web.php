<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::middleware("auth")->get('/admin/users/{user}', [UserController::class, 'show'])->name('admin.users.show');
Route::middleware("auth")->get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
