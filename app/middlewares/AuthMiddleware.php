<?php

require_once __DIR__ . "/Middlewares.php";

class AuthMiddleware implements Middlewares
{
    public function handle(string ...$roles): void
    {

        if (!isset($_SESSION['user'])) {
            Response::error("Unauthorized", 401);
        }

        if (empty($roles)) {
            return;
        }

        $currentRoleAuth = $_SESSION['user']['role'];

        if(!in_array($currentRoleAuth, $roles)){
            Response::error("Forbidden", 403);
        }
    }
}
