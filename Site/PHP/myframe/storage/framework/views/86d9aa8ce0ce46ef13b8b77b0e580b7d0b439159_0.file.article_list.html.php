<?php
/* Smarty version 4.3.1, created on 2023-05-22 17:49:31
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\admin\article_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b3aab021af5_30658306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86d9aa8ce0ce46ef13b8b77b0e580b7d0b439159' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\admin\\article_list.html',
      1 => 1684748955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b3aab021af5_30658306 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2>文章管理</h2>
</div>
<div class="main-section form-inline">
  <a href="/admin/article/edit" class="btn btn-success">+ 新增</a>
</div>
<div class="main-section">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>标题</th>
        <th>作者</th>
        <th>已发布</th>
        <th>阅读量</th>
        <th>创建时间</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
      <!-- 文章列表 -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <tr>
        <td>
          <a href="/admin/article/edit?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
        </td>
        <td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['author'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['show']) {?>是<?php } else { ?>否<?php }?></td>
        <td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['views'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['created_at'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td>
          <a href="/admin/article/edit?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" style="margin-right:5px;">编辑</a>
          <a href="/admin/article/delete?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="j-del text-danger">删除</a>
        </td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php } else { ?>
      <tr>
        <td colspan="6" class="text-center">列表为空</td>
      </tr>
      <?php }?>
    </tbody>
  </table>
  <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</div>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('article');
  $('.j-del').click(function () {
    if (confirm('您确定要删除此项？')) {
      main.ajaxPost($(this).attr('href'), function () {
        main.contentRefresh();
      });
    }
    return false;
  });
<?php echo '</script'; ?>
><?php }
}
