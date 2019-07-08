<?php

$controller = "IndexController";


Route::get('/', function () {
    dd('testing');
});


Route::get('/++', function () {
    $x=15;
    echo "y=15 x++=".$x++;
    echo "<br>";
    $y=20;
    echo "y=20 ++y=".++$y;
//        return view('test');
});



Route::match(['get','post'], '/seo/youbangyun', "{$controller}@seo_youbangyun");
Route::match(['get','post'], '/seo/youbangyun/get', "{$controller}@seo_youbangyun_get");




Route::get('/url', function () {

    echo "url()->full() ---- ".url()->full()."<br>";
    echo "url()->current() ---- ".url()->current()."<br>";
    echo "url()->previous() ---- ".url()->previous()."<br><br>";

    echo "request()->url() ---- ".request()->url()."<br>";
    echo "request()->getRequestUri() ---- ".request()->getRequestUri()."<br><br>";

    echo '$_SERVER["PHP_SELF"] ---- '.$_SERVER['PHP_SELF']."<br>";
    echo '$_SERVER["HTTP_HOST"] ---- '.$_SERVER['HTTP_HOST']."<br>";
    echo '$_SERVER["SERVER_NAME"] ---- '.$_SERVER['SERVER_NAME']."<br>";
    echo '$_SERVER["SERVER_PORT"] ---- '.$_SERVER['SERVER_PORT']."<br>";
    echo '$_SERVER["REQUEST_URI"] ---- '.$_SERVER['REQUEST_URI']."<br>";
    echo '$_SERVER["QUERY_STRING"] ---- '.$_SERVER["QUERY_STRING"]."<br><br>";
//        echo '$_SERVER["HTTP_REFERER"] ---- '.$_SERVER['HTTP_REFERER']."<br>";

    echo request()->route()->getName()."<br>";
    echo request()->route()->getActionName()."<br><br>";

    echo 'public_path(uploads) ---- '.public_path('uploads')."<br>";
    echo 'base_path(uploads) ---- '.base_path('uploads')."<br>";
    echo 'app_path(uploads) ---- '.app_path('uploads')."<br>";
    echo 'resource_path(uploads) ---- '.resource_path('uploads')."<br>";
    echo 'storage_path(uploads) ---- '.storage_path('uploads')."<br>";

});




Route::get('/json', function () {

    $array = ["id"=>["xx"=>1,"yy"=>"abc"]];

    echo json_encode($array);

});




Route::get('/headers', function () {

    $headers = apache_request_headers();
    $headers = getallheaders();
    dd($headers);
    $header = request()->header();
    dd($header);

});


// Route::get('/send/email', $controller.'@send_email');

// Route::get('/send_sms', "{$controller}@send_sms");

Route::get('/image', "{$controller}@image");

Route::get('/eloquent', "{$controller}@eloquent");

Route::get('/eloquent', "{$controller}@eloquent");



