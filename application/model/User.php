<?php

namespace application\model;
use application\library\Mysql;

class User
{
    public function getUser()
    {
        echo 'user 模型';
        $query = MySQL::getInstance()->query("SELECT * FROM `order` ");
        print_r($query->fetchAll());
    }
}