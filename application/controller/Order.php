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
    }
}