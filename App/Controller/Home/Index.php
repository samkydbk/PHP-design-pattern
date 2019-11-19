<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       index.php
 * @createtime   2019-11-15 11:52
 */
namespace App\Controller\Home;

class Index
{
    public static function test()
    {
        echo 'controller/index';
    }

    public function index()
    {
        echo '我是首页';
    }
}