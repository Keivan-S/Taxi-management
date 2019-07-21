<?php



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
