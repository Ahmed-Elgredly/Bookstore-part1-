<?php

require_once __DIR__ . "/../../controller.php";

class LoginController extends Controller 
{
    public function index()
    {
        $this->view("auth/Login");
    }
}