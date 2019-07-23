<?php


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth' ], function (){
    Route::get('users/{user}', function (App\User $user){
        return $user;
    });
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){
    Route::get('/', 'HomeController@dashboard')->name('dashboard');
});

Route::get('/dashboard', 'HomeController@dashboard')->name('home');

Route::prefix('validate')->group(function () {
    Route::post('mobile_no', 'Auth\LoginController@validateMobile');
});


Route::get('/', 'HomeController@index')->name('home');

Route::prefix('roles')->group(function () {
    Route::get('/', 'HomeController@roles')->name('roles');
});


Route::prefix('ajax')->group(function () {
    Route::prefix('roles')->group(function () {
        Route::get('/data', 'RoleController@ajaxdata');
    });
    Route::get('/', 'HomeController@roles')->name('roles');
});

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth' ], function (){

    Route::get('users/{user}', function (App\User $user){
        return $user;
    });
});



Route::get('/dashboard', 'HomeController@dashboard')->name('home');

Route::prefix('validate')->group(function () {
    Route::post('mobile_no', 'Auth\LoginController@validateMobile');
});


Route::get('/', 'HomeController@index')->name('home');

Route::prefix('roles')->group(function () {
    Route::get('/', 'HomeController@roles')->name('roles');
});


Route::prefix('ajax')->group(function () {
    Route::prefix('roles')->group(function () {
        Route::get('/data', 'RoleController@ajaxdata');
    });
    Route::get('/', 'HomeController@roles')->name('roles');
});



Auth::routes();

Route::prefix('validate')->group(function () {
    Route::post('mobile_no', 'Auth\LoginController@validateMobile');
});



Route::prefix('roles')->group(function () {
    Route::get('/', 'HomeController@roles')->name('roles');
});


Route::prefix('ajax')->group(function () {
    Route::prefix('roles')->group(function () {
        Route::get('/data', 'RoleController@ajaxdata');
    });
    Route::get('/', 'HomeController@roles')->name('roles');
});
