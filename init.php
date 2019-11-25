<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'themo_kit_theme_addons_register_required_plugins' );

function themo_kit_theme_addons_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'               => 'addons-for-elementor',
			'slug'               => 'addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'advanced-addons-for-elementor',
			'slug'               => 'advanced-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/advanced-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'advanced-elementor',
			'slug'               => 'advanced-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/advanced-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'addons-for-elementor',
			'slug'               => 'addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/addons-for-elementor.zip', // The plugin source.
		),
		
		array(
			'name'               => 'analogwp-templates',
			'slug'               => 'analogwp-templates',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/analogwp-templates.zip', // The plugin source.
		),

		array(
			'name'               => 'anywhere-elementor',
			'slug'               => 'anywhere-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/anywhere-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'bdthemes-element-pack-lite',
			'slug'               => 'bdthemes-element-pack-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/bdthemes-element-pack-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'bdthemes-prime-slider-lite',
			'slug'               => 'bdthemes-prime-slider-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/bdthemes-prime-slider-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'bemax-elementor',
			'slug'               => 'bemax-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/bemax-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'blogmentor',
			'slug'               => 'blogmentor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/blogmentor.zip', // The plugin source.
		),

		array(
			'name'               => 'cafe-lite',
			'slug'               => 'cafe-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/cafe-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'clever-mega-menu-for-elementor',
			'slug'               => 'clever-mega-menu-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/clever-mega-menu-for-elementor.zip', // The plugin source.
		),


		array(
			'name'               => 'codevision-elementor-smart-fonts',
			'slug'               => 'codevision-elementor-smart-fonts',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/codevision-elementor-smart-fonts.zip', // The plugin source.
		),

		array(
			'name'               => 'content-aware-sidebars',
			'slug'               => 'content-aware-sidebars',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/content-aware-sidebars.zip', // The plugin source.
		),

		array(
			'name'               => 'cpt-magic-tool-addons-for-elementor',
			'slug'               => 'cpt-magic-tool-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/cpt-magic-tool-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'custom-fonts',
			'slug'               => 'custom-fonts',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/custom-fonts.zip', // The plugin source.
		),

		array(
			'name'               => 'custom-woo-builder-for-elementor',
			'slug'               => 'custom-woo-builder-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/custom-woo-builder-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'drozd-addons-for-elementor',
			'slug'               => 'drozd-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/drozd-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'dynamic-animations-for-elementor',
			'slug'               => 'dynamic-animations-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/dynamic-animations-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'dynamicconditions',
			'slug'               => 'dynamicconditions',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/dynamicconditions.zip', // The plugin source.
		),

		array(
			'name'               => 'dynamic-elementor-addons',
			'slug'               => 'dynamic-elementor-addons',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/dynamic-elementor-addons.zip', // The plugin source.
		),

		array(
			'name'               => 'dynamic-visibility-for-elementor',
			'slug'               => 'dynamic-visibility-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/dynamic-visibility-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'easy-digital-downloads-paddle-integration',
			'slug'               => 'easy-digital-downloads-paddle-integration',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/easy-digital-downloads-paddle-integration.zip', // The plugin source.
		),

		array(
			'name'               => 'ele-custom-skin',
			'slug'               => 'ele-custom-skin',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ele-custom-skin.zip', // The plugin source.
		),

		array(
			'name'               => 'edd-wp-downloads',
			'slug'               => 'edd-wp-downloads',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/edd-wp-downloads.zip', // The plugin source.
		),


		array(
			'name'               => 'elementor-addon-widgets',
			'slug'               => 'elementor-addon-widgets',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/elementor-addon-widgets.zip', // The plugin source.
		),

		array(
			'name'               => 'elements-for-lifterlms',
			'slug'               => 'elements-for-lifterlms',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/elements-for-lifterlms.zip', // The plugin source.
		),

		array(
			'name'               => 'elementskit-lite',
			'slug'               => 'elementskit-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/elementskit-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'email-customizer-for-woocommerce',
			'slug'               => 'email-customizer-for-woocommerce',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/email-customizer-for-woocommerce.zip', // The plugin source.
		),
		
		array(
			'name'               => 'essential-addons-for-elementor-lite',
			'slug'               => 'essential-addons-for-elementor-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/essential-addons-for-elementor-lite.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'essential-premium-addons-for-elementor',
			'slug'               => 'essential-premium-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/essential-premium-addons-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'events-addon-for-elementor',
			'slug'               => 'events-addon-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/events-addon-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'exclusive-addons-for-elementor',
			'slug'               => 'exclusive-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/exclusive-addons-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'flexible-elementor-panel',
			'slug'               => 'flexible-elementor-panel',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/flexible-elementor-panel.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'gold-addons-for-elementor',
			'slug'               => 'gold-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/gold-addons-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'groovy-menu-free',
			'slug'               => 'groovy-menu-free',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/groovy-menu-free.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'happy-elementor-addons',
			'slug'               => 'happy-elementor-addons',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/happy-elementor-addons.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'ht-builder',
			'slug'               => 'ht-builder',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ht-builder.zip', // The plugin source.
		),

		array(
			'name'               => 'ht-mega-for-elementor',
			'slug'               => 'ht-mega-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ht-mega-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'ht-menu-lite',
			'slug'               => 'ht-menu-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ht-menu-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'ht-portfolio',
			'slug'               => 'ht-portfolio',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ht-portfolio.zip', // The plugin source.
		),

		array(
			'name'               => 'ht-slider-for-elementor',
			'slug'               => 'ht-slider-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ht-slider-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'ht-team-member',
			'slug'               => 'ht-team-member',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ht-team-member.zip', // The plugin source.
		),

		array(
			'name'               => 'impressive-sliders-for-elementor-page-builder',
			'slug'               => 'impressive-sliders-for-elementor-page-builder',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/impressive-sliders-for-elementor-page-builder.zip', // The plugin source.
		),

		array(
			'name'               => 'info-boxes-for-elementor',
			'slug'               => 'info-boxes-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/info-boxes-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'inspirelite-addons-for-elementor',
			'slug'               => 'inspirelite-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/inspirelite-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'jetwidgets-for-elementor',
			'slug'               => 'jetwidgets-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/jetwidgets-for-elementor.zip', // The plugin source.
		),
		
		array(
			'name'               => 'jetwoo-widgets-for-elementor',
			'slug'               => 'jetwoo-widgets-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/jetwoo-widgets-for-elementor.zip', // The plugin source.
		),		

		array(
			'name'               => 'kadence-woocommerce-elementor',
			'slug'               => 'kadence-woocommerce-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/kadence-woocommerce-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'kadence-woocommerce-email-designer',
			'slug'               => 'kadence-woocommerce-email-designer',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/kadence-woocommerce-email-designer.zip', // The plugin source.
		),

		array(
			'name'               => 'layouts-for-elementor',
			'slug'               => 'layouts-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/layouts-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'magical-addons-for-elementor',
			'slug'               => 'magical-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/magical-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'massive-addons-for-elementor',
			'slug'               => 'massive-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/massive-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'master-addons',
			'slug'               => 'master-addons',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/master-addons.zip', // The plugin source.
		),

		array(
			'name'               => 'mighty-addons',
			'slug'               => 'mighty-addons',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/mighty-addons.zip', // The plugin source.
		),

		array(
			'name'               => 'modal-for-elementor',
			'slug'               => 'modal-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/modal-for-elementor.zip', // The plugin source.
		),


		array(
			'name'               => 'oneelements-ultimate-addons-for-elementor',
			'slug'               => 'oneelements-ultimate-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/oneelements-ultimate-addons-for-elementor.zip', // The plugin source.
		),
		
		array(
			'name'               => 'onex-custom-woo-builder',
			'slug'               => 'onex-custom-woo-builder',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/onex-custom-woo-builder.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'opal-megamenu-for-elementor',
			'slug'               => 'opal-megamenu-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/opal-megamenu-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'opal-widgets-for-elementor',
			'slug'               => 'opal-widgets-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/opal-widgets-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'page-builder-companion',
			'slug'               => 'page-builder-companion',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/page-builder-companion.zip', // The plugin source.
		),

		array(
			'name'               => 'piotnet-addons-for-elementor',
			'slug'               => 'piotnet-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/piotnet-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'post-grid-builder-addon-for-elementor',
			'slug'               => 'post-grid-builder-addon-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/post-grid-builder-addon-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'powerpack-lite-for-elementor',
			'slug'               => 'powerpack-lite-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/powerpack-lite-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'premium-addons-for-elementor',
			'slug'               => 'premium-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/premium-addons-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'press-elements',
			'slug'               => 'press-elements',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/press-elements.zip', // The plugin source.
		),

		array(
			'name'               => 'pt-elementor-addons-lite',
			'slug'               => 'pt-elementor-addons-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/pt-elementor-addons-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'rselements-lite',
			'slug'               => 'rselements-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/rselements-lite.zip', // The plugin source.
		),

		array(
			'name'               => 'rt-elementor-widgets',
			'slug'               => 'rt-elementor-widgets',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/rt-elementor-widgets.zip', // The plugin source.
		),

		array(
			'name'               => 'ruvuv-extension-for-elementor',
			'slug'               => 'ruvuv-extension-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ruvuv-extension-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'safan-addons',
			'slug'               => 'safan-addons',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/safan-addons.zip', // The plugin source.
		),

		array(
			'name'               => 'sb-image-hover-effects',
			'slug'               => 'sb-image-hover-effects',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/sb-image-hover-effects.zip', // The plugin source.
		),

		array(
			'name'               => 'shortcode-elementor',
			'slug'               => 'shortcode-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/shortcode-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'sina-extension-for-elementor',
			'slug'               => 'sina-extension-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/sina-extension-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'stars-testimonials-with-slider-and-masonry-grid',
			'slug'               => 'stars-testimonials-with-slider-and-masonry-grid',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/stars-testimonials-with-slider-and-masonry-grid.zip', // The plugin source.
		),

		array(
			'name'               => 'tci-ultimate-element-themes',
			'slug'               => 'tci-ultimate-element-themes',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/tci-ultimate-element-themes.zip', // The plugin source.
		),

		array(
			'name'               => 'templatesnext-toolkit',
			'slug'               => 'templatesnext-toolkit',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/templatesnext-toolkit.zip', // The plugin source.
		),

		array(
			'name'               => 'the-plus-addons-for-elementor-page-builder',
			'slug'               => 'the-plus-addons-for-elementor-page-builder',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/the-plus-addons-for-elementor-page-builder.zip', // The plugin source.
		),
		
		array(
			'name'               => 'ultimate-addons-for-elementor',
			'slug'               => 'ultimate-addons-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ultimate-addons-for-elementor.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'ultimate-elements-elementor-page-builder',
			'slug'               => 'ultimate-elements-elementor-page-builder',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/ultimate-elements-elementor-page-builder.zip', // The plugin source.
		),		
		
		array(
			'name'               => 'unlimited-elements-for-elementor',
			'slug'               => 'unlimited-elements-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/unlimited-elements-for-elementor.zip', // The plugin source.
		),				
	
		array(
			'name'               => 'visual-portfolio',
			'slug'               => 'visual-portfolio',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/visual-portfolio.zip', // The plugin source.
		),

		array(
			'name'               => 'void-elementor-post-grid-addon-for-elementor-page-builder',
			'slug'               => 'void-elementor-post-grid-addon-for-elementor-page-builder',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/void-elementor-post-grid-addon-for-elementor-page-builder.zip', // The plugin source.
		),

		array(
			'name'               => 'web-disrupt-elementor-extended-template-library',
			'slug'               => 'web-disrupt-elementor-extended-template-library',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/web-disrupt-elementor-extended-template-library.zip', // The plugin source.
		),

		array(
			'name'               => 'white-label-branding-elementor',
			'slug'               => 'white-label-branding-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/white-label-branding-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'widgetkit-for-elementor',
			'slug'               => 'widgetkit-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/widgetkit-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'woocommerce-dynamic-gallery',
			'slug'               => 'woocommerce-dynamic-gallery',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/woocommerce-dynamic-gallery.zip', // The plugin source.
		),

		array(
			'name'               => 'woocustomizer',
			'slug'               => 'woocustomizer',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/woocustomizer.zip', // The plugin source.
		),

		array(
			'name'               => 'woolentor-addons',
			'slug'               => 'woolentor-addons',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/woolentor-addons.zip', // The plugin source.
		),

		array(
			'name'               => 'wpkoi-templates-for-elementor',
			'slug'               => 'wpkoi-templates-for-elementor',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/wpkoi-templates-for-elementor.zip', // The plugin source.
		),

		array(
			'name'               => 'wp-post-grid-slider-filter-by-xgenious',
			'slug'               => 'wp-post-grid-slider-filter-by-xgenious',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/wp-post-grid-slider-filter-by-xgenious.zip', // The plugin source.
		),

		array(
			'name'               => 'wunderwp',
			'slug'               => 'wunderwp',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/wunderwp.zip', // The plugin source.
		),

		array(
			'name'               => 'yellow-pencil-visual-theme-customizer',
			'slug'               => 'yellow-pencil-visual-theme-customizer',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/yellow-pencil-visual-theme-customizer.zip', // The plugin source.
		),

		array(
			'name'               => 'bdthemes-prime-slider-lite',
			'slug'               => 'bdthemes-prime-slider-lite',
			'source'             => THEMO_KIT_THEME_ADDONS_PATH . 'plugins/bdthemes-prime-slider-lite.zip', // The plugin source.
		),
	);

	$config = array(
		'id'           => 'themo_kit_theme_addons',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
