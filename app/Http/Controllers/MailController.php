<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\MailRepository;
use Mail;
use Exception;

class MailController extends Controller
{
    //
    private $repo;
    public function __construct()
    {
        $this->repo = new MailRepository;
    }


    public function send()
    {
        $post_data = request()->all();
        $sort = $post_data["sort"];
        if($sort == "admin_activation")
        {
            $flag = $this->repo->send_admin_activation_email($post_data);
            if(count($flag) >= 1)
            {
                $flag = $this->repo->send_admin_activation_email($post_data);
                if(count($flag) >= 1)
                {
                    $flag = $this->repo->send_admin_activation_email($post_data);
                    if(count($flag) >= 1) return response_fail();
                }
            }
        }
        else if($sort == "activity_apply")
        {
            $flag = $this->repo->send_activity_apply_email($post_data);
            if(count($flag) >= 1)
            {
                $flag = $this->repo->send_activity_apply_email($post_data);
                if(count($flag) >= 1)
                {
                    $flag = $this->repo->send_activity_apply_email($post_data);
                    if(count($flag) >= 1) return response_fail();
                }
            }
        }

        return response_success([],"发送成功");
    }

    public function test()
    {
        $post_data['sort'] = 'admin_activation';
        $post_data['type'] = 1;
        $post_data['admin_id'] = 1;
        $post_data['code'] = 1;
        $post_data['target'] = 'longyun-cui@163.com';

        $url = 'http://qingorg.cn:8088/email/send';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $response = curl_exec($ch);
        dd($response);
    }




}
