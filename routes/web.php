<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('welcome','WelcomeController@index');
});*/

URL::forceRootUrl('http://studenti.sum.ba/projekti/fsre_rwa/2020/g24');

Route::get('/', 'WelcomeController@index')->name('/');
Route::get('tehnologije', 'WelcomeController@tech')->name('tehnologije');
Route::get('onama','OnamaController@index');
Route::post('order', 'Order@index')->name('order.menu');
Route::get('order', 'Order@index')->name('order.menu');
Route::get('/add-to-cart/{idjela}','Order@getAddToCart')->name('product.addToCart');
Route::get('/shopping-cart','Order@getCart')->name('product.shoppingCart');
Route::view('potvrda','PotvrdaController@index');
Route::post('potvrda','Order@checkout')->name('potvrda.narudbe');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admins')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users','UserController',['except' => ['show','create','store'] ]);

});

/*Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
   }) ; */
