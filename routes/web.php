<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/employee', function () {
//     return view('employee');
// });
Route::get('/employee', 'App\Http\Controllers\EmployeeController@index')->name('employee');
Route::get('/employee/create', 'App\Http\Controllers\EmployeeController@create')->name('employee.create');
Route::get('/employee/edit/{employee}', 'App\Http\Controllers\EmployeeController@edit')->name('employee.edit');

Route::post('/employee/create', 'App\Http\Controllers\EmployeeController@store')->name('employee.ajouter');
Route::get('/employee/{employee}', 'App\Http\Controllers\EmployeeController@destroy')->name('employee.supprimer');
Route::put('/employee/{employee}', 'App\Http\Controllers\EmployeeController@update')->name('employee.update');





