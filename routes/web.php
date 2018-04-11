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

    // return view('welcome');
Route::get('/', 'ContentsController@home');

Route::get('/coffees/{coffee}', 'CoffeeController@show');

Route::get('/coffees', 'CoffeeController@showCoffees');

Route::get('/members/{members}', 'MemberController@show');

Route::get('/members', 'MemberController@showMembers');

Route::get('/users/{users}', 'UserController@show');

Route::get('/users', 'UserController@showUsers');