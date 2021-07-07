<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 04:25:00
         compiled from "C:\sampp\htdocs\prestashop\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26703956260e3befc071d00-74421330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8885238726a4a87bdc2af81a1d038cc2786b1c4a' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26703956260e3befc071d00-74421330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e3befc0b56d2_43099906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e3befc0b56d2_43099906')) {function content_60e3befc0b56d2_43099906($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
