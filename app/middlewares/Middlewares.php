<?php

interface Middlewares
{
    public function handle(string ...$args): void;
}