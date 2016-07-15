<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-evolv';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Don't provide a container on main.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['container_class'] = '';

	// Give the default page a fluid container.
	$boldgrid_framework_configs['template']['pages']['default']['container_class'] = '';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'5' => array( '[menu]secondary' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'8' => array( '[menu]tertiary' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'6' => array( '[menu]footer_center', '[action]boldgrid_display_attribution_links' ),
		'7' => array( '[menu]social' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#0a0a05',
			'colors' => array(
				'#0a0a05',
				'#f5d76e',
				'#f5d76e',
				'#202020',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#0a0a05',
			'colors' => array(
				'#0a0a05',
				'#70e1ff',
				'#70e1ff',
				'#4d565b',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#0a0b05',
			'colors' => array(
				'#455e41',
				'#cbed7d',
				'#cbed7d',
				'#455e41',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#0a0b05',
			'colors' => array(
				'#0a0b05',
				'#aeccb4',
				'#aeccb4',
				'#402b2a',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#0a0b05',
			'colors' => array(
				'#926c81',
				'#ff0090',
				'#0d925d',
				'#222222',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Property Management':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		// .
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 11;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Sans-Serif';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1.entry-title'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.7,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h2.slogan'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.4,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2, .mod-beta-2 h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.5,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-gamma-2 h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.1,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-gamma-2 p'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 1.1,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';

	// Social Menus.
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Enable Sticky Nav in Header.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-nav'] = true;

	/**
	 * Widgets
	 */
	 $widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<div class="call-to-action">
					<h2 class="slogan">LET US ELEVATE YOUR STANDARDS</h2>
					<p class="p-button-primary">
						<a class="button-primary" href="about-us">LEARN MORE</a>
					</p>
				</div>
			</div>
		</div>

HTML;

	// Widget 1.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Name Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Footer Bottom Right';
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Content Area';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Raleway';
	$controls['logo_font_size']['default'] = 24;
	$controls['logo_margin_top']['default'] = 10;

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
