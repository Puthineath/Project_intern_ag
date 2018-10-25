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
// Route::get('master', function () {
//     return view('master');
// });
Route::get('layouts/home_page', function () {
    return view('layouts.home_page');
})->name('home_page');
Route::resource('crops', 'CropController');

Route::resource('employee','EmployeeController');

Route::resource('inventory', 'InventoryController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/crops/search	', 'CropController@search')->name('search');

Route::post('/employee/search', 'EmployeeController@search')->name('searchEmployee');
Route::post('/inventory/search', 'InventoryController@search')->name('searchInventory');

