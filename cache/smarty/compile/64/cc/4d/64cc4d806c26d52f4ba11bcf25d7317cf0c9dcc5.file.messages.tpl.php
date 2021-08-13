<?php /* Smarty version Smarty-3.1.19, created on 2021-08-10 20:36:38
         compiled from "C:\sampp\htdocs\prestashop\modules\themeconfigurator\views\templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905035931611329a6512746-42764632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64cc4d806c26d52f4ba11bcf25d7317cf0c9dcc5' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\modules\\themeconfigurator\\views\\templates\\admin\\messages.tpl',
      1 => 1556664134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '905035931611329a6512746-42764632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_611329a677cb89_47235299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_611329a677cb89_47235299')) {function content_611329a677cb89_47235299($_smarty_tpl) {?>

<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)) {?>style="display:none;"<?php }?> class="message alert alert-<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value=='error') {?>danger<?php } else { ?>success<?php }?>">
	<div><?php if (isset($_smarty_tpl->tpl_vars['text']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div>
</div><?php }} ?>
