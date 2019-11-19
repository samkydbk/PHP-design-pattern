<?php
/**
 * @author        Yongtao Zhang <yyzm@vip.qq.com>
 * @package       MySQL.php
 * @createtime   2019-11-16 15:51
 */
namespace Frame\DataBase;

use Frame\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $conn = mysql_connect($host, $user, $password);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;

    }

    public function query($sql)
    {
        return mysql_query($sql, $this->conn);
    }

    public function close()
    {
        mysql_close($this->conn);
    }

}