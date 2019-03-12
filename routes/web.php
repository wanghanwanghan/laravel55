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

Route::get('/', function () {
    return view('welcome');
});




// 引导用户到新浪微博的登录授权页面
Route::get('auth/weibo', 'Weibo\WeiboController@weiboLogin');
// 用户授权后新浪微博回调的页面
Route::get('auth/weibo/callback', 'Weibo\WeiboController@weiboCallback');
// 用户取消授权
Route::get('auth/weibo/cancel', 'Weibo\WeiboController@weiboCancel');











