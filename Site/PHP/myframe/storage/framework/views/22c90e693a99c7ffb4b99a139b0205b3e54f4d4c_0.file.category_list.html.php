<?php
/* Smarty version 4.3.1, created on 2023-05-22 17:35:02
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\admin\category_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b374647a020_26790934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22c90e693a99c7ffb4b99a139b0205b3e54f4d4c' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\admin\\category_list.html',
      1 => 1684748075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b374647a020_26790934 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2>栏目管理</h2>
</div>
<div class="main-section form-inline">
  <a href="/admin/category/edit" class="btn btn-success">+ 新增</a>
</div>
<div class="main-section">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>栏目名称</th>
        <th>排序值</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
      <!-- 输出栏目列表 -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <tr>
        <td><a href="/admin/category/edit?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a></td>
        <td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['sort'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td>
          <a href="/admin/category/edit?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" style="margin-right:5px;">编辑</a>
          <a href="/admin/category/delete?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="j-del text-danger">删除</a>
        </td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php } else { ?>
      <tr>
        <td colspan="3" class="text-center">列表为空</td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('category');	// 将“栏目”菜单项设为选中
  $('.j-del').click(function () {
    if (confirm('您确定要删除此项？')) {
      main.ajaxPost($(this).attr('href'), function () {
        main.contentRefresh();	// 删除栏目后刷新内容区域
      });
    }
    return false;
  });

<?php echo '</script'; ?>
><?php }
}
