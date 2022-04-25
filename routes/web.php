<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index',function(){

  return view('home');

});

Route::get('lang/{lang}',['as' => 'lang.switch', 'uses' =>'App\Http\Controllers\LanguageController@switchLanguage']);

Route::post('v_form',[App\Http\Controllers\LanguageController::class,'ch_foinputf']);
