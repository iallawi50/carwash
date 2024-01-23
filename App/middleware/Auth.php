<?php

namespace App\Middleware;

use App\Models\User;

class Auth
{

    public static function user()
    {
        if (self::check()) {
            $user = new User;
            $user->id =$_SESSION["user"]->id;
            $user->name =$_SESSION["user"]->name;
            $user->username = $_SESSION["user"]->username;
            $user->account_type = $_SESSION["user"]->account_type;
        } else {
            $user = new User;
            $user->id = null; 
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
