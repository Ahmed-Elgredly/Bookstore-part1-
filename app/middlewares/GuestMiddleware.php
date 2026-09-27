<?php

require_once __DIR__ . "/Middlewares.php";

class GuestMiddleware implements Middlewares
{
    public function handle(string ...$role): void
    {
        if(isset($_SESSION['user'])){
            Response::error("Already Authenticated", 403);
        }
    }
}