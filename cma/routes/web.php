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


Route::get('/','HomeController@index')->name('welcome');
Route::get('/registeredstudent','StudentprofileController@index')->name('registeredstudentprofile');
Route::post('/registration','RegistrationController@reserve')->name('registration.reserve');

Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function(){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
   Route::resource('course','CourseController');
   Route::resource('student','StudentController');
   Route::get('registration','RegistrationController@index')->name('registration.index');
    Route::post('registration/{id}','RegistrationController@status')->name('registration.status');
    Route::delete('registration/{id}','RegistrationController@destory')->name('registration.destory');
});


