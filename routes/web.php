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

Auth::routes();
/*----------manage route admin----------*/
Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin/datatables_user', 'DatatablesController@userData')->name('datatables_user');
	Route::get('/admin/datatables_role', 'DatatablesController@roleData')->name('datatables_role');
	Route::get('/admin/datatables_field', 'DatatablesController@fieldData')->name('datatables_field');
	Route::get('/admin/datatables_level', 'DatatablesController@levelData')->name('datatables_level');
	Route::get('/admin/datatables_exam', 'DatatablesController@examData')->name('datatables_exam');
	Route::get('/admin/select_level', 'AdminController@selectLevel')->name('select_level');
	Route::get('/', 'AdminController@index')->name('homeAdmin');
	Route::resource('listRole', 'RoleController');
	Route::resource('admin', 'AdminController');
	Route::resource('field', 'FieldController');
	Route::resource('level', 'LevelController');
	Route::resource('exam', 'ExamController');
	Route::get('/admin/addAnswer/{id}', 'examController@addAnswer')->name('addAnswer');
	Route::resource('answer', 'AnswerController');
	Route::resource('question', 'QuestionController');
	/*datatable*/
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
	Route::get('addExam/{id}','UserExamController@addNew')->name('addExam');
	Route::get('deleteExam/{id}','UserExamController@deleteExam')->name('deleteExam');
});



