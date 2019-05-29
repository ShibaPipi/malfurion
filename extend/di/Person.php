<?php

namespace di;

class Person
{
    public function __construct(Car $obj)
    {
        $this->obj = $obj;
    }

    /**
     * 依赖 Person 类依赖 Car 类
     * 注入 Car 类注入到 Person 类
     * @param $obj
     * @return mixed
     */
    public function buy()
    {
//        $BMW = new Car();
        return $this->obj->pay();
    }
}