<?php
/**
 *
 * User: lskj03
 * Date: 2019/11/4
 */

class Single
{
    public static $instance = null;

    private function __construct()
    {
        echo 'new';
    }

    /**
     *
     * @return Single|null
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getA()
    {
        echo 'abc';
    }
}