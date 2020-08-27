<?php

namespace MicroServer\JsonRpc\ServiceInterface;

interface UserServiceInterface
{
    public function login(string $username, String $passwoed);
}
