<?php
if(!defined("MVC")){
    die("非法入侵");
}
//后台管理
//后台(广义):指的就是一个应用的服务器部分的内容,apache MySQL 文件
//狭义:指的就是一个应用的管理中心

class index
{
    function int()
    {
echo "前台页面";

//        $smarty = new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//        //php如何操作数据库
////对象的方式访问
//        //连接数据库
//        $db = new mysqli('localhost', 'root', '12345', 'mxj', '3308');
//
//        if (mysqli_connect_error()) {
//            die("数据库链接错误");
//        }
////对数据进行查询
//        //很多时候需要在数据库里面每一条数据都有一个唯一的标识;
//        //主键就是这一条信息的主要标识,只要设置了主键,主键是不一样的
//        $db->query("Set name utf8");
//
////     $db->query("delete from demo where name='zhangsan'");
//        //结果集是一个对象->方法,获取具体的数据
//      $result=  $db->query("select * from demo");
//      $array=array();
//      while ($row=$result->fetch_assoc()){
//$array[]=($row);
//    }
//    var_dump($array);
//
//
//        if ($db->affected_rows > 0) {
//echo "操作成功";
//        }
        //结果集对象
//        $result = $db->query("select * from demo");
//
//
//
////如何讲数据从结果中取出
//        $data = array();
//        //关联数组
//        while ($row = $result->fetch_assoc()) {
//            $data[] = ($row);
//        }
//        //索引数组
////        $result->fetch_row();
//
//        //既有关联数组,也有索引数据
////        $result->fetch_array();
//        $smarty->assign("data", $data);
//        $smarty->display("login.html");
//
    }
}
//方法名字和类的名字一样的话 这个函数就是构造函数 实例化的时候输出两次函数里面的内容