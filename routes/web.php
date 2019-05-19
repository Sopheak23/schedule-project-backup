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

Route::resource('faculties', 'FacultyController');
Route::resource('departments','DepartmentController');
Route::get('departments/create/{id}','DepartmentController@create');
Route::resource('buildings','BuildingController');
Route::resource('rooms','RoomController');
Route::get('rooms/create/{id}','RoomController@create');
Route::resource('subjects','SubjectController');
Route::resource('professors','ProfessorController');