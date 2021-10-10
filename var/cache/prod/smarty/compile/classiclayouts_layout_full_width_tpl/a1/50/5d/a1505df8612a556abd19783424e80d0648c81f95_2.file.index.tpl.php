<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:46:28
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616318e4d72e84_46935316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1505df8612a556abd19783424e80d0648c81f95' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/index.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616318e4d72e84_46935316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1988423796616318e4d6fb00_86162346', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2084538496616318e4d702e0_30982356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_88786807616318e4d71540_21351308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_790099160616318e4d70e49_50327055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88786807616318e4d71540_21351308', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1988423796616318e4d6fb00_86162346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1988423796616318e4d6fb00_86162346',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2084538496616318e4d702e0_30982356',
  ),
  'page_content' => 
  array (
    0 => 'Block_790099160616318e4d70e49_50327055',
  ),
  'hook_home' => 
  array (
    0 => 'Block_88786807616318e4d71540_21351308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2084538496616318e4d702e0_30982356', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_790099160616318e4d70e49_50327055', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
