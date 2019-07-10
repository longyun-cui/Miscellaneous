<?php
namespace App\Models\Dongkai;
use Illuminate\Database\Eloquent\Model;

class RootMenu extends Model
{
    //
    protected $connection = 'dongkai';
    protected $table = "root_menu";
    protected $fillable = [
        'sort', 'type', 'admin_id', 'active',
        'name', 'title', 'subtitle', 'description', 'content', 'custom', 'link_url', 'cover_pic',
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

    // 一对多 关联的内容
    function items()
    {
        return $this->hasMany('App\Models\Dongkai\RootItem','menu_id','id');
    }

    // 多对多 关联的内容
    function pivot_items()
    {
        return $this->belongsToMany('App\Models\Dongkai\RootItem','root_pivot_menu_item','menu_id','item_id');
    }




}
