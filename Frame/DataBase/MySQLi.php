<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       MySQLi.php
 * @createtime   2019-11-16 15:51
 */
namespace Frame\DataBase;

use Frame\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = mysqli_connect($host, $user, $password, $dbname);
        $this->conn = $conn;

    }

    public function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }

}