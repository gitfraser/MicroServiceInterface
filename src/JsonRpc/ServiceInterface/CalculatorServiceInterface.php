<?php
declare(strict_types = 1);

namespace MicroServer\JsonRpc\ServiceInterface;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
    public function mul(int $a, int $b): int;
    public function sub(int $a, int $b): int;
}
