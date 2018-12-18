<?php

class User
{
    public function get($key = null,$value = null)
    {
        echo '*****************';
        echo __METHOD__;
        echo $key;
        echo $value;
        $user = new application\model\User();
        $user->getUser();

    }

    public function post()
    {
        echo __METHOD__;
    }
}