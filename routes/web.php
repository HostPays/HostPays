<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
})->name('welcome');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','verified');;

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::post('/settings', [App\Http\Controllers\SettingsController::class, 'update'])->name('settings.update')->middleware(['auth', 'password.confirm', 'verified']);
Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal();
});
Route::resource('/products', App\Http\Controllers\ProductsController::class);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::resource('/', App\Http\Controllers\Admin\AdminController::class);
  //  Route::resource('/products', App\Http\Controllers\Admin\ProductsController::class);
});