<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:35:12
  from '/Applications/MAMP/htdocs/prestashop/admin217bntkst/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616316405b1dd2_00855652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4bad7a6fa9642ab669053ae223f2cc9a7050ae6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin217bntkst/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616316405b1dd2_00855652 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
