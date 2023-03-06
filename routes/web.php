<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () { 
    Route::get('/', 'HomeController@index')->name('wellcome');
    
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/register', 'Auth\RegisterController@show')->name('register.show');
        Route::post('/register', 'Auth\RegisterController@register')->name('register.perform');
        Route::get('/login', 'Auth\LoginController@show')->name('login.show');
        Route::post('/login', 'Auth\LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', 'Auth\LogoutController@perform')->name('logout.perform');
        
        Route::get('/userinfo', 'UserController@info')->name('user.info');
        Route::get('/event', 'HomeController@event')->name('event');
        Route::get('/event-history', 'EventController@eventHistory')->name('event.history');
        Route::get('/get-event-now', 'EventController@getNow')->name('event.now');
        Route::get('/get-event-old-now', 'EventController@getOldNow')->name('event.old-now');
        Route::post('/post-user-event', 'UserEventController@setCostNow')->name('userevent.cost.now');
        
        
        
        
        
        
        Route::post('/create-comment', 'CommentController@create')->name('comment.create');
        Route::resource('posts', PostController::class);

        Route::post('/like-post', 'LikeController@create')->name('like.create');



    });

    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/user/detail_post{id}', 'CommentController@getListCommentByIdPost')->name('user.detail.post');
        Route::get('/list', 'AdminController@list')->name('admin.list');
        Route::get('/user/detail{id}', 'UserController@detail')->name('user.detail');
        Route::get('/user/list_post{id}', 'UserController@getListPostByIdUser')->name('user.list.post');
    });
});
