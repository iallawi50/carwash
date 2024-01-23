<?php

require "./__init.php";

use App\Core\Route;
use App\Core\Request;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\ReservationController;
use App\Controllers\ServiceController;
use App\Controllers\WashController;
use App\Models\Service;

Route::make()
->get("", [HomeController::class, "index"])
// Authentication
->get("register", [AuthController::class, "register"], "guest")
->post("register", [AuthController::class, "store"], "guest")
->get("login", [AuthController::class, "login"], "guest")
->post("login", [AuthController::class, "authentication"], "guest")
->post("logout", [AuthController::class, "logout"], "auth")

// Dashboard
->get("dashboard", [WashController::class, "index"], "auth")
->get("dashboard/create", [WashController::class, "create"], "auth")
->post("dashboard/create", [WashController::class, "store"], "auth")
//  Services
->get("dashboard/services", [ServiceController::class, "index"], "auth")
->post("dashboard/services", [ServiceController::class, "store"], "auth")

// Reservation
->get("reservation", [ReservationController::class, "index"], "auth")
->post("reservation", [ReservationController::class, "store"], "auth")

->resolve(Request::uri(), Request::method());
