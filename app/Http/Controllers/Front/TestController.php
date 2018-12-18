<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\Front\TestRepository;

class TestController extends Controller
{

    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new TestRepository;
    }




    // 返回【主页】视图
    public function view_index()
    {
        return $this->repo->view_index();
    }



}
