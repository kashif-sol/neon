<?php

use App\Http\Controllers\ShopifyController;
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
Route::group(['middleware' => 'verify.shopify'], function () {

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::get('/draft-order',[ShopifyController::class,'create']);

});