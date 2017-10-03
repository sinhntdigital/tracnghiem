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
});



