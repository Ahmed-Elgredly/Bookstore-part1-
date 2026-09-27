<?php

require_once __DIR__ . "/../core/Route.php";
require_once __DIR__ . "/../app/controller/web/HomeController.php";
require_once __DIR__ . "/../app/controller/web/auth/LoginController.php";
require_once __DIR__ . "/../app/controller/web/auth/RegisterController.php";



Route::get("", HomeController::class, "index");

Route::get("/auth/Login", LoginController::class, "index");
Route::get("/auth/Register", RegisterController::class, "index");

