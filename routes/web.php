<?php



Route::get('/', 'HomeController@index')->name('login');



Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('home');
Route::prefix('validate')->group(function () {
    Route::post('mobile_no', 'Auth\LoginController@validateMobile');
});
