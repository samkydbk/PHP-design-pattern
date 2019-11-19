<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       a.php
 * @createtime   2019-11-06 18:05
 */

spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

Test21::test();
Test22::test();

$obj = new Test21();
$obj->test1();

function autoload1($class)
{
    $file = __DIR__. '/' . $class . '.php';
    if (is_file($file)){
        require __DIR__. '/' . $class . '.php';
    }
}

function autoload2($class)
{
    $file = __DIR__. '/' . $class . '.php';
    if (is_file($file)){
        require __DIR__. '/' . $class . '.php';
    }
}

//已废弃
//function __autoload($class)
//{
//    require __DIR__. '/' . $class . '.php';
//}

//spl_autoload_register 是一个实现自动加载类的函数，自动加载类就是我们在new一个class的时候，不需要手动去写require来导入这个class.php文件，程序自动帮我们加载导入进来
//
//      spl_autoload_register 的原理
//
//      spl_autoload_register（autoload_function，throw，prepend）
//
//      autoload_function
//     这是一个函数【方法】名称，可以是字符串或者数组（调用类方法使用）。这个函数（方法）的功能就是，来把需要new 的类文件包含include(requeire)进来，这样new的时候就不会找不到文件了。其实就是封装整个项目的include和require功能。
//
//    throw
//   此参数设置了 autoload_function 无法成功注册时， spl_autoload_register()是否抛出异常。
//
//   prepend
//   如果是 true，spl_autoload_register() 会添加函数到队列之首，而不是队列尾部。