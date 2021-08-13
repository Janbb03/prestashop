<?php /* Smarty version Smarty-3.1.19, created on 2021-08-04 21:08:31
         compiled from "C:\sampp\htdocs\prestashop\modules\productpaymentlogos\views\templates\hook\productpaymentlogos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961024127610b481f0fd077-62906534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e87286f0be36e6dee8cd3dde068254d69668fa' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\modules\\productpaymentlogos\\views\\templates\\hook\\productpaymentlogos.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961024127610b481f0fd077-62906534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_title' => 0,
    'banner_link' => 0,
    'module_dir' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_610b481f1c4372_22943657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610b481f1c4372_22943657')) {function content_610b481f1c4372_22943657($_smarty_tpl) {?>
<!-- Productpaymentlogos module -->
<div id="product_payment_logos">
	<div class="box-security">
    <h5 class="product-heading-h5"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h5>
  	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" />
	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?></a><?php }?>
    </div>
</div>
<!-- /Productpaymentlogos module -->
<?php }} ?>
