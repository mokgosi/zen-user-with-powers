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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         * VaccineTypes Routes
         */
        Route::group(['prefix' => 'vaccine-types'], function() {
            Route::get('/', 'VaccineTypeController@index')->name('vaccine.type.index');
            Route::get('/create', 'VaccineTypeController@create')->name('vaccine.type.create');
            Route::post('/create', 'VaccineTypeController@store')->name('vaccine.type.store');
            Route::get('/{post}/show', 'VaccineTypeController@show')->name('vaccine.types.show');
            Route::get('/{post}/edit', 'VaccineTypeController@edit')->name('vaccine.types.edit');
            Route::patch('/{post}/update', 'VaccineTypeController@update')->name('vaccine.types.update');
            Route::delete('/{post}/delete', 'VaccineTypeController@destroy')->name('vaccine.types.destroy');
        });

        /**
         * Vaccine Routes
         */
        Route::group(['prefix' => 'vaccines'], function() {
            Route::get('/', 'VaccineController@index')->name('vaccines.index');
            Route::get('/create', 'VaccineController@create')->name('vaccines.create');
            Route::post('/create', 'VaccineController@store')->name('vaccines.store');
            Route::get('/{post}/show', 'VaccineController@show')->name('vaccines.show');
            Route::get('/{post}/edit', 'VaccineController@edit')->name('vaccines.edit');
            Route::patch('/{post}/update', 'VaccineController@update')->name('vaccines.update');
            Route::delete('/{post}/delete', 'VaccineController@destroy')->name('vaccines.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});