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


Route::get('/home',[
    'uses' => 'WelcomeController@home',
    'as'   => 'home'
]);

Route::get('/',[
   'uses' => 'WelcomeController@home',
   'as'   => '/'
]);

Route::get('/sign-up','ValidationController@showSignUpPage');
Route::get('/login','ValidationController@getLoginView');

Route::post('/login-verify','ValidationController@login');


//doctors routes

Route::get('/doctors/sign-up','Doctors\DoctorsController@signUp');

Route::post('/doctors/doctor-sign-up','Doctors\DoctorsController@newSignUp');
Route::get('/doctors/edit-profile','Doctors\DoctorsController@editProfileView');

Route::post('/doctors/edit-store','Doctors\DoctorsController@editProfileStore');

Route::group(['middleware' => 'login_validation_dr'], function (){
    Route::get('/doctors','Doctors\DoctorsController@home');
});

Route::resource('/doctors/all-schedule', 'Doctors\DrScheduleController');


//patients routes

Route::get('/patients/sign-up','Patients\PatientsController@signUp');

Route::post('/patients/patient-sign-up','Patients\PatientsController@newSignUp');
Route::get('/patients/edit-profile','Patients\PatientsController@editProfileView');

Route::post('/patients/edit-store','Patients\PatientsController@editProfileStore');

Route::group(['middleware' => 'login_validation_pt'], function (){
    Route::get('/patients','Patients\PatientsController@home');
});



Route::get('/logout','ValidationController@logOut');




//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

