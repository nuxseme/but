<?php
namespace application\repository;


use application\model\Order;

interface  OrderRepository
{
   public function  save(Order $order);

   public function  update();

   public function delete();

   public function select();
}