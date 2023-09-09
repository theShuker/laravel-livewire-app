<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PostsList;
use App\Livewire\SinglePost;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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


Route::get('/login', function (){
  Auth::login(User::findOrFail(1));

  return redirect(route('posts'));
})->name('login');

Route::get('/logout', function (){
  Auth::logout();

  return redirect(route('posts'));
})->name('logout');

Route::get('/', fn() => redirect('/posts'));
Route::get('/posts', PostsList::class)->name('posts');
Route::get('/posts/create', \App\Livewire\Posts\CreatePost::class)->name('create-post');
Route::get('/posts/{post}', SinglePost::class)->name('post');
Route::get('/posts/by/{userId}', PostsList::class)->name('posts-by-user');

