<?php
namespace App\Repositories\Dongkai\Front;

use App\Models\Dongkai\RootModule;
use App\Models\Dongkai\RootMenu;
use App\Models\Dongkai\RootItem;
use App\Models\Dongkai\RootMessage;

use App\Repositories\Common\CommonRepository;

use Response, Auth, Validator, DB, Exception, Cache;
use QrCode;

class IndexRepository {

    private $model;
    private $repo;
    public function __construct()
    {
//        $this->model = new OrgOrganization;
    }


    // root
    public function root()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $loan_menus = RootMenu::with([
            'items' => function ($query) { $query->where(['active'=>1])->orderBy('updated_at', 'desc'); }
        ])->where(['active'=>1])->orderby('updated_at', 'desc')->get();
//        dd($loan_menus);
        $loan_items = RootItem::where(['active'=>1])->orderby('updated_at', 'desc')->get();
        foreach($loan_items as $item)
        {
            $item->custom = json_decode($item->custom);
        }

        $html = view('dongkai.frontend.entrance.root')->with([
                'loan_menus'=>$loan_menus,
                'loan_items'=>$loan_items,
            ])->__toString();
        return $html;
    }


    // contact
    public function contact()
    {
        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.entrance.contact')->with(['houses'=>$houses])->__toString();
        return $html;
    }




    // 【出租】
    public function view_rent_out_list()
    {
        $items = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->paginate(8);
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $rent_items = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->limit(6)->get();

        $html = view('frontend.entrance.list-for-rent-out')->with(['items'=>$items, 'rent_items'=>$rent_items])->__toString();
        return $html;
    }

    // 【二手批发】
    public function view_second_wholesale_list()
    {
        $items = RootItem::where(['category'=>12, 'active'=>1])->orderby('id', 'desc')->paginate(8);
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $rent_items = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->limit(6)->get();

        $html = view('frontend.entrance.list-for-second-wholesale')->with(['items'=>$items, 'rent_items'=>$rent_items])->__toString();
        return $html;
    }

    // 【回收】
    public function view_recycle_page()
    {
        $items = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.entrance.page-for-recycle')->with(['items'=>$items])->__toString();
        return $html;
    }

    // 【资讯】
    public function view_coverage_list()
    {
        $items = RootItem::where(['category'=>41, 'active'=>1])->orderby('id', 'desc')->paginate(8);
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $rent_items = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->limit(6)->get();

        $html = view('frontend.entrance.list-for-coverage')->with(['items'=>$items, 'rent_items'=>$rent_items])->__toString();
        return $html;
    }




    // item
    public function view_item($id = 0)
    {
        if($id != 0) $mine = RootItem::where(['id'=>$id])->orderby('id', 'desc')->first();
        else $mine = RootItem::orderby('id', 'desc')->first();

        $mine->timestamps = false;
        $mine->increment('visit_num');

        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);

        $rent_items = RootItem::where(['category'=>11, 'active'=>1])->where('id', '<>', $id)->orderby('id', 'desc')->limit(6)->get();
        foreach($rent_items as $item)
        {
            $item->custom = json_decode($item->custom);
        }

        $html = view('frontend.entrance.item')->with(['rent_items'=>$rent_items, 'item'=>$mine])->__toString();
        return $html;
    }




    // 留言
    public function message_contact($post_data)
    {
        $messages = [
            'name.required' => '请输入姓名',
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'name' => 'required',
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 1;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '提交成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '提交失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }


    // ITEM 留言
    public function message_grab_item($post_data)
    {
        $messages = [
            'name.required' => '请输入姓名',
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'name' => 'required',
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 11;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '提交成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '提交失败，请重试！';
            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }
    // 专车券
    public function message_grab_zc($post_data)
    {
        $messages = [
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 12;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '抢专车券成功成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '抢专车券成功失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }
    // 价格动态
    public function message_grab_jg($post_data)
    {
        $messages = [
            'mobile.required' => '请输入电话',
            'item_id.required' => '参数有误',
        ];
        $v = Validator::make($post_data, [
            'mobile' => 'required',
            'item_id' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 13;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '订阅成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '订阅失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }
    // 开盘提醒
    public function message_grab_kp($post_data)
    {
        $messages = [
            'name.required' => '请输入姓名',
            'mobile.required' => '请输入电话',
            'item_id.required' => '参数有误',
        ];
        $v = Validator::make($post_data, [
            'mobile' => 'required',
            'item_id' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 14;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '已关注！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '关注失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }





}