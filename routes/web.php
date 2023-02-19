<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
//     return view('news.index');
// });

Route::controller(NewsController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/aboutus', 'aboutus')->name('aboutus');
    Route::get('/business', 'business')->name('business');
    Route::get('/news', 'news')->name('news');
});