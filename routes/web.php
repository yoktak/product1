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

Route::group(['middleware' => ['auth']], function(){
    
    // コメント機能
    Route::get('/posts/{post}/comments', 'CommentController@index');
    Route::get('/posts/{post}/comments/create', 'CommentController@create');
    Route::post('/posts/{post}/comments', 'CommentController@store');
    
    // 投稿機能
    Route::get('/posts', 'PostController@index');
    Route::get('/posts/create','PostController@create');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{post}', 'PostController@show');
    
    
    // ユーザーページ編集機能
    Route::get('/user','UserController@index');
    Route::get('/user/edit_profile', 'UserController@edit_profile');
    Route::get('/user/edit_comic', 'UserController@edit_comic');
    Route::put('/user/edit_profile', 'UserController@update_profile');
    Route::post('/user/edit_comic', 'UserController@update_comic');
    // 他ユーザーページ参照
    Route::get('/user/{user}', 'UserController@show');
    
    
    //フォロー機能
    Route::get('/following_list', 'FollowController@following_list');
    Route::get('/followed_list', 'FollowController@followed_list');
    Route::post('/follow', 'FollowController@store');
    Route::put('/remove', 'FollowController@remove');
    
    
    
    //いいね機能
    Route::post('/like/{post}', 'LikeController@store_show');
    Route::put('/unlike/{post}', 'LikeController@remove_show');
    Route::post('/posts/like/{post}','LikeController@store_posts');
    Route::put('/posts/unlike/{post}','LikeController@remove_posts');
    
    Route::delete('/user','UserController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');