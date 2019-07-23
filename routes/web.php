<?php


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');


Route::get('/dashboard', 'HomeController@dashboard')->name('home');

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


// Api Routs
Route::group(['prefix' => 'api/v1', 'middleware' => 'auth' ], function (){
    Route::get('users/{user}', function (App\User $user){
        return $user;
    });
});



