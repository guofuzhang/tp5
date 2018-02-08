<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
Route::get('index/index', 'index/index/index');
Route::any('message', 'index/message/list');
Route::get('message/add', 'index/message/add');
Route::post('message/add', 'index/message/create');
Route::get('message/:id/edit', 'index/message/edit');
Route::post('message/:id/edit', 'index/message/update');
Route::get('message/:id/delete', 'index/message/delete');
Route::get('member/:id', 'index/member/profile', [], ['id' => '\d+']);//指定参数
Route::get('member/[:id]', 'index/member/profile', [], ['id' => '\d+']);//可选参数


