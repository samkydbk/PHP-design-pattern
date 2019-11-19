<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       Database.php
 * @createtime   2019-11-15 13:40
 */
namespace Frame;

class Database
{
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

}