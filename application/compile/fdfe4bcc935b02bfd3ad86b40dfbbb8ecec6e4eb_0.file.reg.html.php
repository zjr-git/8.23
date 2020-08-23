<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 08:49:41
  from 'D:\wamp64\www\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f40dc259a31c3_42622841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdfe4bcc935b02bfd3ad86b40dfbbb8ecec6e4eb' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\admin\\reg.html',
      1 => 1597982461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f40dc259a31c3_42622841 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
Jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
reg.js"><?php echo '</script'; ?>
>


</head>
<body>
<form class="form-horizontal" action="addUser" method="post">
    <h1>注册页面</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" placeholder="请输入密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="pass1" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass1" placeholder="请确认密码" name="pass1">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号?请
            <a href="<?php echo ENTRY_ADD;?>
/admin" class="btn btn-default">登录</a>
        </div>
    </div>
</form>
</body>
</html>

<?php }
}
