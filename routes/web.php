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
    return view('index');
});
Route::get('/info', [
    'uses' => 'todoControllar@info'
]);
Route::get('/todo', [
    'uses' => 'todoControllar@index'
]);
Route::get('/todo/delete/{id}', [
    'uses' => 'todoControllar@delete', 'as' => 'todo.delete'
]);
Route::get('/todo/update/{id}', [
    'uses' => 'todoControllar@update', 'as' => 'todo.update'
]);
Route::post('/create/todo', [
    'uses' => 'todoControllar@store'
]);
Route::post('/todo/save/{id}', [
    'uses' => 'todoControllar@save', 'as' => 'todo.save'
]);
