<?php

namespace App\Middleware;

use App\Models\User;

class Auth
{

    public static function user()
    {
        if (self::check()) {
            $user = new User;
            $user->setId($_SESSION["user"]->id);
            $user->setName($_SESSION["user"]->name);
            $user->setUsername($_SESSION["user"]->username);
        } else {
            $user = new User;
            $user->setId(null);
        }
        return $user;
    }

    public static function check()
    {


        if (isset($_SESSION['user']) && !is_null($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }


    public static function auth()
    {
        if (!self::check()) {
            return redirect_home();
        }
    }

    public static function guest()
    {
        if (self::check()) {
            return redirect_home();
        }
    }
}
