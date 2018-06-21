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

 Route::get('/home', 'HomeController@index')->name('home');

//it access all the function simultaneously
Route::resource('users', 'UserController');

//Accessing the add user form
Route::get('/users/create', 'UserController@createview');

//for inserting users in the db tbl users with an alias 'user.add'
Route::post('/users/create', 'UserController@create')->name('user.add');

//Accessing the show user form based on its id
Route::get('users/show/{id}', 'UserController@show');

// //Restricting access to pages unless logged in
// Route::get('/users', function () {
  
// })->middleware('auth');

Route::get('/logoutform', function () {
    Auth::logout();
    return redirect('/login');
});

