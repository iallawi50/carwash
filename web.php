<?php

require "./__init.php";

use App\Core\Route;
use App\Core\Request;
use App\Controllers\AuthController;
use App\Controllers\HomeController;

Route::make()
->get("", "home")
// Authentication
->get("register", [AuthController::class, "register"], "guest")
->post("register", [AuthController::class, "store"], "guest")
->get("login", [AuthController::class, "login"], "guest")
->post("login", [AuthController::class, "authentication"], "guest")
->post("logout", [AuthController::class, "logout"], "auth")

->resolve(Request::uri(), Request::method());
