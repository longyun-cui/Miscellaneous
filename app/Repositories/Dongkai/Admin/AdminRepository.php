<?php
namespace App\Repositories\Dongkai\Admin;

use App\Models\Dongkai\RootModule;
use App\Models\Dongkai\RootMenu;
use App\Models\Dongkai\RootItem;
use App\Models\Dongkai\RootTemplate;

use App\Repositories\Common\CommonRepository;
use App\Repositories\RootCommonRepository;

use Response, Auth, Validator, DB, Exception, Cache;
use QrCode;

class AdminRepository {

    private $model;
    public function __construct()
    {
//        $this->model = new Root;
    }

    // 返回（后台）主页视图
    public function view_admin_index()
    {
        return view('dongkai.admin.index');
    }



}