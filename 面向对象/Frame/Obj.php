<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Obj.php
 * @createtime   2019-11-15 13:49
 */
namespace Frame;

class Obj
{

    protected $array = [];

    //设置对象的属性
    public function __set($key, $value)
    {
        echo __METHOD__;
        $this->array[$key] = $value;
    }
    //获取对象的属性
    public function __get($key)
    {
        echo __METHOD__;
        return $this->array[$key];
    }
    //方法不存在时接管
    public function __call($name, $arguments)
    {
        echo "\n";
        echo $name. "\n";
        var_dump($arguments);
    }

    //静态方法不存在时调用
    public static function __callStatic($func, $arguments)
    {
        echo "\n";
        echo "callStatic ".$func. "\n";
        var_dump($arguments);
    }

    public function __toString()
    {
        echo "\n";
        return __METHOD__;
    }

    //对象当函数使用
    public function __invoke($param)
    {
        echo "\n";
        return __METHOD__;
    }

}