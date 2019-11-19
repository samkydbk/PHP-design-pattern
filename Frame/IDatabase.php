<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       IDatabase.php
 * @createtime   2019-11-16 15:58
 */
namespace Frame;

interface IDatabase
{
    //连接数据库操作
    public function connect($host, $user, $password, $dbname);
    //查询数据库
    public function query($sql);
    //关闭数据库
    public function close();
}