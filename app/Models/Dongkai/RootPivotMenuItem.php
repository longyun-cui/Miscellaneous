<?php
namespace App\Models\Outside\Dongkai;
use Illuminate\Database\Eloquent\Model;

class RootPivotMenuItem extends Model
{
    //
    protected $connection = 'dongkai';
    protected $table = "root_pivot_menu_item";
    protected $fillable = [
        'sort', 'type', 'admin_id', 'menu_id', 'item_id'
    ];
    protected $dateFormat = 'U';

//    protected $dates = ['created_at','updated_at'];
//    public function getDates()
//    {
//        return array(); // 原形返回；
//        return array('created_at','updated_at');
//    }


    function menu()
    {
        return $this->belongsTo('App\Models\Dongkai\RootMenu','menu_id','id');
    }

    function item()
    {
        return $this->belongsTo('App\Models\Dongkai\RootItem','item_id','id');
    }



}
