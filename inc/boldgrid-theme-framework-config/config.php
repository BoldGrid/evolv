<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-evolv'; // Text domain
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#0a0a05',
			'colors' => array(
                '#0a0a05',
                '#f5d76e',
                '#f5d76e',
                '#202020',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#0a0a05',
			'colors' => array(
				'#0a0a05',
                '#70e1ff',
                '#70e1ff',
                '#4d565b',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#0a0b05',
			'colors' => array(
				'#455e41',
                '#cbed7d',
                '#cbed7d',
                '#455e41',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#0a0b05',
			'colors' => array(
				'#0a0b05',
                '#aeccb4',
                '#aeccb4',
                '#402b2a',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#0a0b05',
			'colors' => array(
				'#926c81',
                '#ff0090',
                '#0d925d',
                '#222222',
			)
		)
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 14: //<-- Fashion
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 18: //<-- Property Management
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 21: //<-- Consulting
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		
		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 11;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Roboto';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 15;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Typography Relationships
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action .slogan' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.4, 
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.5, 
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-beta-2 h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.4, 
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-gamma-2 h2' ]= array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.1, 
	);

	// Fonts & Icons
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['social'] = "Footer Bottom Right";
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header"; 
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';
	
	// Enable Sticky Nav in Header
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

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Content Area';
	
	// Configs above will override framework defaults
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

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
