<?php

use App\Http\Controllers\welcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
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

// Route::get ('/hello', [welcomeController::class,'hello']);

Route::get ('/world', function () {
    return 'World';
});

Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

Route::get ('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});

Route::get('/posts/{post}/comments/{comments}', function ($postId, $commentId) {
    return 'Pos ke-' .$postId. " Komentar ke-: ".$commentId;
});

// Route::get('/articles{id}', [PageController::class, 'articles']);

Route::get('/user{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});

Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [AboutController::class, 'About']);
Route::get('/articles{id}', [ArticleController::class, 'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
 'create', 'store', 'update', 'destroy'
]);