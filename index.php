<?php
header("content-type:text/html;charset=utf8");
define("MVC",true);//用来记录一个口令，只能从这个页面进入
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);//应用文件夹
//__DIR__ 获取当前程序运行的目录  在本地文件夹的地址
//__FILE__ 获取当前运行的程序文件 在本地文件的地址
//__CLASS__获取当前类的名字
//__METHOD__获取当前函数的名字
//__LINE__当前程序所在的行数

require_once "libs/start.php";