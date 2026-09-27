<?php

function pr(mixed $data, bool $die = false): void
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    if ($die) {
        exit;
    }
}

function asset(string $path)
{
    return BASE_URL . "/assets/" . ltrim($path, "/");
}

function session(string $key, mixed $value = null): mixed
{

    if (func_num_args() === 1) {
        return $_SESSION[$key] ?? null;
    }

    $_SESSION[$key] = $value;

    return $_SESSION[$key];
}

function old(string $key, mixed $defult = ''): mixed
{
    return $_SESSION['_old'][$key] ?? $defult;
}

function isAuth(?string $key = null): bool 
{
    if(isset($_SESSION['user'])){
        return false;
    }

    if($key ==- null){
        return true;
    }

    $currentAuthRole = $_SESSION['user']['role'] ?? null; 

    return ($currentAuthRole) === $key;
}

function auth(?string $key = null): mixed
{
    $user = $_SESSION['user'] ?? null;

    if($key === null) {
        return $user;
    }

    return $user ?? null;
}

function isGuest(): bool
{
    return !isAuth();
}

function redirect(string $path)
{
    $url = BASE_URL . $path;
    
    header( "location: {$url}");
}

function route(string $path)
{
    return BASE_URL . $path;
}