<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Loader.php
 * @createtime   2019-11-15 10:56
 */
namespace Frame;

class Loader
{
    static function autoload($class)
    {

        $file = BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
        if (is_file($file)) {
            require $file;
        }
    }
}