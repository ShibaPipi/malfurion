<?php

namespace app\index\controller;

use Abc;
use di\Car;
use di\Person;
use Yaconf;
use di\Container;

class Index
{
    public function index()
    {
       \Single::getInstance()->getA();
       \Single::getInstance()->getA();
       \Single::getInstance()->getA();
       \Single::getInstance()->getA();
    }

    public function hello($name = 'ThinkPHP5')
    {
//        return 'hello,' . $name;
//        dump(Yaconf::get("abc.title"));
//        dump(\Config::get("app.abc"));
//        dump(\Config::get("pipi."));
//        Container::getInstance()->set('Person', '\di\Person');
//        Container::getInstance()->set('Car', '\di\Car');

//        $obj = Container::getInstance()->get('di\Car');
        dump('hello');
//        dump($obj);
//        dump($obj->buy());
    }
}
