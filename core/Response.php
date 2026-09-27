<?php

class Response
{
    public static function error(string $msg, int $status = 403): void{
        http_response_code($status);

        echo $msg;

        exit;
    }

    public static function json(array $data, string $msg = "", int $status = 200){
        
        echo json_encode([
            "message" => $msg,
            "data" => $data,
        ]);

        exit;
    }
}