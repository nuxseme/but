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

        $orderService = new  \application\service\OrderService((new \application\repository\OrderFileRepository()));
        $orderService->createOrder($name,$tel,$weixin);

    }
}