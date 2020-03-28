<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Database.php
 * @createtime   2019-11-15 13:40
 */
namespace Frame;

class Database
{
    protected static $db;

    //类设置为私有，防止从外部new
    private function __construct()
    {

    }

    //判断对象存在直接返回
    public static function getInstance()
    {
        if (!self::$db) {
            self::$db = new self();
        }
        return self::$db;
    }

    public function where($where)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }

    public function __call($func, $param)
    {
        return '没有这个方法';
    }

}