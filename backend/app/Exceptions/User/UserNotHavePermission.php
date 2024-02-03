<?php

namespace App\Exceptions\User;

use Exception;
use Throwable;

class UserNotHavePermission extends Exception
{
    public function report()
    {
    }

    public function render($request)
    {
        return response('User not have permission', 401)->header('Content-Type', 'application/json');
    }
}
