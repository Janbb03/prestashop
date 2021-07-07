<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 04:24:59
         compiled from "C:\sampp\htdocs\prestashop\admin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39496497160e3befb47f000-85380444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e065b9a134035b66e3bb2048f4b859cc77db92cd' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39496497160e3befb47f000-85380444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e3befb4c3157_18810180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e3befb4c3157_18810180')) {function content_60e3befb4c3157_18810180($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
