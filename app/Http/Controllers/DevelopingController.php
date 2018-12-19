<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\DevelopingRepository;

class DevelopingController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new DevelopingRepository;
    }


    //
    public function view_root()
    {
        return $this->repo->root();
    }




}
