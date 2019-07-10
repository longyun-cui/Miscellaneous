<?php

namespace App\Http\Controllers\Dongkai;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Image;

use App\Models\RootTesting;

class IndexController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
    }


    public function index()
    {
        dd('success');
    }



}
