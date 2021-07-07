<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 04:24:58
         compiled from "C:\sampp\htdocs\prestashop\admin\themes\default\template\helpers\list\list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52759326860e3befa83ca92-47186194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a32bc8f27e85a62b522f3ec557b3156d990cd7' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_supplier_order_receipt.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52759326860e3befa83ca92-47186194',
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
  'unifunc' => 'content_60e3befa8a78f8_08269310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e3befa8a78f8_08269310')) {function content_60e3befa8a78f8_08269310($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
