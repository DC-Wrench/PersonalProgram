<?php
/* Smarty version 4.3.1, created on 2024-12-24 19:23:56
  from 'D:\wamp64\www\myframe\resources\views\admin\category_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_676b0a4cb0a972_32040634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb19728b6af1544e07e4d1e53345f1c7d1b56d0' => 
    array (
      0 => 'D:\\wamp64\\www\\myframe\\resources\\views\\admin\\category_edit.html',
      1 => 1684747954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676b0a4cb0a972_32040634 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>栏目</h2>
</div>
<div class="main-section">
  <form method="post" action="/admin/category/save" class="j-form">
    <ul class="form-group form-inline">
      <li>
        <input type="text" class="form-control" name="name" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>栏目名称</label>
      </li>
      <li>
        <input type="number" class="form-control" name="sort" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['sort'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>排序值</label>
      </li>
      <li>
        <input type="hidden" name="id" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['id']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="submit" value="提交表单" class="btn btn-primary">
        <a href="/admin/category/index" class="btn btn-default">
          返回列表</a>
      </li>
    </ul>
  </form>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('category');
  main.ajaxForm('.j-form', function () {
    main.content('/admin/category/index');	// 提交表单后跳转到列表页
  });
<?php echo '</script'; ?>
><?php }
}
