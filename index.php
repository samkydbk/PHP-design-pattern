<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       index.php
 * @createtime   2019-11-15 10:56
 */

//自动加载
use Frame\Factory;

define('BASEDIR', __DIR__);
include BASEDIR . '/Frame/Loader.php';

spl_autoload_register('Frame\Loader::autoload');

//适配器模式
$db = new Frame\DataBase\MySQL();
$db->connect('127.0.0.1', 'root', 'root', 'test');
$db->query("show database");
$db->close();

//注册器模式
$db = Frame\Register::get('db1');

//单例模式
$db = Frame\Database::getInstance();
var_dump($db);

//工厂模式实例化对象
$obj1 = Frame\Factory::createDateBase();
var_dump($obj1->test());

//链式操作
//$db = new Frame\Database();
//$db->where("id=1")->order("id desc")->limit(1);

//php魔术方法的使用
$obj = new Frame\Obj();
//调用不存在的属性 __get() __set()
$obj->title = "hello";
echo "\n";
echo $obj->title;

//__call()  不存在方法时调用
$obj->test(1);

//__callStatic() 静态方法不存在时调用
$obj::test(8);

//把对象当字符串时
echo $obj;

//对象当函数使用
echo $obj(2);