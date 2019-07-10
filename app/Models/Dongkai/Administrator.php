<?php

namespace App\Models\Dongkai;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    use Notifiable;

    protected $connection = 'dongkai';
    protected $table = "administrator";

    protected $fillable = [
        'name', 'email', 'password', 'active', 'nickname', 'true_name', 'portrait_img'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dateFormat = 'U';
}
