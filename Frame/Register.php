<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Register.php
 * @createtime   2019-11-15 17:10
 */
namespace Frame;

class Register
{
    protected static $objects;

    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($name)
    {
        return self::$objects[$name];
    }

    function __unset($name)
    {
        unset(self::$objects[$name]);
    }
}