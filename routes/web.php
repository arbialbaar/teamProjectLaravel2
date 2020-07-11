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
    return view ('compro.home');
});
Route::get('/home', function () {
    return view ('compro.home');
});
Route::get('/about', function () {
    return view ('compro.about');
});


Route::get('/members', 'MemberController@index')->name('members.index');
Route::get('/members/create', 'MemberController@create')->name('members.create');
Route::post('/members', 'MemberController@store')->name('members.store');
Route::get('/members/{member}', 'MemberController@show')->name('members.show');
Route::get('/members/{member}/edit', 'MemberController@edit')->name('members.edit');
Route::patch('/members/{member}', 'MemberController@update')->name('members.update');
Route::delete('/members/{member}', 'MemberController@destroy')->name('members.destroy');

