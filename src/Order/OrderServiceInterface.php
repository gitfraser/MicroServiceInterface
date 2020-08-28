<?php

namespace MicroServer\Order;

interface OrderServiceInterface
{
    public function get(string $orderId);
}
