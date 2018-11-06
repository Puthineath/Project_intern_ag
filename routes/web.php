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

Route::get('/signin', function () {
    return view('login page.login');
})->name('signin');

Route::get('/signup', function () {
    return view('login page.signup');
})->name('signup');

Route::get('/404', function () {
    return view('404page');
})->name('404');


// Route::get('master', function () {
//     return view('master');
// });
Route::get('/', function () {
    return view('layouts.home_page');
})->name('home_page');

//farmer view and admin view 
Route::group(['middleware' => 'admin'], function () {
Route::resource('crops', 'CropController');

Route::resource('employee','EmployeeController');

Route::resource('inventory', 'InventoryController');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/crops/search', 'CropController@search')->name('search');

Route::post('/employee/search', 'EmployeeController@search')->name('searchEmployee');
Route::post('/inventory/search', 'InventoryController@search')->name('searchInventory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user view 
Route::group(['middleware' => 'admin'], function () {
    Route::get('user/show','UserController@index')->name('user.index');
Route::post('user/update/{id}','UserController@update')->name('user.update');
Route::DELETE('user/destroy/{id}','UserController@destroy')->name('user.destroy');
});


//user profile

Route::group(['middleware' => 'user'], function () {
	Route::get('/user/profile',function (){
	return view('admin.profile');
	})->name('userPro');

	Route::post('profile', 'UserController@update_avatar');

});