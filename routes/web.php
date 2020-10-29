<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact' , [ContactController::class ,  'create']);
Route::post('/contact' , [ContactController::class , 'store']);

Route::get('/privacy' , function() {
    return view('privacy');
}) ;
Route::get('/terms' , function() {
    return view('terms');
}) ;
Route::get('/about' , function() {
    return view('about');
});
Route::get('/posts/categories/{category:name}', [CategoryController::class , 'index']);
Route::get('/categories/create' , [CategoryController::class , 'create']);
Route::post('/categories' , [CategoryController::class , 'store'])->name('category.store');
Route::get('/categories/{category}' , [CategoryController::class , 'show'])->name('category.show');
Route::delete('/categories/{category}' , [CategoryController::class , 'destroy'])->name('category.destroy');

Route::get('/posts/tags/{tag:name}', [TagController::class , 'index']);
Route::get('/tags/create' , [TagController::class , 'create'])->name('tag.create');
Route::post('/tags' , [TagController::class , 'store'])->name('tag.store');
Route::get('/tags/{tag}' , [TagController::class , 'show']);
Route::delete('/tags/{tag}' , [TagController::class , 'destroy'])->name('tag.destory');


Route::get('/', [PostController::class ,  'index']);
Route::get('/posts/create' , [PostController::class, 'create']);
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post.show');
Route::post('/posts' , [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{post:slug}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post:slug}', [PostController::class, 'destroy'])->name('post.destroy');







