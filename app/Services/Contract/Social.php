<?php

namespace App\Services\Contract;

use Laravel\Socialite\Contracts;

interface Social
{
 public function loginOrRegisterViaSocial(User $socialUser):string;
}
