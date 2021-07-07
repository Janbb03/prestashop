<?php /*%%SmartyHeaderCode:129913634760e4f15cc39771-25169445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3d15ac282b0fb2b4144e22f31a1a626f838320' => 
    array (
      0 => 'C:\\sampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129913634760e4f15cc39771-25169445',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60e4f15ceeb062_87057761',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e4f15ceeb062_87057761')) {function content_60e4f15ceeb062_87057761($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Información</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost/prestashop/bajamos-precios" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop/nuevos-productos" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/prestashop/mas-vendido" title="Los más vendidos">
						Los más vendidos
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/prestashop/tiendas" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop/contactanos" title="Contáctenos">
					Contáctenos
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/prestashop/content/3-terminos-y-condiciones-de-uso" title="Términos y condiciones">
							Términos y condiciones
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/prestashop/content/4-sobre-nosotros" title="Sobre nosotros">
							Sobre nosotros
						</a>
					</li>
													<li>
				<a href="http://localhost/prestashop/mapa-web" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
