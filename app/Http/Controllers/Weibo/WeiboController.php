<?php

namespace App\Http\Controllers\Weibo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class WeiboController extends Controller
{
    public function weiboLogin(Request $request)
    {
        return Socialite::with('weibo')->redirect();
    }

    public function weiboCallback(Request $request)
    {
        $user=Socialite::with('weibo')->user();

        var_dump($user->getId());

        var_dump($user->getNickname());

        var_dump($user->getName());

        var_dump($user->getEmail());

        var_dump($user->getAvatar());
    }

    public function weiboCancel(Request $request)
    {

    }
}

