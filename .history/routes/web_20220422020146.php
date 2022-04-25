<?php

use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'index'])->name('blog.index');

Route::get('/article', function () {
    return view('CustomerViews.article');
})->name('blog.article');
Route::get('/about', function () {
    return view('CustomerViews.about');
})->name('blog.about');
Route::get('/category', function () {
    return view('CustomerViews.category');
})->name('blog.category');
Route::get('/page/{id}', function($id) {
    return view('CustomerViews.test');
});
Route::resource('posts', PostController::class)->except('index');