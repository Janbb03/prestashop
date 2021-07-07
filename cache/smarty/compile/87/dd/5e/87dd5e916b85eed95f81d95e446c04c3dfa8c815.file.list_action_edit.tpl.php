<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 19:16:14
         compiled from "C:\sampp\htdocs\prestashop\admin920c3p7yd\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170718673260e4f24e7a4a26-45631890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87dd5e916b85eed95f81d95e446c04c3dfa8c815' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\admin920c3p7yd\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170718673260e4f24e7a4a26-45631890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e4f24e825879_19022679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e4f24e825879_19022679')) {function content_60e4f24e825879_19022679($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
