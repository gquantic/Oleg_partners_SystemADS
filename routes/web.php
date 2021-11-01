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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => true,
    'verify' => true,
    'reset' => true
]);

/*
|--------------------------------------------------------------------------
| Основные информационные страницы
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    return view('main-pages.dashboard');
})->name('home')->middleware('auth');

Route::get('/settings', function () {
    return view('main-pages.settings');
})->name('settings')->middleware('auth');

Route::get('/support', function () {
    return view('main-pages.dashboard');
})->name('support')->middleware('auth');

Route::get('/faq', function () {
    return view('main-pages.dashboard');
})->name('faq')->middleware('auth');

Route::get('/knowledge', function () {
    return view('main-pages.dashboard');
})->name('knowledge')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::put('{id}/change-password','HomeController@changePassword')->name('password');



/*
|--------------------------------------------------------------------------
| Работа с балансом
|--------------------------------------------------------------------------
*/

Route::get('/finance/history', function () {
    return view('finance/history');
})->name('finance-history')->middleware('auth');


Route::get('/finance/withdraw', function () {
    return view('finance/withdraw');
})->name('finance-withdraw')->middleware('auth');

Route::get('/finance/pay', function () {
    return view('finance/pay');
})->name('finance-pay')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Офферы. Добавление, просмотр своих офферов и API
|--------------------------------------------------------------------------
*/

Route::get('/offer/add', function () {
    return view('offer/add');
})->name('offer-add')->middleware('auth');

Route::get('/offer/my', function () {
    return view('offer/my-offers');
})->name('offer-my')->middleware('auth');

Route::get('/offer/api', [App\Http\Controllers\HomeController::class, 'index'])->name('offer-api')->middleware('auth');
Route::get('/offer/my/{id}', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Каталог офферов
|--------------------------------------------------------------------------
*/

Route::get('/offers/links', [App\Http\Controllers\HomeController::class, 'index'])->name('offers-links')->middleware('auth');
Route::get('/offers/catalog', [App\Http\Controllers\HomeController::class, 'index'])->name('offers-catalog')->middleware('auth');
Route::get('/offers/view/{id}', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Партнерская программа
|--------------------------------------------------------------------------
*/

Route::get('/partner/referrals', [App\Http\Controllers\HomeController::class, 'index'])->name('offers-links')->middleware('auth');
Route::get('/offers/advertisers', [App\Http\Controllers\HomeController::class, 'index'])->name('offers-catalog')->middleware('auth');
Route::get('/offers/webmasters', [App\Http\Controllers\HomeController::class, 'index'])->name('offers-catalog')->middleware('auth');
