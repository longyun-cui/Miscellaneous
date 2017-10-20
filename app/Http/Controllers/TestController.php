<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
    }


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
        else if($type == "x")
        {

        }
    }




}
