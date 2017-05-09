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
    return view('welcome',['name'=>'nuleel']);
});

//article

Route::get('/article', 'ArticlesController@index');

Route::get('/article/create', 'ArticlesController@create');

Route::get('/article/{article}', 'ArticlesController@show');

Route::get('/article/{id}/edit', 'ArticlesController@edit');

Route::post('/article/{id}/edit', 'ArticlesController@update');

Route::get('/article/{id}/delete', 'ArticlesController@delete');

//message

Route::get('/article/{article_id}/send-message', 'MessageController@create');

Route::post('/article/{article_id}/send-message', 'MessageController@store');

Route::get('/admin/messages/{id}/accept', 'MessageController@accept');
//budget

Route::get('/budget', 'BudgetController@index');

Route::get('/budget/{id}/add-article', 'ArticlesController@create');

Route::post('/budget/{id}/add-article', 'ArticlesController@store');

Route::get('/budget/create', 'BudgetController@create');

Route::get('/budget/{id}/edit', 'BudgetController@edit');

Route::post('/budget/{id}/edit', 'BudgetController@update');

Route::post('/budget/create', 'BudgetController@store');

Route::get('/budget/{id}/delete', 'BudgetController@delete');

Route::get('/budget/{id}', 'BudgetController@show');

//admin

Route::get('/admin/add-user', 'AdminController@addUser');

Route::post('/admin/add-user', 'AdminController@saveUser');

Route::get('/admin/messages', 'AdminController@messages');

Route::get('/admin/messages/{id}', 'AdminController@showMessage');

Route::post('/admin/messages/{id}/sendAnswer', 'AdminController@sendAnswer');

Route::get('/admin/messages/{article}/history', 'AdminController@history');

Route::get('/office', 'AdminController@office');

//auth

Route::get('/login', 'UserController@login');

Route::post('/login', 'UserController@createSession');

Route::get('/logout', 'UserController@logout');


//departments

Route::get('/departments', 'DepartmentController@index');

Route::get('/departments/{id}/budgets', 'DepartmentController@budgets');


