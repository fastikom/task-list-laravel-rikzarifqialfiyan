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

Route::get('tasks/create', 'TaskContloller@create')->name('tasks.create');
Route::post('tasks/create', 'TaskContloller@store');
Route::get('tasks/{id}/edit', 'TaskContloller@edit')->name('tasks.edit');
Route::post('tasks/{id}/edit', 'TaskContloller@update');
Route::post('tasks/{id}/delete', 'TaskContloller@delete')->name('tasks.delete');