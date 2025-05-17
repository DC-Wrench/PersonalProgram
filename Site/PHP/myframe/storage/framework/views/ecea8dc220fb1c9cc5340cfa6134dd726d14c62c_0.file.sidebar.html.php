<?php
/* Smarty version 4.3.1, created on 2024-12-24 19:22:57
  from 'D:\wamp64\www\myframe\resources\views\sub\sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_676b0a11620197_52129752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecea8dc220fb1c9cc5340cfa6134dd726d14c62c' => 
    array (
      0 => 'D:\\wamp64\\www\\myframe\\resources\\views\\sub\\sidebar.html',
      1 => 1684749650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676b0a11620197_52129752 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="si">
  <!-- 热门标签（直接编写HTML代码实现） -->
  <div class="si-each">
    <div class="si-title">热门标签</div>
    <div class="si-p1">
      <a href="#">PHP</a><a href="#">JavaScript</a>
      <a href="#">MySQL</a><a href="#">Python</a>
      <a href="#">Java</a><a href="#">C++</a>
      <a href="#">Linux</a><a href="#">shell</a>
    </div>
  </div>
  <!-- 最新文章 -->
  <div class="si-each">
    <div class="si-title">最新文章</div>
    <div class="si-p2">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_new']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <p><a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a></p>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  <!-- 最热文章 -->
  <div class="si-each">
    <div class="si-title">
      <span class="si-p3-top">TOP 10</span> 热门文章
    </div>
    <div class="si-p3">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_hot']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <p><a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a></p>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div><?php }
}
