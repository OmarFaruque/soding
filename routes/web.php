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

Route::get('create-task', 'tasksController@create');
Route::post('create-task', 'tasksController@insert');
Route::get('tasks-list', 'tasksController@listtasks');
Route::get('edit-task/{id}', 'tasksController@edittasks');
Route::post('update-task/{id}', 'tasksController@updatetask');
Route::get('delete-task/{id}', 'tasksController@deletetask');


