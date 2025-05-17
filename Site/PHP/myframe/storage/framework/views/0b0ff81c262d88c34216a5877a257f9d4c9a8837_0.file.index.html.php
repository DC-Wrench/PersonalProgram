<?php
/* Smarty version 4.3.1, created on 2024-12-24 19:23:35
  from 'D:\wamp64\www\myframe\resources\views\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_676b0a3718d217_31458025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0ff81c262d88c34216a5877a257f9d4c9a8837' => 
    array (
      0 => 'D:\\wamp64\\www\\myframe\\resources\\views\\admin\\index.html',
      1 => 1684747768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676b0a3718d217_31458025 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
  <div class="main-title">
    <h2>首页</h2>
  </div>
  <div class="main-section">
    <div class="panel panel-default">
      <div class="panel-heading">欢迎访问</div>
      <div class="panel-body">欢迎进入内容管理系统！</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">服务器信息</div>
      <ul class="list-group">
        <li class="list-group-item">
          系统环境：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['server_version'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

        </li>
        <li class="list-group-item">
          MySQL版本：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['mysql_version'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

        </li>
        <li class="list-group-item">
          文件上传限制：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['upload_max_filesize'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

        </li>
        <li class="list-group-item">
          脚本执行时限：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['max_execution_time'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

        </li>
        <li class="list-group-item">
          服务器时间：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['server_time'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

        </li>
      </ul>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('index');  // 将菜单中的“首页”设为选中
<?php echo '</script'; ?>
><?php }
}
