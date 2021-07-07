<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 04:24:56
         compiled from "C:\sampp\htdocs\prestashop\admin\themes\default\template\form_submit_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135789883760e3bef81c7a82-09116843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515643146742b1c18feb5f2974d77a485d80bcba' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\form_submit_ajax.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135789883760e3bef81c7a82-09116843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e3bef8256375_40196748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e3bef8256375_40196748')) {function content_60e3bef8256375_40196748($_smarty_tpl) {?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit(function(e) {
			e.preventDefault();
			var form_datas = new Object;
			form_datas['liteDisplaying'] = 1;
			form_datas['submitFormAjax'] = 1;
			var form_inputs = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form input, #<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form textarea, #<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form button');
			var form_selects = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form select');
			$.each(form_inputs, function() {
				if (this.type == 'radio' || this.type == 'checkbox')
					if (!this.checked)
						return true;
				form_datas[this.name] = this.value;
			});
			$.each(form_selects, function() {
				if	(this.options != undefined && this.options.selectedIndex != undefined && this[this.options.selectedIndex] != undefined)
					form_datas[this.name] = this[this.options.selectedIndex].value;
			});
			$.ajax({
				type: this.method,
				url : this.action,
				async: true,
				dataType: "html",
				data : form_datas,
				success : function(res)
				{
					// Replace de body by the new one
					$('body').html(res.replace(/^.*<body>/, '').replace(/<\/body>.*$/, ''));
				}
			});
		});
	});
</script>
<?php }} ?>
