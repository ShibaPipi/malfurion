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

//Route::get('think', function () {
//    return 'hello,ThinkPHP5!';
//});
// 路由配置优先级高于默认的 "模块 -> 控制器 -> 方法" 的路由访问方式
//Route::get('index/index/hello', 'index/index');
//Route::post('index/index/hello', 'index/index');
//Route::any('index/index/hello', 'index/index');
//Route::rule('hello/:name', 'index/index/hello', 'GET|POST', ['https' => true]);

Route::get('api/v1/banner/:id', 'api/v1.Banner/getBanner');

return [

];
