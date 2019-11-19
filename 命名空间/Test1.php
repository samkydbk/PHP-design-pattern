<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Test.php
 * @createtime   2019-11-14 10:15
 */

require 'Test11.php';
require 'Test12.php';

use Test12\TestTest;

TestTest::abc();

$c = new TestTest();
echo $c->ccc();
echo $c->ddd;

echo '\n';

Test11\test();



//php中require，include，use的区别
//
//1.require，include都是导入文件，但是require如果找不到文件，直接error，程序退出；include是warning，继续执行；
//
//2.use是使用命名空间，相当于java中的导包，前提是包中的文件需要提前require或者include进来。
//
//3.namespace命名空间，相当于java中的package，定义一个包
//
//4.use使用的时候后面的需要写全空间名+类名 ，例如命名空间Person1/Person; 其中Person1是命名空间，Person是类名；

