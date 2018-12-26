<?php

namespace application\repository;

use application\model\Order;

class OrderFileRepository  implements OrderRepository
{
    public function save(Order $order)
    {
        echo '文件存储';
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