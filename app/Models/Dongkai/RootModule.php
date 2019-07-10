<?php
namespace App\Models\Dongkai;
use Illuminate\Database\Eloquent\Model;

class RootModule extends Model
{
    //
    protected $connection = 'dongkai';
    protected $table = "root_module";
    protected $fillable = [
        'sort', 'type', 'admin_id', 'menu_id', 'active',
        'name', 'title', 'subtitle', 'description', 'content', 'custom', 'link_url', 'cover_pic',
        'order', 'style', 'column', 'img_multiple',
        'visit_num', 'share_num'
    ];
    protected $dateFormat = 'U';

//    protected $dates = ['created_at','updated_at'];
//    public function getDates()
//    {
//        return array(); // 原形返回；
//        return array('created_at','updated_at');
//    }


    function admin()
    {
        return $this->belongsTo('App\Models\Dongkai\Administrator','admin_id','id');
    }

    // 一对多 关联的目录
    function menus()
    {
        return $this->hasMany('App\Models\Dongkai\RootMenu','module_id','id');
    }

    // 多对多 关联的目录
    function pivot_menus()
    {
        return $this->belongsToMany('App\Models\Dongkai\RootMenu','root_pivot_module_menu','module_id','menu_id');
    }





}