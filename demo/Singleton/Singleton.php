<?php
/**
 * 单例模式
 * Created by PhpStorm.
 * User: A1-0491
 * Date: 2020/2/28
 * Time: 17:10
 */
namespace demo\Singleton;

class Singleton
{
    private static $instance;

    private function __construct() {}

    public function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new \stdClass();
        }
        return static::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
