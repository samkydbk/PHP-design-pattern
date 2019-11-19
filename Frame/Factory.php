<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Factory.php
 * @createtime   2019-11-15 16:30
 */
namespace Frame;

require BASEDIR . '/Frame/Database.php';

class Factory
{
    public static function createDateBase()
    {
        //$db = new Database();
        //工厂加单例模式
        $db = Database::getInstance();
        //Register::set('db1', $db);
        return $db;
    }
}