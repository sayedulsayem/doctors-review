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
    'uses' => 'SignUpController@home',
    'as'   => 'home'
]);

Route::get('/',[
   'uses' => 'SignUpController@login',
   'as'   => '/'
]);

Route::post('/visitor-sign-in',[
   'uses' => 'SignUpController@visitorSignIn',
   'as'   => 'visitor-sign-in'
]);

Route::get('/sign-up',[
   'uses' => 'SignUpController@register',
   'as'   => 'sign-up'
]);

Route::post('/new-visitor',[
   'uses' => 'SignUpController@newVisitor',
   'as'   => 'new-visitor'
]);

Route::post('/visitor-logout',[
   'uses' => 'SignUpController@visitorLogout',
   'as'   => 'visitor-logout'
]);

Route::get('/forget-password',[
   'uses' => 'SignUpController@forgetPassword',
   'as'   => 'forget-password'
]);

Route::get('/profile','ProjectController@getUserData');


//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
