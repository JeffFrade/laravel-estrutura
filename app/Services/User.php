<?php

namespace App\Services;

use App\Repositories\Models\User as MUser;
use App\Repositories\UserRepository;

class User
{
    private $mUser;
    private $userRepository;

    public function __construct()
    {
        $this->mUser = new MUser();
        $this->userRepository = new UserRepository();
    }
}
