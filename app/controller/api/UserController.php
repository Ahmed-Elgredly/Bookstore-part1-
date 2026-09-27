<?php

require_once __DIR__ . "/../../models/user/UserModel.php";

class UserController
{
    public function getData()
    {

        $userModel = new userModel();

        $users = $userModel->getUSers();

        echo json_encode([
            'message' => "success",
            "data" => $users
        ]);

        // $users = [
        //     ["id" => 5, "name" => "Mohamed Atya"],
        //     ["id" => 6, "name" => "Ahmed Atya"],
        // ];

        // Response::json(Request::all(), "Succesfully");
    }
}
