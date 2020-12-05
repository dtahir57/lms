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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    /**
     * Starting Routes For Admin\CourseController
     */
    Route::get('courses', 'Admin\CourseController@index')->name('admin.course.index');
    Route::get('course/create', 'Admin\CourseController@create')->name('admin.course.create');
    /**
     * Ending Routes For Admin\CourseController
     */
    Route::get('user/logout', 'HomeController@logout')->name('user.logout');
});
