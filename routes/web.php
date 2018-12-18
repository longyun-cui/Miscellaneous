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
//    return view('welcome');
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});


Route::get('/tools', function () {
    return view('tools');
});


Route::match(['get','post'], '/test/tool','TestController@tool');


Route::match(['get','post'], '/email/send','MailController@send');
//Route::match(['get','post'], '/email/test','MailController@test');



/*
 * Common 通用功能
 */
Route::group(['prefix' => 'common'], function () {

    $controller = "CommonController";

    // 验证码
    Route::match(['get','post'], 'change_captcha', $controller.'@change_captcha');

    //
    Route::get('dataTableI18n', function () {
        return trans('pagination.i18n');
    });
});



/*
 * 后台
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    // 注册登录
    Route::group(['namespace' => 'Auth'], function () {

        $controller = "AuthController";

        Route::match(['get','post'], 'login', $controller.'@login');
        Route::match(['get','post'], 'logout', $controller.'@logout');

    });


    // 后台管理，需要登录
    Route::group(['middleware' => 'admin'], function () {

        $controller = "AdminController";

        Route::get('/404', $controller.'@view_404');

        Route::get('/', $controller.'@index');

        // 管理员模块
        Route::group(['prefix' => 'administrator'], function () {
            $controller = "AdministratorController";

            Route::get('/', $controller.'@index');
            Route::get('index', $controller.'@index');
            Route::match(['get','post'], 'edit', $controller.'@editAction');

            Route::match(['get','post'], 'password/reset', $controller.'@password_reset');

            Route::match(['get','post'], 'list', $controller.'@viewList');
        });

        // 样式模块
        Route::group(['prefix' => 'module'], function () {
            $controller = "ModuleController";

            Route::get('/', $controller.'@index');
            Route::get('index', $controller.'@index');
            Route::match(['get','post'], 'list', $controller.'@viewList');
            Route::get('create', $controller.'@createAction');
            Route::match(['get','post'], 'edit', $controller.'@editAction');
            Route::match(['get','post'], 'sort', $controller.'@sortAction');
            Route::post('delete', $controller.'@deleteAction');
            Route::post('enable', $controller.'@enableAction');
            Route::post('disable', $controller.'@disableAction');

            Route::post('delete_multiple_option', $controller.'@deleteMultipleOption');
        });

        // 目录模块
        Route::group(['prefix' => 'menu'], function () {
            $controller = "MenuController";

            Route::get('/', $controller.'@index');
            Route::get('index', $controller.'@index');
            Route::match(['get','post'], 'list', $controller.'@viewList');
            Route::match(['get','post'], 'items', $controller.'@viewItemsList');
            Route::get('create', $controller.'@createAction');
            Route::match(['get','post'], 'edit', $controller.'@editAction');
            Route::match(['get','post'], 'sort', $controller.'@sortAction');
            Route::post('delete', $controller.'@deleteAction');
            Route::post('enable', $controller.'@enableAction');
            Route::post('disable', $controller.'@disableAction');
        });

        // 内容模块
        Route::group(['prefix' => 'item'], function () {
            $controller = "ItemController";

            Route::get('/', $controller.'@index');
            Route::get('index', $controller.'@index');
            Route::match(['get','post'], 'list', $controller.'@viewList');
            Route::get('create', $controller.'@createAction');
            Route::match(['get','post'], 'edit', $controller.'@editAction');
            Route::post('delete', $controller.'@deleteAction');
            Route::post('enable', $controller.'@enableAction');
            Route::post('disable', $controller.'@disableAction');

            Route::get('select2_menus', $controller.'@select2_menus');
        });

        //留言模块
        Route::group(['prefix' => 'message'], function () {
            $controller = "MessageController";

            Route::get('/', $controller.'@index');
            Route::get('index', $controller.'@index');
            Route::match(['get','post'], 'list', $controller.'@viewList');
            Route::get('create', $controller.'@createAction');
            Route::match(['get','post'], 'edit', $controller.'@editAction');
            Route::post('delete', $controller.'@deleteAction');
            Route::post('enable', $controller.'@enableAction');
            Route::post('disable', $controller.'@disableAction');

            Route::get('select2_menus', $controller.'@select2_menus');
        });

    });


});

