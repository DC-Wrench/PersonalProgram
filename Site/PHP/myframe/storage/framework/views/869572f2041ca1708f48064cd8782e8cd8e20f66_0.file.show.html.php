<?php
/* Smarty version 4.3.1, created on 2023-05-22 18:04:39
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\sub\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b3e378a6803_96546884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869572f2041ca1708f48064cd8782e8cd8e20f66' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\sub\\show.html',
      1 => 1684749875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b3e378a6803_96546884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="as">
  <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
  <div class="as-title">
    <h1><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</h1>
  </div>
  <div class="as-row">
    <span>栏目：
      <?php if ((isset($_smarty_tpl->tpl_vars['category_name']->value))) {?>
      <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['cid'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['category_name']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
      <?php } else { ?>
      无
      <?php }?>
    </span>
    <span>作者：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['author'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</span>
    <span>发表时间：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['created_at'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</span>
    <span>阅读：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['views'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
次</span>
  </div>
  <div class="as-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
  <div class="as-change">
    <span>上一篇：
      <?php if ($_smarty_tpl->tpl_vars['article_prev']->value) {?>
      <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_prev']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_prev']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_prev']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
      <?php } else { ?>
      无
      <?php }?>
    </span>
    <span>下一篇：
      <?php if ($_smarty_tpl->tpl_vars['article_next']->value) {?>
      <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_next']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_next']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_next']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
      <?php } else { ?>
      无
      <?php }?>
    </span>
  </div>

  <?php } else { ?>
  <div class="as-message">
    您查看的文章不存在。<p><a href="/">点我返回首页</a></p>
  </div>
  <?php }?>
</div><?php }
}
