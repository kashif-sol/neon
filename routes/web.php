<?php

use App\Http\Controllers\ShopifyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::get('form',function(){
    return view('form');
});
Route::get('/draft-order',[ShopifyController::class,'create']);

Route::get('/',[CustomController::class,'getData'])->name('home');
Route::get('/profiles',[ProfileController::class,'getData']);


});
Route::get('/export_quotes',[CustomController::class,'export_quotes']);
Route::get('/delete-quote/{id}',[CustomController::class,'delete_quote']);
Route::get('/get-quote/{id}',[CustomController::class,'quote_detail']);
Route::post('/save-quote',[CustomController::class,'save']);
Route::get('/delete-profile/{id}',[ProfileController::class,'delete_profile']);
Route::get('/get-profile/{id}',[ProfileController::class,'profile_detail']);
Route::post('/save-profile',[ProfileController::class,'save']);
Route::get('/export_profiles',[ProfileController::class,'export_profiles']);
