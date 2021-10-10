<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:47:26
  from '/Applications/MAMP/htdocs/prestashop/admin217bntkst/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163191e1c3751_46676006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4419f1d768f5309332f0c9b4cffbb85c91f084c3' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin217bntkst/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6163191e1c3751_46676006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17454060776163191e1c2a26_98980527', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_17454060776163191e1c2a26_98980527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_17454060776163191e1c2a26_98980527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
