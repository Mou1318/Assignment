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
    return redirect('table');
});
Route::group(['middleware' => 'checkloggedin'], function(){
Route::get('table','BasicController@table');
Route::get('modal','BasicController@modal');

Route::post('tableStore','BasicController@tableStore');
Route::post('update/{id}','BasicController@updateStore');

Route::get('modal/{id}', 'BasicController@modal');
});
Route::get('login', 'BasicController@login');
Route::get('logout', 'BasicController@logout');
//Route::get('section_modal/{id}', 'BasicController@section_modal');

Route::post('loginStore', 'BasicController@loginStore');
Route::post('signupStore','BasicController@signupStore');