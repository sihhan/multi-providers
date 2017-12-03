<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //

    // 批量賦值(設定哪些欄位可以使用 fillable)
    protected $fillable = [
        'provider_id','provider'
    ];

    // 與User建立關聯
    function user(){
        return $this->belongTo(User::class);
    }
}
