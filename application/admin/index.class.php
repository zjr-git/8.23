<?php
if (!defined("MVC")) {
    die("非法入侵");
}

use \libs\smarty;
use \libs\db;
class index
{
    function int()
    {
        $smarty = new smarty();
        $smarty->display("admin/login.html");

    }

    function login()
    {
        $uname = addslashes($_POST["uname"]);//对SQL语句进行转义
        $pass = md5(md5($_POST["pass"]));
        if (strlen($uname) < 5 || empty($pass)) {
            echo "用户名和密码不符合规范!";
            return;
        }
//        $db = new mysqli("localhost", "root", '12345', 'wui2006', '3308');
//        if (mysqli_connect_error()) {
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");

        $database = new db();
        $db=$database->db;
        $result = $db->query("select * from mvc_user where uname='{$uname}' and pass='{$pass}'");
        if ($result->num_rows < 1) {
            echo "没有相应的数据,请重新登录";
        } else {
            header(APP_ADD . "/admin/index/first");
        }
    }

    function first()
    {
        echo "后台首页";
    }

}