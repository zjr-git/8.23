<?php

//将信息存储到客户端,给客户端返回一个加密的cookie
session_start();
session_name('myid');
session_id('abcdefg');
setcookie('myid',md5("abcdefg"),time()+10);
echo session_id();
echo session_name();
//$_SESSION["name"]="zhangsan";
//echo $_SESSION["name"];
//unset($_SESSION['name']);
//echo $_SESSION["name"];
//session_destroy();
