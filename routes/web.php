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
//ホームページ
Route::get('/', function () {
    return view('C_home');
});

//ログイン・ログアウト機能
Auth::routes();

//ダッシュボード
Route::get('/home', 'HomeController@index')->name('home');

//C_掲示板ホーム
Route::get('/C', 'C_PostsController@index')->name('C_top');

//C_投稿作成のルーティング
Route::resource('C_posts', 'C_PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);

//C_コメント追加
Route::resource('C_comments', 'C_CommentsController', ['only' => ['store']]);

//C_ユーザー一覧
Route::get('C_index', 'UserController@index')->name('user_index');

//------------


//bbs機能

//掲示板ホーム
Route::get('/bbs', 'PostsController@index')->name('top');

//投稿編集・削除機能
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);

//コメント追加
Route::resource('comments', 'CommentsController', ['only' => ['store']]);

//投稿作成のルーティング
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);


