<?php

    $controller = "IndexController";

    //
    Route::match(['get','post'], '/index',$controller.'@index');


    /*
     * 前台
     */
    Route::group(['namespace' => 'Front'], function () {

        $controller = "IndexController";

        Route::get('/', $controller.'@view_root');
        Route::get('/contact', $controller.'@view_contact');

        Route::get('item/{id?}', $controller.'@view_item');

        Route::get('rent-out/list', $controller.'@view_rent_out_list');
        Route::get('second-wholesale/list', $controller.'@view_second_wholesale_list');

        Route::get('recycle/page', $controller.'@view_recycle_page');

        Route::get('coverage/list', $controller.'@view_coverage_list');


        Route::post('message/contact', $controller.'@message_contact');
        Route::post('message/grab/item', $controller.'@message_grab_item');


        Route::group(['prefix' => 'test'], function () {

            $controller = "TestController";

            Route::get('/index', $controller.'@view_index');

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
        Route::group(['middleware' => 'dongkai.admin'], function () {

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





