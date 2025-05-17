<?php
/* Smarty version 4.3.1, created on 2024-12-24 19:22:56
  from 'D:\wamp64\www\myframe\resources\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_676b0a10554929_47633266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eca9f0c56c544e0fa563c91ed04b4b112b8757e' => 
    array (
      0 => 'D:\\wamp64\\www\\myframe\\resources\\views\\index.html',
      1 => 1684749634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/slide.html' => 1,
    'file:sub/list.html' => 1,
    'file:sub/sidebar.html' => 1,
  ),
),false)) {
function content_676b0a10554929_47633266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_748224134676b0a103496d2_77821027', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_748224134676b0a103496d2_77821027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_748224134676b0a103496d2_77821027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
<!-- 轮播图 -->
<?php $_smarty_tpl->_subTemplateRender("file:sub/slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="main-body">
  <div class="main-wrap">
    <div class="main-left">
      <!-- 文章列表 -->
      <?php $_smarty_tpl->_subTemplateRender("file:sub/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- 侧边栏 -->
    <div class="main-right">
      <?php $_smarty_tpl->_subTemplateRender("file:sub/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
</div>

<?php
}
}
/* {/block "content"} */
}
