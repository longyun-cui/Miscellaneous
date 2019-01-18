<?php

namespace App\Http\Controllers\Developing;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\Developing\IndexRepository;

class IndexController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new IndexRepository;
    }


    //
    public function view_root()
    {
        return $this->repo->root();
    }




}
