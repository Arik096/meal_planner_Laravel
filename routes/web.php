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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/student-delete/{id}','StudentController@destroy')->name('student.destroy');

Route::resource('student','StudentController')->except('destroy');


Route::resource('Meal','MealController');

Route::resource('Routine','MealRoutineController');

Route::resource('User','UserProfileController');

Route::resource('Profile','ProfileController');


Route::get('/admin/dateWise','dateWiseController@findDate')->name('meal.dateWise');




Route::get('/search','dateWiseController@search');
Route::get('/search_month','dateWiseController@search_month');
Route::get('/search_student','dateWiseController@search_student');

Route::get('/search_student_record','dateWiseController@search_student_record');


Route::get('/user/search','StudentMealSearchController@search');

Route::get('/user/routine','UserMealRoutineController@index');











