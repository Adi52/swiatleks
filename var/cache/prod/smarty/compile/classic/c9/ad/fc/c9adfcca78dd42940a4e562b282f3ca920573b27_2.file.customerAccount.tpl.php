<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:46:18
  from '/Applications/MAMP/htdocs/prestashop/modules/psgdpr/views/templates/front/customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616318da78ac39_67197533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9adfcca78dd42940a4e562b282f3ca920573b27' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/psgdpr/views/templates/front/customerAccount.tpl',
      1 => 1633859176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616318da78ac39_67197533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
