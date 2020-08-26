<?php

namespace App\JsonRpc\ServiceInterface;

interface UserServiceInterface
{
    public function login(string $username, String $passwoed);
}
