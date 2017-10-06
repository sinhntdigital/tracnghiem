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
date_default_timezone_set('Asia/Ho_Chi_Minh');
Route::get('/', ['middleware' => ['admin'], function() {
   return view('admin/app');
}]);
Auth::routes();
/*----------manage route admin----------*/
Route::group(['middleware' => 'admin'], function(){
	Route::get('/',  function() {
		return view('admin/app');
	});
});
/*----------manage route member----------*/
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/quiz/{exam_id}','QuizController@index' )->name('quiz');
	Route::get('/update_answer','QuizController@updateAnswer')->name('updateAnswer');
	Route::get('/listquiz','QuizController@listQuiz')->name('listquiz');
	Route::get('/update_start_doing','QuizController@updateStartDoing')->name('usd');
	Route::get('result/{exam_id}','QuizController@result')->name('result');
	Route::get('detailQuestion','QuizController@detailQuestion')->name('detailQuestion');
});



