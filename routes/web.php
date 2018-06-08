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

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::get('/new', function (){
   return view('new');
});

Route::post('/create/todo',[
    'uses' => 'TodosController@Store'
]);

Route::get('/todo/delete/{id}',[
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todo/edit/{id}',[
    'uses' => 'TodosController@edit',
    'as' => 'todo.edit'
]);

Route::post('/todo/save/{id}',[
    'uses' => 'TodosController@save',
    'as' => 'todos.save'
]);
