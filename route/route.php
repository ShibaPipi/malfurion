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

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

\think\facade\Route::get('index', 'index/index/index');
// 路由配置优先级高于默认的 "模块 -> 控制器 -> 方法" 的路由访问方式
//Route::get('index/index/hello', 'index/index');
//Route::post('index/index/hello', 'index/index');
//Route::any('index/index/hello', 'index/index');
//Route::rule('hello/:name', 'index/index/hello', 'GET|POST', ['https' => true]);

//Sample
Route::get('api/:version/sample/:key', 'api/:version.Sample/getSample');
Route::post('api/:version/sample/test3', 'api/:version.Sample/test3');

//Miss 404
//Miss 路由开启后，默认的普通模式也将无法访问
//Route::miss('api/v1.Miss/miss');

//Banner
Route::get('api/:version/banner/:id', 'api/:version.Banner/getBanner');

//Theme
// 如果要使用分组路由，建议使用闭包的方式，数组的方式不允许有同名的key
//Route::group('api/:version/theme',[
//    '' => ['api/:version.Theme/getThemes'],
//    ':t_id/product/:p_id' => ['api/:version.Theme/addThemeProduct'],
//    ':t_id/product/:p_id' => ['api/:version.Theme/addThemeProduct']
//]);

Route::group('api/:version/theme', function () {
    Route::get('', 'api/:version.Theme/getSimpleList');
    Route::get('/:id', 'api/:version.Theme/getComplexOne');
    Route::post(':t_id/product/:p_id', 'api/:version.Theme/addThemeProduct');
    Route::delete(':t_id/product/:p_id', 'api/:version.Theme/deleteThemeProduct');
});

//Route::get('api/:version/theme', 'api/:version.Theme/getThemes');
//Route::post('api/:version/theme/:t_id/product/:p_id', 'api/:version.Theme/addThemeProduct');
//Route::delete('api/:version/theme/:t_id/product/:p_id', 'api/:version.Theme/deleteThemeProduct');

//Product
Route::post('api/:version/product', 'api/:version.Product/createOne');
Route::delete('api/:version/product/:id', 'api/:version.Product/deleteOne');
Route::get('api/:version/product/by_category/paginate', 'api/:version.Product/getByCategory');
Route::get('api/:version/product/by_category', 'api/:version.Product/getAllInCategory');
Route::get('api/:version/product/:id', 'api/:version.Product/getOne', [], ['id' => '\d+']);
Route::get('api/:version/product/recent', 'api/:version.Product/getRecent');

//Category
Route::get('api/:version/category', 'api/:version.Category/getCategories');
// 正则匹配区别id和all，注意d后面的+号，没有+号将只能匹配个位数
//Route::get('api/:version/category/:id', 'api/:version.Category/getCategory',[], ['id'=>'\d+']);
//Route::get('api/:version/category/:id/products', 'api/:version.Category/getCategory',[], ['id'=>'\d+']);
Route::get('api/:version/category/all', 'api/:version.Category/getAllCategories');

//Token
Route::post('api/:version/token/user', 'api/:version.Token/getToken');

Route::post('api/:version/token/app', 'api/:version.Token/getAppToken');
Route::post('api/:version/token/verify', 'api/:version.Token/verifyToken');

//Address
Route::post('api/:version/address', 'api/:version.Address/createOrUpdate');
Route::get('api/:version/address', 'api/:version.Address/getUserAddress');

//Order
Route::post('api/:version/order', 'api/:version.Order/placeOrder');
Route::get('api/:version/order/:id', 'api/:version.Order/getDetail', [], ['id' => '\d+']);
Route::put('api/:version/order/delivery', 'api/:version.Order/delivery');

//不想把所有查询都写在一起，所以增加by_user，很好的REST与RESTFul的区别
Route::get('api/:version/order/by_user', 'api/:version.Order/getSummaryByUser');
Route::get('api/:version/order/paginate', 'api/:version.Order/getSummary');

//Pay
Route::post('api/:version/pay/pre_order', 'api/:version.Pay/getPreOrder');
Route::post('api/:version/pay/notify', 'api/:version.Pay/receiveNotify');
Route::post('api/:version/pay/re_notify', 'api/:version.Pay/redirectNotify');
Route::post('api/:version/pay/concurrency', 'api/:version.Pay/notifyConcurrency');

//Message
Route::post('api/:version/message/delivery', 'api/:version.Message/sendDeliveryMsg');

//return [
//        ':version/banner/[:location]' => 'api/:version.Banner/getBanner'
//];

//Route::miss(function () {
//    return [
//        'msg' => 'your required resource are not found',
//        'error_code' => 10001
//    ];
//});
