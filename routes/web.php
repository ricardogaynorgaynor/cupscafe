<?php

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
Route::view('/', 'index');
Route::view('menu', 'menu');
Route::view('index', 'index');
Route::view('adminmenu','adminmenu');
Route::view('cart', 'cart');
Route::view('checkout', 'checkout');
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('product-single', 'product-single');
Route::view('order', 'order');


Auth::routes();

Route::prefix('admin')->group( function() {

    Route::get('/login','Auth\AdminLoginController@adminLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@adminLogin')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.index');

    Route::get('/create', [
        "uses" => "AdminController@showForm",
        "as" => "admin.add.item.form"
    ]);

    Route::post('/create/record', [
        "uses" => "AdminController@create",
        "as" => "admin.create.item"
    ]);




});

Route::prefix('cust')->group( function(){
Route::get('/login','Auth\CustomerLoginController@custLoginForm')->name('cust.login');
Route::post('/login','Auth\CustomerLoginController@custLogin')->name('cust.login.submit');
});
