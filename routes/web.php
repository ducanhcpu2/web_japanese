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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('', [
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

Route::post('register', 'registerController@register');

Route::get('test-api', [
    'as' => 'test-api',
    'uses' => 'pageController@getRegister',
]);

Route::get('admin', [
    'as' => 'admin',
    'uses' => 'pageController@getAdmin',
]);

Route::post('login', 'pageController@postLogin');

Route::get('logout', [
    'as' => 'logout',
    'uses' => 'homeController@logout',
]);


Route::group(['middleware' => 'auth'], function () {
    Route::get('exams',[
        'as' => 'exams',
        'uses' => 'pageController@getExams',
    ]);
});
//
//Route::group(['middleware' => 'auth'], function () {
//    Route::get('sub_test_exams',[
//        'as' => 'sub_test_exams',
//        'uses' => 'pageController@getExams',
//    ]);
//});

//Route::get('exams', 'pageController@getExams')->middleware('exams');

