<?php

    // return view('welcome');

// main controller
Route::get('/', 'ContentsController@home');


// coffee

Route::get('/coffees/{coffee}', 'CoffeeController@show');

Route::get('/coffees', 'CoffeeController@showCoffees');


// members

Route::get('/members/{members}', 'MemberController@show');

Route::get('/members', 'MemberController@showMembers');


// users

Route::get('/users/{users}', 'UserController@show');

Route::get('/users', 'UserController@showUsers');


// posts

Route::get('/posts/{post}', 'PostController@show');

Route::get('/posts', 'PostController@showPosts');