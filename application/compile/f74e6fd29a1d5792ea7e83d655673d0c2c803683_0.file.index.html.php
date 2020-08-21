<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-19 13:08:08
  from 'D:\wamp64\www\单入口\application\template\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3d24384afc05_56983181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f74e6fd29a1d5792ea7e83d655673d0c2c803683' => 
    array (
      0 => 'D:\\wamp64\\www\\单入口\\application\\template\\login.html',
      1 => 1597842488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d24384afc05_56983181 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>

    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li> <?php if ($_smarty_tpl->tpl_vars['v']->value["sex"] == 'man') {?>
        男
        <?php } else { ?>
        女
        <?php }?></li>

</ul>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 <a href="index.php/teach/log/add">添加日报</a>
</body>
</html><?php }
}
