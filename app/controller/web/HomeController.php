<?php

require_once __DIR__ . "/../controller.php";

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'userName' => "mohamed atya",
        ];

        $this->view("home/Home", $data);        
    }

    public function test()
    {
        $errors = Request::validate([
            'user_id' => ['required', ['exists', 'customers', 'id']], 
            'email' => ['required', 'email', ['unique', 'customers']],
            'password' => ['required', ['min', 8]],
        ]);

        // $this->view("home/Home");
        pr($errors);
    }
}

