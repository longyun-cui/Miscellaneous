<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Models\Dongkai\Administrator;
use Auth, Response;

class DongkaiAdminMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if(!Auth::guard('dongkai_admin')->check()) // 未登录
        {
            return redirect('/admin/login');
            $return["status"] = false;
            $return["log"] = "admin-no-login";
            $return["msg"] = "请先登录";
            return Response::json($return);
        }
        else
        {
            $admin = Auth::guard('dongkai_admin')->user();
        }
        return $next($request);

    }
}
