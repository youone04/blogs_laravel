<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JavascriptController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog-detail/{id}', [HomeController::class, 'detailBlogs']);


Route::get('/blog-js', [JavascriptController::class, 'index']);


Route::get('/admin', function () {
    return view('welcome');
});

Route::resource('test', Test::class);

