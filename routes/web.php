<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ApiOffersController;
use App\Http\Controllers\UserController;

/**
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

/**
|--------------------------------------------------------------------------
| Основные информационные страницы
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    // Вытаскиваем список авторизаций
    $authorizationsList = DB::table('authorizationslist')->where('user', Auth::user()->id)->get();

    return view('main-pages.dashboard', ['authorizationList' => $authorizationsList]);
})->name('home')->middleware('auth');

Route::get('/settings', function () {
    return view('main-pages.settings');
})->name('settings')->middleware('auth');

Route::get('/support', function () {
    return view('main-pages.dashboard');
})->name('support')->middleware('auth');

Route::get('/faq', function () {
    return view('main-pages.faq');
})->name('faq')->middleware('auth');

Route::get('/knowledge', function () {
    return view('main-pages.knowledge');
})->name('knowledge')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::put('{id}/change-password','App\Http\Controllers\SecureController@changePassword')->name('password');
//Route::put('{id}/change-email','App\Http\Controllers\SecureController@changeEmail')->name('email');

/**
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

/**
|----------------------------------------------------------------------------------
| Офферы. Добавление, просмотр своих офферов, просмотр подробностей оффера и API
|----------------------------------------------------------------------------------
*/

Route::get('/offer/add', function () {
    return view('offer/add');
})->name('offer-add')->middleware('auth');

Route::get('/offer/my', function (OfferController $offerController) {
    return view('offer/my-offers', ['offers' => $offerController->getOffers(), 'controller' => $offerController]);
})->name('offer-my')->middleware('auth');

Route::get('/offer/my/{id}', function (OfferController $offerController, $id) {
    return view('offer/edit', ['offer' => $offerController->getOfferData($id)]);
})->middleware('auth');

Route::get('/offer/my/{id}/edit', function (OfferController $offerController, $id, ApiOffersController $apiOffersController) {
    return view('offer/edit', [
        'obj' => $offerController,
        'data' => $offerController->getOfferData($id),
        'moderate' => $offerController->checkModeration($id),
        'details' => $offerController->getDetails($id),
        'creatives' => $offerController->getCreatives($id),
        'api' => $apiOffersController
    ]);
})->middleware('auth');

Route::get('/offer/api', function () {
    return view('offer.api');
})->name('offer-api')->middleware('auth');

Route::get('/offer/pay/{id}', function ($id, OfferController $offerController) {
    return view('offer.pay', ['id' => $id, 'details' => $offerController->getOfferData($id)]);
})->middleware('auth');

Route::get('/offer/{id}', [App\Http\Controllers\OfferController::class, 'showOffer'])->middleware('auth');

/**
|--------------------------------------------------------------------------
| Каталог офферов
|--------------------------------------------------------------------------
*/

Route::get('/offers/links', function (UserController $userController) {
    return view('offers.links', [
        'links' => $userController->getLinks()
    ]);
})->name('offers-links')->middleware('auth');

Route::get('/offers/catalog', function () {
    return view('offers.catalog', ['offers' => DB::table('offers')->where('checked', 1)->get()]);
})->name('offers-catalog')->middleware('auth');

/**
|--------------------------------------------------------------------------
| Партнерская программа
|--------------------------------------------------------------------------
*/

Route::get('/partner/referrals', function () {
    return view('partner.referrals');
})->name('partner-referrals')->middleware('auth');

Route::get('/partner/invite', function () {
    return view('partner.invite');
})->name('partner-invite')->middleware('auth');

Route::get('/partner/invite1', function () {
    return view('partner.invite1');
})->name('partner-invite1')->middleware('auth');

/**
|--------------------------------------------------------------------------
| Forms
|--------------------------------------------------------------------------
*/

Route::post('action/offer/create', [\App\Http\Controllers\OfferController::class, 'createOffer'])->name('create-offer');

Route::post('action/offer/pay', [\App\Http\Controllers\OfferController::class, 'payOffer'])->middleware('auth');

Route::post('/action/offer/edit/details/{id}', [\App\Http\Controllers\OfferController::class, 'editDetails'])->middleware('auth');

Route::post('/action/offer/addCreo', [\App\Http\Controllers\OfferController::class, 'addCreo'])->middleware('auth');

Route::post('/action/offer/connect', [\App\Http\Controllers\AccessController::class, 'request'])->middleware('auth');

Route::get('/action/offer/removeCreo/{id}', [\App\Http\Controllers\OfferController::class, 'removeCreo'])->middleware('auth');

Route::get('/action/offer/edit/active/{id}', [\App\Http\Controllers\OfferController::class, 'editActiveStatus'])->middleware('auth');

/**
|--------------------------------------------------------------------------
| API Actions
|--------------------------------------------------------------------------
*/

Route::get('/api/offers/update/token/{id}', [\App\Http\Controllers\ApiOffersController::class, 'updateToken']);
