<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       index.php
 * @createtime   2019-11-15 10:56
 */

//自动加载
define('BASEDIR', __DIR__);
include BASEDIR . '/Frame/Loader.php';

spl_autoload_register('Frame\Loader::autoload');

//Frame\Test::test();

//执行三个方法
App\Controller\Home\Index::test();
echo "\n";
Frame\Test::test();
echo "\n";
$obj = new App\Controller\Home\Index();
$obj->index();