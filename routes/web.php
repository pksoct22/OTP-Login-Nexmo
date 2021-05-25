<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/verify', [VerifyController::class, 'getVerify'])->name('getverify');
Route::post('/verify', [VerifyController::class,'postVerify'])->name('verify');



Route::group(['prefix'=>'customer'], function() {

    Route::get('/addCustomer',[CustomerController::class, 'addCustomer'])->name('addCustomer');

    Route::post('/addCustomer', [CustomerController::class, 'addCustomerSubmit'])->name('addCustomerSubmit');

});

Route::group(['prefix'=>'user'], function(){

    Route::get('/userProfile',[UserController::class, 'userProfile'])->name('userProfile');
});


Route::group(['prefix'=>'product'], function(){

    Route::get('/addProduct',[ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/addProductSubmit',[ProductController::class, 'addProductSubmit'])->name('addProductSubmit');
    Route::post('/addProductStatusSubmit',[ProductController::class, 'addProductStatusSubmit'])->name('addProductStatusSubmit');
    Route::get('/addProductStatus',[ProductController::class, 'addProductStatus'])->name('addProductStatus');

});
