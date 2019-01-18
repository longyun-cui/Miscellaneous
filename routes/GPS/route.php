<?php

    $controller = "IndexController";

    //
    Route::match(['get','post'], '/navigation',$controller.'@navigation');
    Route::match(['get','post'], '/test-list',$controller.'@test_list');
    Route::match(['get','post'], '/tool-list',$controller.'@tool_list');
    Route::match(['get','post'], '/template-list',$controller.'@template_list');

    Route::match(['get','post'], '/tool',$controller.'@tool');





