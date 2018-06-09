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

Route::get('/', 'LoginController@getLogin')->name('/');
Route::post('/login', 'LoginController@postLogin')->name('login');



Route::group(['middleware'=>['authen','checkrole']], function()
{
	Route::get('/logout','LoginController@getLogout')->name('logout');
	Route::get('/dashboard', 'DashBoardController@dashboard')->name('dashboard');


});
// will be back for better authentication- 
//Route::group(['middleware'=>['authen','checkrole' , 'checkrole'=>'admin']], function()
Route::group(['middleware'=>['authen','checkrole']], function()
{
	Route::get('/manage/course','CourseController@getManageCourse')->name('manageCourses');

	Route::get('/manage/course/insert', 'CourseController@postInsertAcademic')->name('postInsertAcademic');
	
  	Route::get('/manage/course/insert-program', 'CourseController@postInsertProgram')->name('postInsertProgram');

  	Route::resource('level', 'LevelController');
  	Route::resource('academic', 'AcademicController');
  	Route::resource('program', 'ProgramController');
  	Route::resource('shift', 'ShiftController');
  	Route::resource('group', 'GroupController');
  	Route::resource('batch', 'BatchController');
  	Route::resource('time','TimeController');
    Route::resource('myclass', 'MyClassController');
    Route::get('/registerstudent', 'MyClassController@register');


  	Route::get('/manage/course/classinfo', 'CourseController@showClassInformation')->name('showClassInfo');
    Route::get('/manage/course/class/delete/{$id}', 'CourseController@deleteClass')->name('deleteClass');
});



Route::get('/dashbo', function(){
	return view('layout.master');
});

