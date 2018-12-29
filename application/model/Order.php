<?php

namespace application\model;

class Order
{
    private $name;
    private $tel;
    private $weixin;

    public function __construct(string $name,string $tel,string $weixin)
    {
        $this->setName($name);
        $this->setTel($tel);
        $this->setWeixin($weixin);
    }

    public static function createNewFrom(string $name,string $tel,string $weixin)
    {
        return new static($name,$tel,$weixin);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getWeixin()
    {
        return $this->weixin;
    }

    /**
     * @param mixed $weixin
     */
    public function setWeixin($weixin): void
    {
        $this->weixin = $weixin;
    }



}