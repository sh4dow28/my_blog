<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('CustomerViews.index');
})->name('blog.home');
Route::get('/article', function () {
    return view('CustomerViews.article');
})->name('toArticle');
Route::get('/about', function () {
    return view('CustomerViews.about');
})->name('toAbout');
Route::get('/category', function () {
    return view('CustomerViews.category');
})->name('toCategory');