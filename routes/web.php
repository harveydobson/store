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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/asset', [App\Http\Controllers\AssetController::class, 'indexByPost']);
Route::get('/asset/{purchase_ref}', [App\Http\Controllers\AssetController::class, 'indexByGet']);

Route::get('/asset/image/{purchase_ref}', [App\Http\Controllers\AssetController::class, 'image']);

Route::get('/buy/{purchase_ref}', [App\Http\Controllers\BuyController::class, 'buy']);

Route::get('login/{provider}', 'App\Http\Controllers\Auth\SocialController@redirectToProvider')->name('social.login');
Route::get('login/{provider}/callback', 'App\Http\Controllers\Auth\SocialController@handleProviderCallback');
