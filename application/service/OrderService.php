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

    public function createOrder(string $name,string $tel,string $weixin)
    {
        $order = \application\model\Order::createNewFrom($name,$tel,$weixin);
        return $this->orderRepository->save($order);
    }
}