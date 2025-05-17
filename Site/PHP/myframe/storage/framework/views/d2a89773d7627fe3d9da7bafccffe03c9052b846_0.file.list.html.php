<?php
/* Smarty version 4.3.1, created on 2024-12-24 19:22:57
  from 'D:\wamp64\www\myframe\resources\views\sub\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_676b0a11311bf1_04900776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a89773d7627fe3d9da7bafccffe03c9052b846' => 
    array (
      0 => 'D:\\wamp64\\www\\myframe\\resources\\views\\sub\\list.html',
      1 => 1684749526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676b0a11311bf1_04900776 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="al">
  <?php if ((isset($_smarty_tpl->tpl_vars['category_name']->value))) {?>
  <div class="al-title">
    <h1><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['category_name']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</h1>
  </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
  <div class="al-each">
    <div class="al-info">
      <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?>
    <!-- 显示文章封面图 -->
    <div class="al-img">
      <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
        <img src="/uploads/images/<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['image'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" alt="点击阅读文章">
      </a>
    </div>

    <?php }?>
    <div class="al-more">
      <span>作者：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['author'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 | 发表于：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['created_at'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>
  </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
  <div class="al-message">
    该栏目内暂时没有内容。<p><a href="/">点击返回首页</a></p>
  </div>
  <?php }?>
</div>
<div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</div><?php }
}
