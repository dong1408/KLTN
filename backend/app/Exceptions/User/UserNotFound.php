<?php

namespace App\Exceptions\User;

use Exception;
use Throwable;

class UserNotFound extends Exception
{
    public function report()
    {
    }

    public function render($request)
    {
        return response('user not found', 300)->header('Content-Type', 'application/json');
    }
}
