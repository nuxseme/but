<?php

namespace application\repository;

use application\library\Mysql;
use application\model\Order;

class OrderMysqlRepository  implements  OrderRepository
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function save()
    {
        $query  = MySQL::getInstance()->prepare("INSERT INTO tbl_order (name, tel,weixin) VALUES (:name, :tel, :weixin)");
        $query->bindValue(':name', $this->order->getName(), \PDO::PARAM_STR);
        $query->bindValue(':tel', $this->order->getTel(), \PDO::PARAM_STR);
        $query->bindValue(':weixin', $this->order->getWeixin(), \PDO::PARAM_STR);
        $query->execute();
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function select()
    {
        // TODO: Implement select() method.
    }


}