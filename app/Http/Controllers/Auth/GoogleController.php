<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

class GoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $socialite_user = Socialite::driver('google')->user();
        $google_user_id = $socialite_user->getId(); //取google id
        $googleName = $socialite_user->getName();   //取google name 
        $googleEmail = $socialite_user->getEmail(); //取google email
        $avatar = $socialite_user->getAvatar();     //取google photo

        $user = User::where('google_id',$google_user_id)->first(); //找第一筆

        // 當id不存在則新增用戶資料
        if(!$user){
            $user = User::create([
                'google_id' => $google_user_id,
                'email' => $googleEmail,
                'password' => $google_user_id,
                'name' => $googleName,
                'google_email' => $googleEmail,
                'avatar' => $avatar
            ]);
        }
        Auth::loginUsingId($user->id);
        return redirect('/home');
    }
}
