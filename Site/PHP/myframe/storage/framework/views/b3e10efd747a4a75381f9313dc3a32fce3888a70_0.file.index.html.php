<?php
/* Smarty version 4.3.1, created on 2023-05-22 17:29:33
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b35fd3db316_74374523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e10efd747a4a75381f9313dc3a32fce3888a70' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\admin\\index.html',
      1 => 1684747769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b35fd3db316_74374523 (Smarty_Internal_Template $_smarty_tpl) {
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
          系统环境：<?php echo $_smarty_tpl->tpl_vars['server_info']->value['server_version'];?>

        </li>
        <li class="list-group-item">
          MySQL版本：<?php echo $_smarty_tpl->tpl_vars['server_info']->value['mysql_version'];?>

        </li>
        <li class="list-group-item">
          文件上传限制：<?php echo $_smarty_tpl->tpl_vars['server_info']->value['upload_max_filesize'];?>

        </li>
        <li class="list-group-item">
          脚本执行时限：<?php echo $_smarty_tpl->tpl_vars['server_info']->value['max_execution_time'];?>

        </li>
        <li class="list-group-item">
          服务器时间：<?php echo $_smarty_tpl->tpl_vars['server_info']->value['server_time'];?>

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
