<?php

namespace MicroServer\Account;

interface UserServiceInterface
{
    public function login(string $username, String $passwoed);
}
