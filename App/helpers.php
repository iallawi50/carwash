<?php

use App\App;
use App\Middleware\Auth;
use PSpell\Config;

function home()
{
    return $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . App::$entries["config"]["app"]["url"];
}

function asset($path = null)
{

    return $path ? home() . "/public/" . $path : home() . "/public/";
}

function view($VIEW_NAME, $data = null)
{
    if ($data) {
        extract($data);
    }
    component("header");
    require "./views/$VIEW_NAME.view.php";
    component("footer");
}

function component($COMPONENT_NAME, $data = null)
{
    if ($data) {
        extract($data);
    }
    require "./views/components/$COMPONENT_NAME.component.php";
}

function redirect($to)
{
    header("Location: " . home() . "/" . $to);
}

function redirect_home()
{
    redirect("");
}

function back()
{
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}


function notfound()
{
    redirect(home() . "/404.php");
}


function notauthorized($msg = "غير مصرح")
{
    $_SESSION["not-authorized"] = $msg;
    return redirect_home();
}


function user(){
    return Auth::user();
}