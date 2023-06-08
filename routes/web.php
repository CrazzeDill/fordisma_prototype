<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\feedsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\profileController;
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

Route::get('/popular', function () {
    return view('layouts.main', [
        'current' => 'Popular'
    ]);
});

Route::get('/all', function () {
    return view('layouts.main', [
        'current' => 'All'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'current' => 'Login'
    ]);
});

Route::post('/login', [loginController::class,'processForm'])->name('login-form');

Route::get('/register', [registerController::class,'view']);
Route::get('/register/complete', [registerController::class,'selesai']);
Route::post('/register', [registerController::class,'processForm'])->name('register-form');

Route::get('/home',[feedsController::class, 'showHome'])->name('home');
Route::get('/popular',[feedsController::class, 'showPopular']);
Route::get('/all',[feedsController::class, 'showAll']);

Route::get('/t/{topic}/',[feedsController::class, 'showTopicPost']);
Route::get('/t/{topic}/post/{post}',[feedsController::class, 'showPost']);
Route::get('/t/{topic}/post/{post}/edit',[feedsController::class, 'editPost']);
Route::get('/t/{topic}/post/{post}/delete',[feedsController::class, 'deletePost']);

Route::get('/createPost',[feedsController::class, 'buatPost']);
Route::get('/reported',[feedsController::class,'showReports']);

Route::post('/posts/{id}/like', [PostController::class, 'like'])->name('posts.like');
Route::post('/posts/{id}/dislike', [PostController::class, 'dislike'])->name('posts.dislike');

Route::get('/p/{username}',[profileController::class,'showProfile']);
Route::get('/search',[feedsController::class, 'searchpage']);

Route::get('/admin',[adminController::class,'showOverview']);
Route::get('/admin/topik',[adminController::class,'showTopik']);
Route::get('/admin/post',[adminController::class,'showPost']);
Route::get('/admin/p',[adminController::class,'showUser']);

Route::post('/create/',[feedsController::class,'seePost']);