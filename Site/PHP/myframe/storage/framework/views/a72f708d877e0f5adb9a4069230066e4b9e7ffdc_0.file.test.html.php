<?php
/* Smarty version 4.3.1, created on 2023-05-22 16:38:07
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\test.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b29ef34c958_38693060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72f708d877e0f5adb9a4069230066e4b9e7ffdc' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\test.html',
      1 => 1684744683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b29ef34c958_38693060 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Smarty示例</title>
</head>

<body>
  <table border="1">
    <tr>
      <th>name</th>
      <th>email</th>
      <th>gender</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['student']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <tr>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['gender'] == '男') {?>
        <font color="red"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</font>
        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

        <?php }?>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gender'];?>
</td>
    </tr>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</body>


</html><?php }
}
