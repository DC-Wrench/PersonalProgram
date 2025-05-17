<?php
/* Smarty version 4.3.1, created on 2023-05-22 18:02:14
  from 'C:\web\apache2.4\htdocs\www\myframe\resources\views\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b3da6c33269_51658885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ead3a8d3658bd2280606d8eed120474e09a8de' => 
    array (
      0 => 'C:\\web\\apache2.4\\htdocs\\www\\myframe\\resources\\views\\show.html',
      1 => 1684749698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/show.html' => 1,
    'file:sub/sidebar.html' => 1,
  ),
),false)) {
function content_646b3da6c33269_51658885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1142821100646b3da6c2ff77_25779713', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_1142821100646b3da6c2ff77_25779713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1142821100646b3da6c2ff77_25779713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="main-body">
  <div class="main-wrap">
    <div class="main-left">
      <?php $_smarty_tpl->_subTemplateRender("file:sub/show.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
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
