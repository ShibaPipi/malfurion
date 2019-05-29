<?php

namespace di;

class Container
{
    /**
     * 存放容器数据
     * @var array
     */
    public $instances = [];

    /**
     * 容器中的对象实例
     * @var
     */
    protected static $instance;

    private function __construct()
    {
    }

    /**
     * 获取当前容器的实例（单例模式）
     * @return Container
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function set($key, $val)
    {
        $this->instances[$key] = $val;
    }

    /**
     * 获取容器里面的实例，利用反射机制
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        if (!empty($this->instances[$key])) {
            $key = $this->instances[$key];
        }
        $reflect = new \ReflectionClass($key);
        //获取类的构造函数
        $con = $reflect->getConstructor();

        if (!$con) {
            return new $key;
        }

        $params = $con->getParameters();

        if (empty($params)) {
            return new $key;
        }

        foreach ($params as $param) {
            // 判断哪个参数时注入的 class
            $class = $param->getClass();
            if (!$class) {
                //todo
                dump('abc');
            } else {
                $args[] = $this->get($class->name);
            }
        }

        return $reflect->newInstanceArgs($args);
    }

}