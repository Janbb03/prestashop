<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 19:15:12
         compiled from "C:\sampp\htdocs\prestashop\modules\ps_metrics\\views\templates\hook\HookDashboardZoneTwo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114691698760e4f2105fb240-61186959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db6faac98fce2111cde0a1996cc90a2db40d2c9' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\modules\\ps_metrics\\\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1625539152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114691698760e4f2105fb240-61186959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pathDashboardVendor' => 0,
    'pathDashboardApp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e4f21066e177_56099355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e4f21066e177_56099355')) {function content_60e4f21066e177_56099355($_smarty_tpl) {?>

<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardVendor']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel=preload as=script>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardApp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel=preload as=script>

<div id="dashboardApp"></div>

<script src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardVendor']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<script src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathDashboardApp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<?php }} ?>
