<?php /* Smarty version Smarty-3.1.19, created on 2021-07-06 04:24:45
         compiled from "C:\sampp\htdocs\prestashop\themes\default-bootstrap\modules\blockmyaccount\blockmyaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79927080260e3beed551b13-39138511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911c883bd83191b9106baf54226c5e4bb4f71d40' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockmyaccount\\blockmyaccount.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79927080260e3beed551b13-39138511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e3beed5c48c1_64014034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e3beed5c48c1_64014034')) {function content_60e3beed5c48c1_64014034($_smarty_tpl) {?>

<!-- Block myaccount module -->
<div class="block myaccount-column">
	<p class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl);?>

		</a>
	</p>
	<div class="block_content list-block">
		<ul>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl);?>

				</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
				<li>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">	<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl);?>

				</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl);?>

				</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl);?>

				</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
				<li>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

		</ul>
		<div class="logout">
			<a 
			class="btn btn-default button button-small" 
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" 
			title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
">
				<span><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
