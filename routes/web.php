<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FormController;

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
    Route::get('/company', 'company')->name('company');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::prefix('manager')
->middleware('can:manager-higher')
->group(function(){
    Route::get('/', function(){
        dd('manager');
    });
});


// お問合せフォーム
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::get('/form/complete', [FormController::class, 'complete'])->name('form.complete');

// postされた際に送信処理を実行するようにする
Route::post('/form', [FormController::class, 'sendMail']);