<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //

    // 與User建立關聯
    function user(){
        return $this->belongTo(User::class);
    }
}
