<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', [
        'title' => 'Halaman Home',
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "Halaman About",
        "nama" => "Jalu",
        "email" => "ara@bakekok.com"
    ]);
});

//MULTIPLE POSTS
Route::get('/posts', [PostController::class, 'index']);

//SINGLE POST
Route::get('/posts/{post:slug}', [PostController::class, 'showSingle']);

//CATEGORIES
Route::get('/categories/{category:slug}', [PostController::class,'showCategory']);

//CATEGORY SINGLE
Route::get('/categories', [PostController::class,'showCategories']);

//USER POSTS
Route::get('/author/{user}', function(){

});