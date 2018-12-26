<?php
namespace application\service;

use application\repository\OrderRepository;

class OrderService
{
    private $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function save(\application\model\Order $order)
    {
      $this->orderRepository->save($order);
    }
}