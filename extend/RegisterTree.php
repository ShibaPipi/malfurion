<?php
/**
 *
 * User: lskj03
 * Date: 2019/11/4
 */

class RegisterTree
{
    /**
     * 注册树池子
     * @var null
     */
    protected static $objects = null;

    /**
     * 将对象挂在树上
     * @param $key
     * @param $object
     */
    public static function set($key, $object)
    {
        self::$objects[$key] = $object;
    }

    /**
     * 从树上获取对象，如果没有则注册
     * @param $key
     */
    public static function get($key)
    {
        if (!isset(self::$objects[$key])) {
            self::$objects[$key] = new $key;
        }

        return self::$objects[$key];
    }

    /**
     * 注销对象
     * @param $key
     */
    public static function _unset($key)
    {
        unset(self::$objects[$key]);
    }
}