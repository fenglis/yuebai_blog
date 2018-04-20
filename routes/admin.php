<?php

//后台路由

Route::group(['prefix'=>'admin'], function (){

    //登录模块
    Route::get('/login', 'Admin\LoginController@index');
    Route::post('/login', 'Admin\LoginController@login');  //验证码


});