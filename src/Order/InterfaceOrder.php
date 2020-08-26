<?php declare(strict_types=1);

namespace MicroService\Order;

/**
 * Class InterfaceOrder
 *
 */
interface InterfaceOrder
{
    /**
     * 订单列表-供应商
     * @return array
     */
    public function listSupplier(): array;
}