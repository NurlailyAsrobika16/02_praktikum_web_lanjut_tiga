<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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
    return ('Selamat Datang');
});

Route::get('/home',[HomeController::class,'home']);

Route::prefix('category')->group(function () {
    Route::get('/{id}', [CategoryController::class,'products']);
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class,'products']);
});

Route::get('news', function () {
    return "Halaman news";
});

Route::get('news/{id}', function ($id) {
    return "Halaman news tentang " .$id;
});

Route::prefix('program')->group(function () {
    Route::get('/{id?}', [ProgramController::class,'program']);
});

Route::get('/about-us', function () {
    return '<a href=https://www.educastudio.com/about-us>https://www.educastudio.com/about-us</a>';
   });

Route::resource('contact-us', ContactController::class);