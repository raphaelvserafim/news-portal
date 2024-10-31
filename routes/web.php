<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Category;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
  return view('home');
});


Route::get('/admin/auth/login', function () {
  return view("admin.authentication.login");
})->name('login');


Route::get('/admin/dashboard', [AdminController::class, 'dashboard']); //->middleware('auth');

Route::get('/admin/posts', [AdminController::class, 'dashboard']); //->middleware('auth');
Route::get('/admin/post-new', [AdminController::class, 'dashboard']); //->middleware('auth');
Route::get('/admin/edit-post/{id}', [AdminController::class, 'dashboard']); //->middleware('auth');


Route::get('/admin/category', [AdminController::class, 'dashboard']); //->middleware('auth');

Route::get('/admin/general', [AdminController::class, 'dashboard']); //->middleware('auth');
Route::get('/admin/users', [AdminController::class, 'dashboard']); //->middleware('auth');


Route::get('/admin/comments', [AdminController::class, 'dashboard']); //->middleware('auth');


Route::resource('category',   Category::class);

Route::resource('contact',   Contact::class);

Route::resource('post', PostsController::class);
