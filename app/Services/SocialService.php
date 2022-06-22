<?php

namespace App\Services;

use App\Models\User;
use App\Services\Contract\Social;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialService implements Social
{
     public function loginOrRegisterViaSocial(SocialUser $socailUser)
     {
        $user = User::where('email', $socailUser->getEmail())->first;
        if($user){
            $user->name = $socailUser->getName();
            $user->avatar = $socailUser->getAvatar();
            if($user->save()){
                return route('account');
            }
        }
        throw new ModelNotFoundException('Model not found');
     }
}
