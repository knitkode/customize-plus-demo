<?php defined( 'ABSPATH' ) or die;

/**
 * Customize options file
 *
 * @package      packageName
 * @since        0.0.1
 * @link         http://homepage.com
 * @author       name <email> (http://url.io)
 * @copyright    2018 | GPL
 * @license      GPL
 */

return array(
	array(
		'subject' => 'panel',
		'id' => 'example-panel',
		'title' => esc_html__( 'Example panel', 'i18n' ),
		'description' => esc_html__( 'Layout generic options, globally change the look and feel', 'i18n' ),
		'dashicon' => 309,
		'type' => 'kkcp_panel',
		'sections' => array(
			array(
				'id' => 'example-section',
				'title' => esc_html__( 'Example section', 'i18n' ),
				'description' => esc_html__( 'Just a sample section.', 'i18n' ),
				'type' => 'kkcp_section',
				'fields' => array(
					'in-panel-control' => array(
						'control' => array(
							'label' => esc_html__( 'Example control', 'i18n' ),
							'description' => __( "Just a sample content control to show a control inside a section *inside a panel.*", 'i18n' ),
							'type' => 'kkcp_content',
						),
					),
				),
			),
		)
	),
	array(
		'subject' => 'section',
		'id' => 'section-settings-apis',
		'title' => esc_html__( 'Settings APIs', 'i18n' ),
		'description' => esc_html__( 'This section simplyshows that with Customize Plus you can use both theme mods and options, just as with WordPress', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 486,
		'fields' => array(
			'api-theme_mod' => array(
				'setting' => array(
					'default' => 'I am managed by the Theme Mods API',
				),
				'control' => array(
					'label' => esc_html__( 'Theme mods API', 'i18n' ),
					'description' => esc_html__( 'This is used by default. Check the [WordPress codex](https://codex.wordpress.org/Theme_Modification_API).', 'i18n' ),
					'type' => 'kkcp_text',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'I am managed by the Theme Mods API',
		'type' => 'setting',
	),
	'control' => array(
		'type' => 'kkcp_text'
	),
),
```",
					),
				),
			),
			'api-option' => array(
				'setting' => array(
					'default' => 'I am managed by the Options API',
					'type' => 'option',
				),
				'control' => array(
					'label' => esc_html__( 'Options API', 'i18n' ),
					'description' => __( "Use `'type' => 'option'` in the setting's args, as with the normal WordPress API, to use the [Options API](https://codex.wordpress.org/Options_API) for a specific setting.", 'i18n' ),
					'type' => 'kkcp_text',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'I am managed by the Options API',
		'type' => 'setting',
	),
	'control' => array(
		'type' => 'kkcp_text'
	),
),
```",
					),
				),
			),
		)
	),
	array(
		'subject' => 'section',
		'id' => 'section-colors',
		'title' => esc_html__( 'Color controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 309,
		'fields' => array(
			'color' => array(
				'setting' => array(
					'default' => 'transparent',
				),
				'control' => array(
					'label' => esc_html__( 'Color', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_color',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
			'default' => 'transparent',
		),
		'control' => array(
			'label' => esc_html__( 'Color', 'i18n' ),
			'type' => 'kkcp_color',
	),
),
```",
					),
				),
			),
			'color-no-transparent' => array(
				'setting' => array(
					'default' => '#f00',
				),
				'control' => array(
					'label' => esc_html__( 'Disallow Transparent', 'i18n' ),
					'description' => esc_html__( 'Disable the transparent button, `transparent` value not allowed.', 'i18n' ),
					'type' => 'kkcp_color',
					'disallowTransparent' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#f00',
	),
	'control' => array(
		'label' => esc_html__( 'Disallow Transparent', 'i18n' ),
		'type' => 'kkcp_color',
		'disallowTransparent' => true,
	),
),
```",
					),
				),
			),
			'color-alpha' => array(
				'setting' => array(
					'default' => 'rgba(0,255,130,.5)',
				),
				'control' => array(
					'label' => esc_html__( 'Allow Alpha', 'i18n' ),
					'description' => esc_html__( 'Allow `rgba` colors. Show a slider to control the alpha channel.', 'i18n' ),
					'type' => 'kkcp_color',
					'allowAlpha' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'rgba(0,255,130,.5)',
	),
	'control' => array(
		'label' => esc_html__( 'Allow Alpha', 'i18n' ),
		'type' => 'kkcp_color',
		'allowAlpha' => true,
	),
),
```",
					),
				),
			),
			'color-palette1' => array(
				'setting' => array(
					'default' => '#444',
				),
				'control' => array(
					'label' => esc_html__( 'Palette only', 'i18n' ),
					'description' => esc_html__( 'Disable the normal color picker and show only a palette with the color you define. Only these colors are allowed when `showPaletteOnly` is set to `true`. The `palette` arg is an array of arrays where each array it is a row of color choices in the UI.', 'i18n' ),
					'type' => 'kkcp_color',
					'showPaletteOnly' => true,
					'palette' => array(
						array( '#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#444',
	),
	'control' => array(
		'label' => esc_html__( 'Palette only', 'i18n' ),
		'type' => 'kkcp_color',
		'showPaletteOnly' => true,
		'palette' => array(
			array( '#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff' ),
		),
	),
),
```",
					),
				),
			),
			'color-palette2' => array(
				'setting' => array(
					'default' => '#d9ead3',
				),
				'control' => array(
					'label' => esc_html__( 'Palette with picker', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_color',
					'palette' => array(
						array( '#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#d9ead3',
	),
	'control' => array(
		'label' => esc_html__( 'Palette with picker', 'i18n' ),
		'type' => 'kkcp_color',
		'palette' => array(
			array( '#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff' ),
		),
	),
),
```",
					),
				),
			),
			'color-palette3' => array(
				'setting' => array(
					'default' => '#fce5cd',
				),
				'control' => array(
					'label' => esc_html__( 'Palette and hidden picker', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_color',
					'showPaletteOnly' => true,
					'togglePaletteOnly' => true,
					'palette' => array(
						array( '#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff' ),
						array( '#f00', '#f90', '#ff0', '#0f0', '#0ff', '#00f', '#90f', '#f0f' ),
						array( '#f4cccc', '#fce5cd', '#fff2cc', '#d9ead3', '#d0e0e3', '#cfe2f3', '#d9d2e9', '#ead1dc' ),
						array( '#ea9999', '#f9cb9c', '#ffe599', '#b6d7a8', '#a2c4c9', '#9fc5e8', '#b4a7d6', '#d5a6bd' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#fce5cd',
	),
	'control' => array(
		'label' => esc_html__( 'Palette and hidden picker', 'i18n' ),
		'type' => 'kkcp_color',
		'showPaletteOnly' => true,
		'togglePaletteOnly' => true,
		'palette' => array(
			array( '#000', '#444', '#666', '#999', '#ccc', '#eee', '#f3f3f3', '#fff' ),
			array( '#f00', '#f90', '#ff0', '#0f0', '#0ff', '#00f', '#90f', '#f0f' ),
			array( '#f4cccc', '#fce5cd', '#fff2cc', '#d9ead3', '#d0e0e3', '#cfe2f3', '#d9d2e9', '#ead1dc' ),
			array( '#ea9999', '#f9cb9c', '#ffe599', '#b6d7a8', '#a2c4c9', '#9fc5e8', '#b4a7d6', '#d5a6bd' ),
		),
	),
),
```",
					),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-sizes',
		'title' => esc_html__( 'Size controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 211,
		'fields' => array(
			'slider' => array(
				'setting' => array(
					'default' => '14px',
				),
				'control' => array(
					'label' => esc_html__( 'Slider (default->px)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_slider',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '14px',
	),
	'control' => array(
		'label' => esc_html__( 'Slider (default->px)', 'i18n' ),
		'type' => 'kkcp_slider',
	),
),
```",
					),
				),
			),
			'slider-em' => array(
				'setting' => array(
					'default' => '1.1em',
				),
				'control' => array(
					'label' => esc_html__( 'Slider (em)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_slider',
					'units' => array( 'em' ),
					'input_attrs' => array(
						'min' => 0,
						'max' => 3,
						'step' => 0.1,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '1.1em',
	),
	'control' => array(
		'label' => esc_html__( 'Slider (em)', 'i18n' ),
		'type' => 'kkcp_slider',
		'units' => array( 'em' ),
		'input_attrs' => array(
			'min' => 0,
			'max' => 3,
			'step' => 0.1,
		),
	),
),
```",
					),
				),
			),
			'slider-px-percent' => array(
				'setting' => array(
					'default' => '15%',
				),
				'control' => array(
					'label' => esc_html__( 'Slider (px or percent)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_slider',
					'units' => array( 'px', '%' ),
					'input_attrs' => array(
						'min' => 0,
						'max' => 300,
						'step' => 1,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '15%',
	),
	'control' => array(
		'label' => esc_html__( 'Slider (px or percent)', 'i18n' ),
		'type' => 'kkcp_slider',
		'units' => array( 'px', '%' ),
		'input_attrs' => array(
			'min' => 0,
			'max' => 300,
			'step' => 1,
		),
	),
),
```",
					),
				),
			),
			'slider-no-units' => array(
				'setting' => array(
					'default' => 44,
				),
				'control' => array(
					'label' => esc_html__( 'Slider (no units)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_slider',
					'units' => array(),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 44,
	),
	'control' => array(
		'label' => esc_html__( 'Slider (no units)', 'i18n' ),
		'type' => 'kkcp_slider',
		'units' => array(),
	),
),
```",
					),
				),
			),
		)
	),
	array(
		'subject' => 'section',
		'id' => 'section-radio',
		'title' => esc_html__( 'Radio controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 159,
		'fields' => array(
			'radio' => array(
				'setting' => array(
					'default' => 'standard',
				),
				'control' => array(
					'label' => esc_html__( 'Radio', 'i18n' ),
					'type' => 'kkcp_radio',
					'choices' => array(
						'standard' => array(
							'label' => esc_html__( 'Standard', 'i18n' ),
							'help' => 'popover',
							'help_title' => esc_html__( 'Standard value', 'i18n' ),
							'help_img' => 'view-skeleton--bootstrap.jpg',
						),
						'one' => array(
							'label' => esc_html__( 'Choice one', 'i18n' ),
						),
						'two' => array(
							'label' => esc_html__( 'Choice two', 'i18n' ),
						),
						'three' => array(
							'label' => esc_html__( 'Choice three', 'i18n' ),
						),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'standard',
	),
	'control' => array(
		'label' => esc_html__( 'Radio', 'i18n' ),
		'type' => 'kkcp_radio',
		'choices' => array(
			'standard' => array(
				'label' => esc_html__( 'Standard', 'i18n' ),
				'help' => 'popover',
				'help_title' => esc_html__( 'Standard value', 'i18n' ),
				'help_img' => 'view-skeleton--bootstrap.jpg',
			),
			'one' => array(
				'label' => esc_html__( 'Choice one', 'i18n' ),
			),
			'two' => array(
				'label' => esc_html__( 'Choice two', 'i18n' ),
			),
			'three' => array(
				'label' => esc_html__( 'Choice three', 'i18n' ),
			),
		),
	),
),
```",
					),
				),
			),
			'buttonset' => array(
				'setting' => array(
					'default' => 'fluid',
				),
				'control' => array(
					'label' => esc_html__( 'Buttonset', 'i18n' ),
					'type' => 'kkcp_buttonset',
					'guide' => array(
						'title' => esc_html__( 'Buttonset guide', 'i18n' ),
						'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe laboriosam sunt ab, error explicabo cupiditate alias blanditiis minima inventore tempora necessitatibus excepturi mollitia quam laborum unde maxime laudantium! Ratione, impedit!', 'i18n' ),
						'video' => 'uD7_Vt5q2q8',
					),
					'choices' => array(
						'boxed' => esc_html__( 'Boxed', 'i18n' ),
						'fluid' => esc_html__( 'Fluid', 'i18n' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'boxed',
	),
	'control' => array(
		'label' => esc_html__( 'Buttonset', 'i18n' ),
		'type' => 'kkcp_buttonset',
		'choices' => array(
			'boxed' => esc_html__( 'Boxed', 'i18n' ),
			'fluid' => esc_html__( 'Fluid', 'i18n' ),
		),
	),
),
```",
					),
				),
			),
			'buttonset-three' => array(
				'setting' => array(
					'default' => 'may',
				),
				'control' => array(
					'label' => esc_html__( 'Buttonset three', 'i18n' ),
					'type' => 'kkcp_buttonset',
					'guide' => array(
						'title' => esc_html__( 'Buttonset guide', 'i18n' ),
						'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe laboriosam sunt ab, error explicabo cupiditate alias blanditiis minima inventore tempora necessitatibus excepturi mollitia quam laborum unde maxime laudantium! Ratione, impedit!', 'i18n' ),
						'video' => 'uD7_Vt5q2q8',
					),
					'choices' => array(
						'may' => esc_html__( 'May', 'i18n' ),
						'ibanez' => esc_html__( 'Ibanez', 'i18n' ),
						'ward' => esc_html__( 'Ward', 'i18n' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'boxed',
	),
	'control' => array(
		'label' => esc_html__( 'Buttonset three', 'i18n' ),
		'type' => 'kkcp_buttonset',
		'choices' => array(
			'may' => esc_html__( 'May', 'i18n' ),
			'ibanez' => esc_html__( 'Ibanez', 'i18n' ),
			'ward' => esc_html__( 'Ward', 'i18n' ),
		),
	),
),
```",
					),
				),
			),
			'buttonset-four' => array(
				'setting' => array(
					'default' => 'six',
				),
				'control' => array(
					'label' => esc_html__( 'Buttonset three', 'i18n' ),
					'type' => 'kkcp_buttonset',
					'guide' => array(
						'title' => esc_html__( 'Buttonset guide', 'i18n' ),
						'text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe laboriosam sunt ab, error explicabo cupiditate alias blanditiis minima inventore tempora necessitatibus excepturi mollitia quam laborum unde maxime laudantium! Ratione, impedit!', 'i18n' ),
						'video' => 'uD7_Vt5q2q8',
					),
					'choices' => array(
						'one' => esc_html__( 'One', 'i18n' ),
						'two' => esc_html__( 'Two', 'i18n' ),
						'five' => esc_html__( 'Five', 'i18n' ),
						'six' => esc_html__( 'Six', 'i18n' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'boxed',
	),
	'control' => array(
		'label' => esc_html__( 'Buttonset three', 'i18n' ),
		'type' => 'kkcp_buttonset',
		'choices' => array(
			'one' => esc_html__( 'One', 'i18n' ),
			'two' => esc_html__( 'Two', 'i18n' ),
			'five' => esc_html__( 'Five', 'i18n' ),
			'six' => esc_html__( 'Six', 'i18n' ),
		),
	),
),
```",
					),
				),
			),
			'radio-image' => array(
				'setting' => array(
					'default' => 'less',
				),
				'control' => array(
					'label' => esc_html__( 'Radio image', 'i18n' ),
					'description' => esc_html__( 'Images already in the plugin, just put the image name', 'i18n' ),
					'type' => 'kkcp_radio_image',
					'guide' => array(
						'docs' => 'doc-url/for-this-control/',
					),
					'choices' => array(
						'less' => array(
							'label' => esc_html__( 'Single column', 'i18n' ),
							'img' => 'sidebar-less',
						),
						'right' => array(
							'label' => esc_html__( 'Sidebar on the right', 'i18n' ),
							'img' => 'sidebar-right',
						),
						'left' => array(
							'label' => esc_html__( 'Sidebar on the left', 'i18n' ),
							'img' => 'sidebar-left',
						),
						'both' => array(
							'label' => esc_html__( 'Sidebar on both sides', 'i18n' ),
							'img' => 'sidebar-both',
						)
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'less',
	),
	'control' => array(
		'label' => esc_html__( 'Radio image', 'i18n' ),
		'type' => 'kkcp_radio_image',
		'choices' => array(
			'less' => array(
				'label' => esc_html__( 'Single column', 'i18n' ),
				'img' => 'sidebar-less',
			),
			'right' => array(
				'label' => esc_html__( 'Sidebar on the right', 'i18n' ),
				'img' => 'sidebar-right',
			),
			'left' => array(
				'label' => esc_html__( 'Sidebar on the left', 'i18n' ),
				'img' => 'sidebar-left',
			),
			'both' => array(
				'label' => esc_html__( 'Sidebar on both sides', 'i18n' ),
				'img' => 'sidebar-both',
			)
		),
	),
),
```",
					),
				),
			),
			'radio-image-custom' => array(
				'setting' => array(
					'default' => 'firefox',
				),
				'control' => array(
					'label' => esc_html__( 'Radio image (custom)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_radio_image',
					'choices' => array(
						'chrome' => array(
							'label' => esc_html__( 'Chrome', 'i18n' ),
							'img_custom' => 'icon-chrome.png',
						),
						'firefox' => array(
							'label' => esc_html__( 'Firefox', 'i18n' ),
							'img_custom' => 'icon-firefox.png',
						),
						'ie' => array(
							'label' => esc_html__( 'IE', 'i18n' ),
							'img_custom' => 'icon-ie.png',
						),
						'opera' => array(
							'label' => esc_html__( 'Opera', 'i18n' ),
							'img_custom' => 'icon-opera.png',
						),
						'safari' => array(
							'label' => esc_html__( 'Safari', 'i18n' ),
							'img_custom' => 'icon-safari.png',
						),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'firefox',
	),
	'control' => array(
		'label' => esc_html__( 'Radio image (custom)', 'i18n' ),
		'type' => 'kkcp_radio_image',
		'choices' => array(
			'chrome' => array(
				'label' => esc_html__( 'Chrome', 'i18n' ),
				'img_custom' => 'icon-chrome.png',
			),
			'firefox' => array(
				'label' => esc_html__( 'Firefox', 'i18n' ),
				'img_custom' => 'icon-firefox.png',
			),
			'ie' => array(
				'label' => esc_html__( 'IE', 'i18n' ),
				'img_custom' => 'icon-ie.png',
			),
			'opera' => array(
				'label' => esc_html__( 'Opera', 'i18n' ),
				'img_custom' => 'icon-opera.png',
			),
			'safari' => array(
				'label' => esc_html__( 'Safari', 'i18n' ),
				'img_custom' => 'icon-safari.png',
			),
		),
	),
),
```",
				  ),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-checkbox',
		'title' => esc_html__( 'Checkbox controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 314,
		'fields' => array(
			'checkbox' => array(
				'setting' => array(
					'default' => 1,
				),
				'control' => array(
					'label' => esc_html__( 'Checkbox', 'i18n' ),
					'description' => esc_html__( 'A simple checkbox that can be either `1` or `0`.', 'i18n' ),
					'input_attrs' => array(
						'label' => esc_html__( 'Something to enable' ),
					),
					'type' => 'kkcp_checkbox',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 1,
	),
	'control' => array(
		'label' => esc_html__( 'Checkbox', 'i18n' ),
		'input_attrs' => array(
			'label' => esc_html__( 'Something to enable' ),
		),
		'type' => 'kkcp_checkbox',
	),
),
```",
					),
				),
			),
			'toggle' => array(
				'setting' => array(
					'default' => 0,
				),
				'control' => array(
					'label' => esc_html__( 'Toggle', 'i18n' ),
					'description' => esc_html__( 'Same as the above checkbox control but wiht a toggle/switch like styling.', 'i18n' ),
					'type' => 'kkcp_toggle',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 1,
	),
	'control' => array(
		'label' => esc_html__( 'Toggle', 'i18n' ),
		'type' => 'kkcp_toggle',
	),
),
```",
					),
				),
			),
			'toggle-with-labels' => array(
				'setting' => array(
					'default' => 1,
				),
				'control' => array(
					'label' => esc_html__( 'Toggle with labels', 'i18n' ),
					'description' => esc_html__( 'Toggle/switch like styling with visual labels on both sides.', 'i18n' ),
					'type' => 'kkcp_toggle',
					'input_attrs' => array(
						'label_false' => esc_html__( 'Dark' ),
						'label_true' => esc_html__( 'Light' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 1,
	),
	'control' => array(
		'label' => esc_html__( 'Toggle', 'i18n' ),
		'type' => 'kkcp_toggle',
		'input_attrs' => array(
			'label_false' => esc_html__( 'Dark' ),
			'label_true' => esc_html__( 'Light' ),
		),
	),
),
```",
					),
				),
			),
			'multicheck' => array(
				'setting' => array(
					'default' => array( 'grape', 'cherry' ),
				),
				'control' => array(
					'label' => esc_html__( 'Multicheck', 'i18n' ),
					'description' => esc_html__( 'Select multiple options checking the boxes. Gives back an array ordered as defined by the developer.', 'i18n' ),
					'type' => 'kkcp_multicheck',
					'choices' => array(
						'mango' => esc_html__( 'Mango', 'i18n' ),
						'grape' => esc_html__( 'Grape', 'i18n' ),
						'apple' => esc_html__( 'Apple', 'i18n' ),
						'cherry' => esc_html__( 'Cherry', 'i18n' ),
						'banana' => esc_html__( 'Banana', 'i18n' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => array( 'grape', 'cherry' ),
	),
	'control' => array(
		'label' => esc_html__( 'Multicheck', 'i18n' ),
		'type' => 'kkcp_multicheck',
		'choices' => array(
			'mango' => esc_html__( 'Mango', 'i18n' ),
			'grape' => esc_html__( 'Grape', 'i18n' ),
			'apple' => esc_html__( 'Apple', 'i18n' ),
			'cherry' => esc_html__( 'Cherry', 'i18n' ),
			'banana' => esc_html__( 'Banana', 'i18n' ),
		),
	),
),
```",
					),
				),
			),
			'multicheck-sortable' => array(
				'setting' => array(
					'default' => array( 'facebook', 'twitter', 'google' ),
				),
				'control' => array(
					'label' => esc_html__( 'Multicheck sortable', 'i18n' ),
					'description' => esc_html__( 'Returns an array sorted as defined by the user containing only the checked values.', 'i18n' ),
					'type' => 'kkcp_multicheck',
					'choices' => array(
						'facebook' => esc_html__( 'Facebook', 'i18n' ),
						'twitter' => esc_html__( 'Twitter', 'i18n' ),
						'google' => esc_html__( 'Google+', 'i18n' ),
						'tumblr' => esc_html__( 'Tumblr', 'i18n' ),
						'linkedin' => esc_html__( 'LinkedIn', 'i18n' ),
						'pinterest' => esc_html__( 'Pinterest', 'i18n' ),
						'reddit' => esc_html__( 'Reddit', 'i18n' ),
						'email' => esc_html__( 'Email', 'i18n' ),
					),
					'sortable' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => array( 'facebook', 'twitter', 'google' ),
	),
	'control' => array(
		'label' => esc_html__( 'Multicheck sortable', 'i18n' ),
		'type' => 'kkcp_multicheck',
		'choices' => array(
			'facebook' => esc_html__( 'Facebook', 'i18n' ),
			'twitter' => esc_html__( 'Twitter', 'i18n' ),
			'google' => esc_html__( 'Google+', 'i18n' ),
			'tumblr' => esc_html__( 'Tumblr', 'i18n' ),
			'linkedin' => esc_html__( 'LinkedIn', 'i18n' ),
			'pinterest' => esc_html__( 'Pinterest', 'i18n' ),
			'reddit' => esc_html__( 'Reddit', 'i18n' ),
			'email' => esc_html__( 'Email', 'i18n' ),
		),
		'sortable' => true,
	),
),
```",
					),
				),
			),
			'multicheck-sortable-max' => array(
				'setting' => array(
					'default' => array( 'venus', 'jupiter' ),
				),
				'control' => array(
					'label' => esc_html__( 'Multicheck sortable (max items)', 'i18n' ),
					'description' => esc_html__( 'Returns an array sorted as defined by the user containing only the checked values with a maximum of items selectable defined by the developer.', 'i18n' ),
					'type' => 'kkcp_multicheck',
					'choices' => array(
						'mars' => esc_html__( 'Mars', 'i18n' ),
						'venus' => esc_html__( 'Venus', 'i18n' ),
						'earth' => esc_html__( 'Earth', 'i18n' ),
						'jupiter' => esc_html__( 'Jupiter', 'i18n' ),
						'saturn' => esc_html__( 'Saturn', 'i18n' ),
					),
					'sortable' => true,
					'max' => 2,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => array( 'facebook', 'twitter', 'google' ),
	),
	'control' => array(
		'label' => esc_html__( 'Multicheck sortable (max items)', 'i18n' ),
		'type' => 'kkcp_multicheck',
		'choices' => array(
			'mars' => esc_html__( 'Mars', 'i18n' ),
			'venus' => esc_html__( 'Venus', 'i18n' ),
			'earth' => esc_html__( 'Earth', 'i18n' ),
			'jupiter' => esc_html__( 'Jupiter', 'i18n' ),
			'saturn' => esc_html__( 'Saturn', 'i18n' ),
		),
		'sortable' => true,
		'max' => 2,
	),
),
```",
					),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-texts',
		'title' => esc_html__( 'Text controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 217,
		'fields' => array(
			'text' => array(
				'setting' => array(
					'default' => 'Some plain text',
				),
				'control' => array(
					'label' => esc_html__( 'Text', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_text',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'Some plain text',
	),
	'control' => array(
		'label' => esc_html__( 'Text', 'i18n' ),
		'type' => 'kkcp_text',
	),
),
```",
					),
				),
			),
			'text-max-length' => array(
				'setting' => array(
					'default' => 'tenchars !',
				),
				'control' => array(
					'label' => esc_html__( 'Text max length 10', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_text',
					'input_attrs' => array(
						'maxlength' => 10,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'tenchars !',
	),
	'control' => array(
		'label' => esc_html__( 'Text max length 10', 'i18n' ),
		'type' => 'kkcp_text',
		'input_attrs' => array(
			'maxlength' => 10,
		),
	),
),
```",
					),
				),
			),
			'text-optional' => array(
				'setting' => array(
					'default' => 'something',
				),
				'control' => array(
					'label' => esc_html__( 'Text optional', 'i18n' ),
					'description' => esc_html__( 'Empty value is allowed.', 'i18n' ),
					'type' => 'kkcp_text',
					'optional' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'something',
	),
	'control' => array(
		'label' => esc_html__( 'Text optional', 'i18n' ),
		'type' => 'kkcp_text',
		'optional' => true,
	)
),
```",
					),
				),
			),
			'text-url' => array(
				'setting' => array(
					'default' => 'http://myurl.com',
				),
				'control' => array(
					'label' => esc_html__( 'Text URL', 'i18n' ),
					'description' => esc_html__( 'It accepts only a valid url.', 'i18n' ),
					'type' => 'kkcp_text',
					'input_attrs' => array(
						'type' => 'url',
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'http://myurl.com',
	),
	'control' => array(
		'label' => esc_html__( 'Text URL', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_text',
		'input_attrs' => array(
			'type' => 'url',
		),
	),
),
```",
					),
				),
			),
			'text-email' => array(
				'setting' => array(
					'default' => 'dev@knitkode.com',
				),
				'control' => array(
					'label' => esc_html__( 'Text Email', 'i18n' ),
					'description' => esc_html__( 'It accepts only a valid email address.', 'i18n' ),
					'type' => 'kkcp_text',
					'input_attrs' => array(
						'type' => 'email',
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'dev@knitkode.com',
	),
	'control' => array(
		'label' => esc_html__( 'Text Email', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_text',
		'input_attrs' => array(
			'type' => 'email',
		),
	),
),
```",
					),
				),
			),

		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-textarea',
		'title' => esc_html__( 'Textarea controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 207,
		'fields' => array(
			'textarea' => array(
				'setting' => array(
					'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque. Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.',
				),
				'control' => array(
					'label' => esc_html__( 'Textarea', 'i18n' ),
					'description' => esc_html__( 'The output and the value in database will be escaped.', 'i18n' ),
					'type' => 'kkcp_textarea',
					'input_attrs' => array(
						'maxlength' => 300,
						'placeholder' => 'E.g. <h2>Ciao</h2> will be escaped to &lt;h2&gt;Ciao&lt;/h2&gt;.'
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque. Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.',
	),
	'control' => array(
		'label' => esc_html__( 'Textarea', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_textarea',
		'input_attrs' => array(
			'maxlength' => 300,
		),
	),
),
```",
					),
				),
			),
			'textarea-html' => array(
				'setting' => array(
					'default' => '<h3>Lorem ipsum dolor sit amet</h3> <p>Consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque. Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.</p>',
				),
				'control' => array(
					'label' => esc_html__( 'Textarea (allow HTML)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_textarea',
					'input_attrs' => array(
						'maxlength' => 300,
						'rows' => 8,
					),
					'allowHTML' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '<h3>Lorem ipsum dolor sit amet</h3> <p>Consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque. Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.</p>',
	),
	'control' => array(
		'label' => esc_html__( 'Textarea (allow HTML)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_textarea',
		'input_attrs' => array(
			'maxlength' => 300,
			'rows' => 8,
		),
		'allowHTML' => true,
	),
),
```",
					),
				),
			),
			'textarea-wp_editor' => array(
				'setting' => array(
					'default' => '<h3>Lorem ipsum dolor sit amet</h3> <p>Consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque.</p>',
				),
				'control' => array(
					'label' => esc_html__( 'Textarea (wp_editor)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_textarea',
					'wp_editor' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '<h3>Lorem ipsum dolor sit amet</h3> <p>Consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque.</p>',
	),
	'control' => array(
		'label' => esc_html__( 'Textarea (wp_editor)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_textarea',
		'wp_editor' => true,
	),
),
```",
					),
				),
			),
			'textarea-wp_editor-options' => array(
				'setting' => array(
					'default' => '<h3>Consectetur adipisicing elit</h3> <p>Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.</p>',
				),
				'control' => array(
					'label' => esc_html__( 'Textarea (wp_editor with options)', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_textarea',
					'wp_editor' => array(
						'textareaRows' => 7,
						'quicktags' => array(
							'buttons' => 'strong,em',
						)
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '<h3>Consectetur adipisicing elit</h3> <p>Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.</p>',
	),
	'control' => array(
		'label' => esc_html__( 'Textarea (wp_editor with options)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_textarea',
		'wp_editor' => array(
			'textareaRows' => 7,
			'quicktags' => array(
				'buttons' => 'strong,em',
			)
		),
	),
),
```",
					),
				),
			),
			'textarea-wp_editor-no-quicktags' => array(
				'setting' => array(
					'default' => '<h3>No quicktags</h3> <p>Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.</p>',
				),
				'control' => array(
					'label' => esc_html__( 'Textarea (no quicktags)', 'i18n' ),
					'description' => esc_html__( 'You can pass options to the wp_editor, in this example we hide the quicktags', 'i18n' ),
					'type' => 'kkcp_textarea',
					'wp_editor' => array(
						'quicktags' => false,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '<h3>No quicktags</h3> <p>Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.</p>',
	),
	'control' => array(
		'label' => esc_html__( 'Textarea (wp_editor with options)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_textarea',
		'wp_editor' => array(
			'quicktags' => false,
		),
	),
),
```",
					),
				),
			),
	  ),
	),
	array(
		'subject' => 'section',
		'id' => 'section-numbers',
		'title' => esc_html__( 'Number controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 204,
		'fields' => array(
			'number' => array(
				'setting' => array(
					'default' => 4,
				),
				'control' => array(
					'label' => esc_html__( 'Number', 'i18n' ),
					'description' => esc_html__( 'Default number control, only integer numbers.', 'i18n' ),
					'type' => 'kkcp_number',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 4,
	),
	'control' => array(
		'label' => esc_html__( 'Number', 'i18n' ),
		'type' => 'kkcp_number',
	),
),
```",
					),
				),
			),
			'number-float' => array(
				'setting' => array(
					'default' => 27.56,
				),
				'control' => array(
					'label' => esc_html__( 'Number', 'i18n' ),
					'description' => esc_html__( 'Default number control, accept both integers and float numbers.', 'i18n' ),
					'type' => 'kkcp_number',
					'allowFloat' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 4,
	),
	'control' => array(
		'label' => esc_html__( 'Number', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_number',
		'allowFloat' => true,
	),
),
```",
					),
				),
			),
			'number-min' => array(
				'setting' => array(
					'default' => 6,
				),
				'control' => array(
					'label' => esc_html__( 'Number min', 'i18n' ),
					'description' => esc_html__( 'Number with a minimum value.', 'i18n' ),
					'type' => 'kkcp_number',
					'input_attrs' => array(
						'min' => 4,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 6,
	),
	'control' => array(
		'label' => esc_html__( 'Number min', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_number',
		'input_attrs' => array(
			'min' => 4,
		),
	),
),
```",
					),
				),
			),
			'number-max' => array(
				'setting' => array(
					'default' => 3,
				),
				'control' => array(
					'label' => esc_html__( 'Number max / optional', 'i18n' ),
					'description' => esc_html__( 'Number with a maximum value. Empty value allowed.', 'i18n' ),
					'type' => 'kkcp_number',
					'optional' => true,
					'input_attrs' => array(
						'max' => 7,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 3,
	),
	'control' => array(
		'label' => esc_html__( 'Number max', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_number',
		'optional' => true,
		'input_attrs' => array(
			'max' => 7,
		),
	),
),
```",
					),
				),
			),
			'number-step' => array(
				'setting' => array(
					'default' => 15,
				),
				'control' => array(
					'label' => esc_html__( 'Number step', 'i18n' ),
					'description' => esc_html__( 'Number that increment or decrement by a defined step.', 'i18n' ),
					'type' => 'kkcp_number',
					'input_attrs' => array(
						'step' => 5,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 15,
	),
	'control' => array(
		'label' => esc_html__( 'Number step', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_number',
		'input_attrs' => array(
			'step' => 5,
		),
	),
),
```",
					),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-select',
		'title' => esc_html__( 'Select controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 163,
		'fields' => array(
			'select' => array(
				'setting' => array(
					'default' => 'orange',
				),
				'control' => array(
					'label' => esc_html__( 'Select', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_select',
					'choices' => array(
						'lemon' => esc_html__( 'Lemon', 'i18n' ),
						'orange' => esc_html__( 'Orange', 'i18n' ),
						'pineapple' => esc_html__( 'Pineapple', 'i18n' ),
						'mango' => esc_html__( 'Mango', 'i18n' ),
					),
					'selectize' => false,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'orange',
	),
	'control' => array(
		'label' => esc_html__( 'Select', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_select',
		'choices' => array(
			'lemon' => esc_html__( 'Lemon', 'i18n' ),
			'orange' => esc_html__( 'Orange', 'i18n' ),
			'pineapple' => esc_html__( 'Pineapple', 'i18n' ),
			'mango' => esc_html__( 'Mango', 'i18n' ),
		),
		'selectize' => false,
	),
),
```",
					),
				),
			),
			// @@note this would be the same as selectize with multiple choices
			// 'select-multiple' => array(
			// 	'setting' => array(
			// 		'default' => 'grape',
			// 	),
			// 	'control' => array(
			// 		'label' => esc_html__( 'Select multiple', 'i18n' ),
			// 		'description' => esc_html__( '', 'i18n' ),
			// 		'type' => 'kkcp_select',
			// 		'choices' => array(
			// 			'grape' => esc_html__( 'Grape', 'i18n' ),
			// 			'apple' => esc_html__( 'Apple', 'i18n' ),
			// 			'cherry' => esc_html__( 'Cherry', 'i18n' ),
			// 			'banana' => esc_html__( 'Banana', 'i18n' ),
			// 		),
			// 		'multiple' => true,
			// 	),
			// ),
			// \\
			'select-selectize' => array(
				'setting' => array(
					'default' => 'banana',
				),
				'control' => array(
					'label' => esc_html__( 'Selectize', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_select',
					'choices' => array(
						'lemon' => esc_html__( 'Lemon', 'i18n' ),
						'orange' => esc_html__( 'Orange', 'i18n' ),
						'pineapple' => esc_html__( 'Pineapple', 'i18n' ),
						'mango' => esc_html__( 'Mango', 'i18n' ),
						'grape' => esc_html__( 'Grape', 'i18n' ),
						'apple' => esc_html__( 'Apple', 'i18n' ),
						'cherry' => esc_html__( 'Cherry', 'i18n' ),
						'banana' => esc_html__( 'Banana', 'i18n' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'banana',
	),
	'control' => array(
		'label' => esc_html__( 'Selectize', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_select',
		'choices' => array(
			'lemon' => esc_html__( 'Lemon', 'i18n' ),
			'orange' => esc_html__( 'Orange', 'i18n' ),
			'pineapple' => esc_html__( 'Pineapple', 'i18n' ),
			'mango' => esc_html__( 'Mango', 'i18n' ),
			'grape' => esc_html__( 'Grape', 'i18n' ),
			'apple' => esc_html__( 'Apple', 'i18n' ),
			'cherry' => esc_html__( 'Cherry', 'i18n' ),
			'banana' => esc_html__( 'Banana', 'i18n' ),
		),
	),
),
```",
					),
				),
			),
			'select-selectize-options' => array(
				'setting' => array(
					'default' => 'cherry',
				),
				'control' => array(
					'label' => esc_html__( 'Selectize with options', 'i18n' ),
					'description' => __( 'e.g.: `selectize => array( sortField => text, )`)', 'i18n' ), // @@todo escape? \\
					'type' => 'kkcp_select',
					'choices' => array(
						'lemon' => esc_html__( 'Lemon', 'i18n' ),
						'orange' => esc_html__( 'Orange', 'i18n' ),
						'pineapple' => esc_html__( 'Pineapple', 'i18n' ),
						'mango' => esc_html__( 'Mango', 'i18n' ),
						'grape' => esc_html__( 'Grape', 'i18n' ),
						'apple' => esc_html__( 'Apple', 'i18n' ),
						'cherry' => esc_html__( 'Cherry', 'i18n' ),
						'banana' => esc_html__( 'Banana', 'i18n' ),
					),
					'selectize' => array(
						'sortField' => 'text',
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'cherry',
	),
	'control' => array(
		'label' => esc_html__( 'Selectize with options', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_select',
		'choices' => array(
			'lemon' => esc_html__( 'Lemon', 'i18n' ),
			'orange' => esc_html__( 'Orange', 'i18n' ),
			'pineapple' => esc_html__( 'Pineapple', 'i18n' ),
			'mango' => esc_html__( 'Mango', 'i18n' ),
			'grape' => esc_html__( 'Grape', 'i18n' ),
			'apple' => esc_html__( 'Apple', 'i18n' ),
			'cherry' => esc_html__( 'Cherry', 'i18n' ),
			'banana' => esc_html__( 'Banana', 'i18n' ),
		),
		'selectize' => array(
			'sortField' => 'text',
		),
	),
),
```",
					),
				),
			),
			'select-selectize-more-items' => array(
				'setting' => array(
					'default' => array( 'IT', 'UK' ),
				),
				'control' => array(
					'label' => esc_html__( 'Selectize with multiple selection', 'i18n' ),
					'description' => __( 'With `max => 3,`', 'i18n' ), // @@todo escape? \\
					'type' => 'kkcp_select',
					'choices' => array(
						'IT' => esc_html__( 'Italy', 'i18n' ),
						'DE' => esc_html__( 'Germany', 'i18n' ),
						'FR' => esc_html__( 'France', 'i18n' ),
						'UK' => esc_html__( 'United Kingdom', 'i18n' ),
						'NL' => esc_html__( 'Netherlands', 'i18n' ),
						'SP' => esc_html__( 'Spain', 'i18n' ),
					),
					'max' => 3,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => array( 'IT', 'UK' ),
	),
	'control' => array(
		'label' => esc_html__( 'Selectize with multiple selection', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_select',
		'choices' => array(
			'IT' => esc_html__( 'Italy', 'i18n' ),
			'DE' => esc_html__( 'Germany', 'i18n' ),
			'FR' => esc_html__( 'France', 'i18n' ),
			'UK' => esc_html__( 'United Kingdom', 'i18n' ),
			'NL' => esc_html__( 'Netherlands', 'i18n' ),
			'SP' => esc_html__( 'Spain', 'i18n' ),
		),
		'max' => 3,
	),
),
```",
					),
				),
			),
			'select-selectize-tags-plugins' => array(
				'setting' => array(
					'default' => array( 'IT', 'NL', 'UK' ),
				),
				'control' => array(
					'label' => esc_html__( 'Selectize with multiple selection and plugins', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_select',
					'choices' => array(
						'IT' => esc_html__( 'Italy', 'i18n' ),
						'DE' => esc_html__( 'Germany', 'i18n' ),
						'FR' => esc_html__( 'France', 'i18n' ),
						'UK' => esc_html__( 'United Kingdom', 'i18n' ),
						'NL' => esc_html__( 'Netherlands', 'i18n' ),
						'SP' => esc_html__( 'Spain', 'i18n' ),
					),
					'max' => 4,
					'selectize' => array(
						'sortField' => 'text',
						'plugins' => array( 'restore_on_backspace', 'remove_button', 'drag_drop' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => array( 'IT', 'NL', 'UK' ),
	),
	'control' => array(
		'label' => esc_html__( 'Selectize with multiple selection and plugins', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_select',
		'choices' => array(
			'IT' => esc_html__( 'Italy', 'i18n' ),
			'DE' => esc_html__( 'Germany', 'i18n' ),
			'FR' => esc_html__( 'France', 'i18n' ),
			'UK' => esc_html__( 'United Kingdom', 'i18n' ),
			'NL' => esc_html__( 'Netherlands', 'i18n' ),
			'SP' => esc_html__( 'Spain', 'i18n' ),
		),
		'max' => 4,
		'selectize' => array(
			'sortField' => 'text',
			'plugins' => array( 'restore_on_backspace', 'remove_button', 'drag_drop' ),
		),
	),
),
```",
					),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-tags',
		'title' => esc_html__( 'Tags controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 323,
		'fields' => array(
			'tags' => array(
				'setting' => array(
					'default' => 'scissors,paper,rock',
				),
				'control' => array(
					'label' => esc_html__( 'Tags', 'i18n' ),
					'description' => esc_html__( 'Default tags control. User can insert new tags freely (HTML is escaped). It returns a comma separated string. Tags can be removed pressing the delete key.', 'i18n' ),
					'type' => 'kkcp_tags',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'scissors,paper,rock',
	),
	'control' => array(
		'label' => esc_html__( 'Tags', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_tags',
	),
),
```",
					),
				),
			),
			'tags-removable' => array(
				'setting' => array(
					'default' => 'one,two,three',
				),
				'control' => array(
					'label' => esc_html__( 'Tags removable (max 4 items)', 'i18n' ),
					'description' => esc_html__( 'Tags can be removed clicking the x button close to each of them.', 'i18n' ),
					'type' => 'kkcp_tags',
					'max' => 4,
					'selectize' => array(
						'plugins' => array( 'restore_on_backspace', 'remove_button' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'one,two,three',
	),
	'control' => array(
		'label' => esc_html__( 'Tags removable', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_tags',
		'max' => 4,
		'selectize' => array(
			'plugins' => array( 'restore_on_backspace', 'remove_button' ),
		),
	),
),
```",
					),
				),
			),
			'tags-sortable-removable' => array(
				'setting' => array(
					'default' => 'milan,rome,venice',
				),
				'control' => array(
					'label' => esc_html__( 'Tags sortable and removable', 'i18n' ),
					'description' => esc_html__( '', 'i18n' ),
					'type' => 'kkcp_tags',
					'selectize' => array(
						'plugins' => array( 'remove_button', 'drag_drop' )
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'milan,rome,venice',
	),
	'control' => array(
		'label' => esc_html__( 'Tags sortable and removable', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_tags',
		'selectize' => array(
			'plugins' => array( 'remove_button', 'drag_drop' )
		),
	),
),
```",
					),
				),
			),
			'tags-max-items' => array(
				'setting' => array(
					'default' => 'pine,oak',
				),
				'control' => array(
					'label' => esc_html__( 'Tags max items', 'i18n' ),
					'description' => __( 'Specify a maximum nuber of tags allowed. `max => 3`', 'i18n' ),
					'type' => 'kkcp_tags',
					'max' => 3,
					'selectize' => array(
						'plugins' => array( 'restore_on_backspace', 'remove_button', 'drag_drop' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'pine,oak',
	),
	'control' => array(
		'label' => esc_html__( 'Tags max items', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_tags',
		'max' => 2,
		'selectize' => array(
			'plugins' => array( 'restore_on_backspace', 'remove_button', 'drag_drop' ),
		),
	),
),
```",
					),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-sortable',
		'title' => esc_html__( 'Sortable controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 156,
		'fields' => array(
			'sortable' => array(
				'setting' => array(
					'default' => array( 'lemon', 'cherry', 34, 'mango', 'grape' ),
				),
				'control' => array(
					'label' => esc_html__( 'Sortable', 'i18n' ),
					'description' => esc_html__( 'A sortable array of strings.', 'i18n' ),
					'type' => 'kkcp_sortable',
					'choices' => array(
						'lemon' => esc_html__( 'Lemon', 'i18n' ),
						'34' => 34,
						'mango' => esc_html__( 'Mango', 'i18n' ),
						'grape' => esc_html__( 'Grape', 'i18n' ),
						'cherry' => esc_html__( 'Cherry', 'i18n' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => array( 'lemon', 'cherry', 34, 'mango', 'grape' ),
	),
	'control' => array(
		'label' => esc_html__( 'Sortable', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_sortable',
		'choices' => array(
			'lemon' => esc_html__( 'Lemon', 'i18n' ),
			34 => '34',
			'mango' => esc_html__( 'Mango', 'i18n' ),
			'grape' => esc_html__( 'Grape', 'i18n' ),
			'cherry' => esc_html__( 'Cherry', 'i18n' ),
		),
	),
),
```",
					),
				),
			),
			// @@note this would be the same as selectize tags
			// 'sortable-editable' => array(
			// 	'setting' => array(
			// 		'default' => array( 'lemon', 'cherry', 'pineapple', 'mango', 'grape' ),
			// 	),
			// 	'control' => array(
			// 		'label' => esc_html__( 'Sortable', 'i18n' ),
			// 		'description' => esc_html__( '', 'i18n' ),
			// 		'type' => 'kkcp_sortable',
			// 		'editable' => true,
			// 		'items' => array(
			// 			'placeholder' => esc_html__( 'Placeholder', 'i18n' ),
			// 		),
			// 		'max' => 4,
			// 	),
			// ),
			// \\
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-font',
		'title' => esc_html__( 'Font controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 215,
		'fields' => array(
			'font-family' => array(
				'setting' => array(
					'default' => "'Helvetica Neue', Helvetica, Arial, sans-serif",
				),
				'control' => array(
					'label' => esc_html__( 'Font family', 'i18n' ),
					'description' => esc_html__( 'Select the font families and sort them.', 'i18n' ),
					'type' => 'kkcp_font_family',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => \"'Helvetica Neue', Helvetica, Arial, sans-serif\",
	),
	'control' => array(
		'label' => esc_html__( 'Font family', 'i18n' ),
		'type' => 'kkcp_font_family',
	),
),
```",
					),
				),
			),
			'font-family-with-options' => array(
				'setting' => array(
					'default' => 'Georgia, "Palatino Linotype", "Book Antiqua", Palatino, "Times New Roman", Times, serif',
				),
				'control' => array(
					'label' => esc_html__( 'Font family with options', 'i18n' ),
					'description' => esc_html__( 'Select the font families only between the groups `sans-serif` and `serif`.', 'i18n' ),
					'type' => 'kkcp_font_family',
					'choices' => array(
						'standard' => array(
							'serif',
							'sans-serif'
						)
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'Georgia, \"Palatino Linotype\", \"Book Antiqua\", Palatino, \"Times New Roman\", Times, serif',
	),
	'control' => array(
		'label' => esc_html__( 'Font family', 'i18n' ),
		'type' => 'kkcp_font_family',
		'choices' => array(
			'standard' => array(
				'serif',
				'sans-serif'
			)
		),
	),
),
```",
					),
				),
			),
			'font-family-just-one-monospace' => array(
				'setting' => array(
					'default' => 'Courier',
				),
				'control' => array(
					'label' => esc_html__( 'One monospace font family', 'i18n' ),
					'description' => esc_html__( 'Select maxmium one font family in the `monospace` group.', 'i18n' ),
					'type' => 'kkcp_font_family',
					'max' => 1,
					'choices' => array(
						'standard' => 'monospace',
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'Courier',
	),
	'control' => array(
		'label' => esc_html__( 'One monospace font family', 'i18n' ),
		'type' => 'kkcp_font_family',
		'max' => 1,
		'choices' => array(
			'standard' => 'monospace',
		),
	),
),
```",
					),
				),
			),
// 			'font-weight' => array(
// 				'setting' => array(
// 					'default' => 'bold',
// 				),
// 				'control' => array(
// 					'label' => esc_html__( 'Font weight', 'i18n' ),
// 					'description' => esc_html__( 'Select the font weight. Just a shortcut of an otherwise verbose select with many choices.', 'i18n' ),
// 					'type' => 'kkcp_font_weight',
// 					'guide' => array(
// 						'title' => esc_html__( 'See Code', 'i18n' ),
// 						'text' => "```php
// 'an-id' => array(
// 	'setting' => array(
// 		'default' => 'bold',
// 	),
// 	'control' => array(
// 		'label' => esc_html__( 'Font weight', 'i18n' ),
// 		'type' => 'kkcp_font_weight',
// 	),
// ),
// ```",
// 					),
// 				),
// 			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-icon',
		'title' => esc_html__( 'Icons controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 163,
		'fields' => array(
			'dashicon' => array(
				'setting' => array(
					'default' => 'admin-users',
				),
				'control' => array(
					'label' => esc_html__( 'Dashicon', 'i18n' ),
					'description' => esc_html__( 'A single dashicon to choose.', 'i18n' ),
					'type' => 'kkcp_icon',
					'choices' => 'dashicons',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'dashboard',
	),
	'control' => array(
		'label' => esc_html__( 'Icon', 'i18n' ),
		'type' => 'kkcp_icon',
		'choices' => 'dashicons',
	),
),
```",
					),
				),
			),
			'dashicons-max' => array(
				'setting' => array(
					'default' => array( 'admin-plugins', 'admin-page' ),
				),
				'control' => array(
					'label' => esc_html__( 'Dashicons (max number of icons)', 'i18n' ),
					'description' => esc_html__( 'In this example we set the `max` to `3`.', 'i18n' ),
					'type' => 'kkcp_icon',
					'max' => 3,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'dashboard',
	),
	'control' => array(
		'label' => esc_html__( 'Icon', 'i18n' ),
		'type' => 'kkcp_icon',
		'icons_set' => 'dashicons',
		'max' => 3,
	),
),
```",
					),
				),
			),
			'dashicons-max-from' => array(
				'setting' => array(
					'default' => 'admin-users',
				),
				'control' => array(
					'label' => esc_html__( 'Dashicon (among given icons)', 'i18n' ),
					'description' => __( 'In this example we allow the user to select one icon and we define which icons are selectable with a quick filter instead of a filter by group. This is defined using a comma separated string of values instead of an array and it will get the defined allowed icons from all the set regardless of their group. Nb: `max => 1` is the default value for this control.', 'i18n' ),
					'type' => 'kkcp_icon',
					'choices' => array(
						'dashicons' => 'admin-plugins,admin-users,admin-network',
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'dashboard',
	),
	'control' => array(
		'label' => esc_html__( 'Icon', 'i18n' ),
		'type' => 'kkcp_icon',
		'choices' => array(
			'dashicons' => array( 'admin-plugins', 'admin-users', 'admin-network' ),
		),
	),
),
```",
					),
				),
			)
		)
	),
	array(
		'subject' => 'section',
		'id' => 'section-presentation',
		'title' => esc_html__( 'Presentation controls', 'i18n' ),
		'description' => esc_html__( 'These control types are without settings linked, their only purpose is in fact to show some pure presentational content between a control and the other or in a custom section.', 'i18n' ),
		'dashicon' => 105,
		'fields' => array(
			'kkcp-dummy' => array(
				'control' => array(
					'label' => esc_html__( 'Content control', 'i18n' ),
					'description' => esc_html__( 'This control content uses the normal `label` and `description` properties, while the one below uses just the `markdown` property.', 'i18n' ),
					'type' => 'kkcp_content',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'kkcp-dummy' => array(
	'control' => array(
		'label' => esc_html__( 'Dummy default', 'i18n' ),
		'description' => esc_html__( 'Some text as you like', 'i18n' ),
		'type' => 'kkcp_content',
	),
),
```",
					),
				),
			),
			'kkcp-dummy-markdown' => array(
				'control' => array(
					'type' => 'kkcp_content',
					'markdown' => "
# Markdown

*This control uses [markdown-js](https://github.com/evilstreak/markdown-js).*

![sample image](https://raw.githubusercontent.com/knitkode/ui/master/customize-plus/banner--light.png)

> Blockquote, images and [links](https://knitkode.com/products/customize-plus)

## Headings

Some `inline code` or a code block
```
$ cd customize-plus
$ ./run
```

| A table 		  | Example       |
| ------------- | ------------- |
| Content Cell  | Content Cell  |
| Content Cell  | Content Cell  |

### List

* **item bold**
* *item italic*
	* nested item
* item normal

ecc.
",
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'kkcp-dummy' => array(
	'control' => array(
		'type' => 'kkcp_content',
		'markdown' => 'a lot of text and markdown.'
	),
),
```",
					),
				),
			),
		),
	),
	array(
		'subject' => 'section',
		'id' => 'section-wordpress',
		'title' => esc_html__( 'WordPress controls', 'i18n' ),
		'description' => esc_html__( 'This section is here just to show that the native WordPress controls will all keep working alongside Customize Plus controls. In this demo there is no live preview implemented for them though.', 'i18n' ),
		// 'type' => 'kkcp_section',
		'dashicon' => 120,
		'fields' => array(
			'wp-text' => array(
				'setting' => array(
					'default' => 'Some text',
				),
				'control' => array(
					'label' => esc_html__( 'WP Text', 'i18n' ),
					'type' => 'text',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'Some text',
	),
	'control' => array(
		'label' => esc_html__( 'WP Text', 'i18n' ),
		'type' => 'text',
	),
),
```",
					),
				),
			),
			'wp-color' => array(
				'setting' => array(
					'default' => '#fc4fd7',
				),
				'control' => array(
					'label' => esc_html__( 'WP Color', 'i18n' ),
					'type' => 'color',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#fc4fd7',
	),
	'control' => array(
		'label' => esc_html__( 'WP Color', 'i18n' ),
		'type' => 'color',
	),
),
```",
					),
				),
			),
			'wp-media' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Media', 'i18n' ),
					'type' => 'media',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Media', 'i18n' ),
		'type' => 'media',
	),
),
```",
					),
				),
			),
			'wp-image' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Image', 'i18n' ),
					'type' => 'image',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Image', 'i18n' ),
		'type' => 'image',
	),
),
```",
					),
				),
			),
			'wp-background' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Background', 'i18n' ),
					'type' => 'background',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Background', 'i18n' ),
		'type' => 'background',
	),
),
```",
					),
				),
			),
			'wp-upload' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Upload', 'i18n' ),
					'type' => 'upload',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Upload', 'i18n' ),
		'type' => 'upload',
	),
),
```",
					),
				),
			),
			'wp-cropped-image' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Cropped Image', 'i18n' ),
					'type' => 'cropped_image',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Cropped Image', 'i18n' ),
		'type' => 'cropped_image',
	),
),
```",
					),
				),
			),
			'wp-site_icon' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Site Icon', 'i18n' ),
					'type' => 'site_icon',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Site Icon', 'i18n' ),
		'type' => 'site_icon',
	),
),
```",
					),
				),
			),
			'wp-header' => array(
				'setting' => array(
					'default' => 'dummy', // @@todo \\
				),
				'control' => array(
					'label' => esc_html__( 'WP Header', 'i18n' ),
					'type' => 'header',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@@todo',
	),
	'control' => array(
		'label' => esc_html__( 'WP Header', 'i18n' ),
		'type' => 'header',
	),
),
```",
					),
				),
			),
		),
	),
);
