<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//   api/admin/list-users
Route::group(['prefix' => 'admin'], function () {
    Route::get('list-users', 'API\AdminController@getUsers');
});

//list information of current user
Route::get('getInforUser','API\UserController@getInforUser');

//list all exams
Route::get('getListExams','API\ExamsController@getListExams');

//list all questions in an exam
Route::get('getListQuestion','API\ExamsController@getListQuestion');

//list all lessons
Route::get('getListLesson','API\LessonController@getListLesson');

//getting content of a lesson
Route::get('getContentLesson','API\LessonController@getContentLesson');


//get vocabularry
Route::get('getVocabularry','API\LessonController@getVoca');

//get grammar
Route::get('getGrammar','API\LessonController@getGrammar');

//get Point of exams
Route::get('point','API\ExamsController@getPoint');
