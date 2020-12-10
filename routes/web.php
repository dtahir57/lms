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

Route::get('faq', 'Frontend\FrontendController@faq')->name('faq');
Route::get('training', 'Frontend\FrontendController@training')->name('training');
Route::get('checkout', 'Frontend\FrontendController@checkout')->name('checkout');
Route::get('register', function () {
    return redirect()->route('checkout');
});

Route::post('user/checkout', 'Frontend\FrontendController@user_checkout')->name('user.checkout');

Route::group(['middleware' => 'auth', 'role:Super_User', 'prefix' => 'admin'], function () {
    /**
     * Starting Routes For Admin\CourseController
     */
    Route::get('courses', 'Admin\CourseController@index')->name('admin.course.index');
    Route::get('course/create', 'Admin\CourseController@create')->name('admin.course.create');
    Route::post('course', 'Admin\CourseController@store')->name('admin.course.store');
    Route::get('course/{id}/edit', 'Admin\CourseController@edit')->name('admin.course.edit');
    Route::patch('course/{id}', 'Admin\CourseController@update')->name('admin.course.update');
    Route::get('course/destroy/{id}', 'Admin\CourseController@destroy')->name('admin.course.destroy');
    /**
     * Ending Routes For Admin\CourseController
     */
    /**
     * Starting Routes For Admin\LessonController
     */
    Route::group(['prefix' => 'course/{course_id}'], function () {
        Route::get('lessons', 'Admin\LessonController@index')->name('admin.course.lesson.index');
        Route::get('lesson/create', 'Admin\LessonController@create')->name('admin.course.lesson.create');
        Route::post('lesson', 'Admin\LessonController@store')->name('admin.course.lesson.store');
        Route::get('lesson/show/{id}', 'Admin\LessonController@show')->name('admin.course.lesson.show');
        Route::get('lesson/{id}/edit', 'Admin\LessonController@edit')->name('admin.course.lesson.edit');
        Route::patch('lesson/{id}', 'Admin\LessonController@update')->name('admin.course.lesson.update');
        Route::get('lesson/destroy/{id}', 'Admin\LessonController@destroy')->name('admin.course.lesson.destroy');
    });
    /**
     * Ending Routes For Admin\LessonController
     */
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('user/profile', 'UserController@user_profile')->name('user_profile');
    Route::get('user/logout', 'HomeController@logout')->name('user.logout');
});