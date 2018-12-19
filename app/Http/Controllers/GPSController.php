<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GPSController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
    }


    // 导航
    public function navigation()
    {
        return view('GPS.entrance.navigation');
    }

    // 工具
    public function tools()
    {
        return view('GPS.entrance.tools');
    }

    // 模板
    public function templates()
    {
        return view('GPS.entrance.templates');
    }

    // 测试
    public function testing()
    {
        return view('GPS.entrance.testing');
    }


    //
    public function tool()
    {
        $type = request()->get("type");
        if($type == "type")
        {
            return response_success([],"type");
        }
        else if($type == "password_encode")
        {
            $password = request("password");
            $password_encode = password_encode($password);
            return response_success(['password_encode'=>$password_encode]);
        }
        else if($type == "xx")
        {

        }
    }



}
