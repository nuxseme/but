<?php

class Order
{
    public function get()
    {
        echo __METHOD__;
    }

    public function post()
    {
        print_r($_POST);
        echo __METHOD__;

        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $weixin = $_POST['weixin'];

        $order = new  \application\model\Order();
        $order->setName($name);
        $order->setTel($tel);
        $order->setWeixin($weixin);

        $orderService = new  \application\service\OrderService((new \application\repository\OrderFileRepository()));
        $orderService->save($order);

    }
}