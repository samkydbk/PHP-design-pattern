<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       PDO.php
 * @createtime   2019-11-16 15:51
 */
namespace Frame\PDO;

use Frame\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }

}