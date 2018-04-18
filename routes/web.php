<?php

    // return view('welcome');
/*Route::get('/', 'ContentsController@home');

Route::get('/coffees/{coffee}', 'CoffeeController@show');

Route::get('/coffees', 'CoffeeController@showCoffees');

Route::get('/members/{members}', 'MemberController@show');

Route::get('/members', 'MemberController@showMembers');

Route::get('/users/{users}', 'UserController@show');

Route::get('/users', 'UserController@showUsers');*/

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show')