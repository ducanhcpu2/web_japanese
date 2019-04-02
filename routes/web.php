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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [
    'as' => 'index',
    'uses' => 'pageController@getIndex',
]);

Route::get('gallery', [
    'as' => 'gallery',
    'uses' => 'pageController@getGallery',
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'pageController@getAbout',
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'pageController@getContact',
]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'pageController@getLogin',
]);

Route::get('register', [
    'as' => 'register',
    'uses' => 'pageController@getRegister',
]);

Route::get('test-api', [
    'as' => 'test-api',
    'uses' => 'pageController@getRegister',
]);

Route::get('admin', [
    'as' => 'admin',
    'uses' => 'pageController@getAdmin',
]);

Route::post('login', 'pageController@postLogin');

Route::get('', 'homeController@getIndex');


Route::group(['middleware' => 'auth'], function () {
    Route::get('exams', 'pageController@getExams');
});

//Route::get('exams', 'pageController@getExams')->middleware('exams');