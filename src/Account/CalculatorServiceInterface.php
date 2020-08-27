<?php
declare(strict_types = 1);

namespace MicroServer\Account;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
    public function mul(int $a, int $b): int;
    public function sub(int $a, int $b): int;
	public function login(string $username, String $passwoed);
}
