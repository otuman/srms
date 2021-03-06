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
    Route::get('/users-data', 'UserController@getUsersData')->name('users-data');
    Route::get('/create', 'UserController@create')->name('users/create');
    Route::post('/create', 'UserController@store')->name('users/create');
    Route::get('/edit/{id}', 'UserController@edit')->name('users/edit');
    Route::post('/edit/{id}', 'UserController@update')->name('users/edit');
    Route::get('/show/{id}', 'UserController@show')->name('users/show');
    Route::get('/delete/{id}', 'UserController@destroy')->name('users/delete');
    Route::get('users/profile', 'UserController@editProfile')->name('users/profile');

});

Route::prefix('courses')->group(function(){
    Route::get('/', 'CourseController@index')->name('courses');
    Route::get('/create', 'CourseController@index')->name('courses/create');
    Route::get('/enroll', 'CourseController@index')->name('courses/enroll');
    Route::get('/enroll', 'CourseController@index')->name('courses/enroll');
});


Route::prefix('classes')->group(function(){
    Route::get('/', 'ClassController@index')->name('classes');
    Route::get('/create', 'ClassController@index')->name('classes/create');
    Route::get('/show/{id}', 'ClassController@index')->name('classes/show');
    Route::get('/edit/{id}', 'ClassController@index')->name('classes/eidt');
});
