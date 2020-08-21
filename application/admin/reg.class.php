<?php

use \libs\smarty;
use \libs\db;

class reg
{
    function add()
    {
        $smarty = new smarty();
        $smarty->display("admin/reg.html");
    }

    function addUser()
    {
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $pass1 = $_POST["pass1"];
        //连接数据库
        if ($pass != $pass1) {
            echo "密码不一致";
            return;
        }
//        $db = new mysqli("localhost", "root", '12345', 'wui2006', '3308');
//        if (mysqli_connect_error()) {
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");
        $database=new db();
        $db=$database->db;
        $result = $db->query("select uname from mvc_user where uname='{$uname}'");
        if ($result->num_rows > 0) {
            echo "用户名已存在";
            return;
        } else {
            echo "false";
        }
        $pass = md5(md5($pass));
        $db->query("insert into mvc_user (uname,pass) values ('$uname','$pass')");
        if ($db->affected_rows > 0) {
            echo "插入成功";
        }
    }

    function checkName()
    {
        $uname = $_POST["uname"];
        $database=new db();
        $db=$database->db;
//        if (mysqli_connect_error()) {
//            die("连接数据库错误！");
//        }
        $result = $db->query("select uname from user where uname='{$uname}'");
        if ($result->num_rows == 0) {
            echo "true";
        } else {
            echo "false";
        }
    }


}