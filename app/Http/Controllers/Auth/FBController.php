<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

class FBController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $socialite_user = Socialite::driver('facebook')->user();
        $fb_user_id = $socialite_user->getId();
        $fb_name = $socialite_user->getName();
        $fb_email = $socialite_user->getEmail();
        $fb_avatar = $socialite_user->getAvatar();

        $user = User::where('facebook_id',$fb_user_id)->first();

        if(!$user){
            $user = User::create([
                'facebook_id' => $fb_user_id,
                'email' => $fb_email,
                'password' => $fb_user_id,
                'name' => $fb_name,
                'google_email' => $fb_email,
                'avatar' => $fb_avatar
            ]);
        }

        Auth::loginUsingId($user->id);
        return redirect('/home');
    }
}
