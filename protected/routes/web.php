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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::prefix('home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/support', 'HomeController@index')->name('support');
    Route::get('/update-core', 'HomeController@index')->name('home/update-core');
    Route::get('/documentation', 'HomeController@index')->name('home/documentation');
});



Route::prefix('users')->group(function(){
    Route::get('/', 'UserController@index')->name('users');
     Route::get('/', 'UserController@getUsersData')->name('users-data');

    Route::get('/create', 'UserController@index')->name('users/create');
    Route::get('/members', 'UserController@index')->name('users/members');
    Route::get('/merchants', 'UserController@index')->name('users/merchants');
    Route::get('/social-sellers', 'UserController@index')->name('users/social-sellers');
    Route::get('/non-confirmed', 'UserController@index')->name('users/non-confirmed');
});

Route::prefix('affiliates')->group(function(){
    Route::get('/', 'AffiliateController@index')->name('affiliates');
    Route::get('/create', 'AffiliateController@index')->name('affiliates/create');
    Route::get('/referrals', 'AffiliateController@index')->name('affiliates/referrals');
    Route::get('/payouts', 'AffiliateController@index')->name('affiliates/payouts');
    Route::get('/visits', 'AffiliateController@index')->name('affiliates/visits');
    Route::get('/settings', 'AffiliateController@index')->name('affiliates/settings');
    Route::get('/tools', 'AffiliateController@index')->name('affiliates/tools');
});
