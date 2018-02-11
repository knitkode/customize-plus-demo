<?php defined( 'ABSPATH' ) or die;

/**
 * Customize options file
 *
 * @package      packageName
 * @since        0.0.1
 * @link         http://homepage.com
 * @author       name <email> (http://url.io)
 * @copyright    2015 | GPL
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
			'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			'color-dynamic-active' => array(
				'setting' => array(
					'default' => '#f40030',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Dynamic Color', 'i18n' ),
					'description' => esc_html__( '(active role)', 'i18n' ),
					'type' => 'kkcp_color_dynamic',
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#f40030',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Dynamic Color', 'i18n' ),
		'type' => 'kkcp_color_dynamic',
	),
),
```",
					),
				),
			),
			'color-dynamic-passive' => array(
				'setting' => array(
					'default' => 'fadeout(@color-dynamic-active,30)',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Dynamic Color', 'i18n' ),
					'description' => esc_html__( '(passive role)', 'i18n' ),
					'type' => 'kkcp_color_dynamic',
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'fadeout(@color-dynamic-active,30)',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Dynamic Color', 'i18n' ),
		'type' => 'kkcp_color_dynamic',
	),
),
```",
					),
				),
			),
			'color-dynamic-hidetab-active' => array(
				'setting' => array(
					'default' => '#29BD57',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Dynamic Color (hide dynamic tab)', 'i18n' ),
					'description' => esc_html__( '(active role)', 'i18n' ),
					'type' => 'kkcp_color_dynamic',
					'hideDynamic' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '#29BD57',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Dynamic Color (hide dynamic tab)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_color_dynamic',
		'hideDynamic' => true,
	),
),
```",
					),
				),
			),
			'color-dynamic-hidetab-passive' => array(
				'setting' => array(
					'default' => 'lighten(@color-dynamic-hidetab-active,30)',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Dynamic Color (hide dynamic tab)', 'i18n' ),
					'description' => esc_html__( '(passive role)', 'i18n' ),
					'type' => 'kkcp_color_dynamic',
					'hideDynamic' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'lighten(@color-dynamic-hidetab-active,30)',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Dynamic Color (hide dynamic tab)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_color_dynamic',
		'hideDynamic' => true,
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
		'id' => 'section-sizes',
		'title' => esc_html__( 'Size controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 211,
		'fields' => array(
			'slider' => array(
				'setting' => array(
					'default' => '14px',
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			'size-dynamic-active' => array(
				'setting' => array(
					'default' => '14px',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Size Dynamic 1', 'i18n' ),
					'description' => esc_html__( '(active role)', 'i18n' ),
					'type' => 'kkcp_size_dynamic',
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '14px',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Size Dynamic 1', 'i18n' ),
		'type' => 'kkcp_size_dynamic',
	),
),
```",
					),
				),
			),
			'size-dynamic-passive' => array(
				'setting' => array(
					'default' => '@size-dynamic-active',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Size Dynamic 2', 'i18n' ),
					'description' => esc_html__( '(passive role)', 'i18n' ),
					'type' => 'kkcp_size_dynamic',
					'units' => array( 'px', '%' ),
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@size-dynamic-active',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Size Dynamic 2', 'i18n' ),
		'type' => 'kkcp_size_dynamic',
		'units' => array( 'px', '%' ),
	),
),
```",
					),
				),
			),
			'size-dynamic-hidetab-active' => array(
				'setting' => array(
					'default' => '40px',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Size Dynamic (hide dynamic tab) 3', 'i18n' ),
					'description' => esc_html__( '(active role)', 'i18n' ),
					'type' => 'kkcp_size_dynamic',
					'hideDynamic' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '40px',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Size Dynamic (hide dynamic tab)  3', 'i18n' ),
		'type' => 'kkcp_size_dynamic',
		'hideDynamic' => true,
	),
),
```",
					),
				),
			),
			'size-dynamic-hidetab-passive' => array(
				'setting' => array(
					'default' => '@size-dynamic-hidetab-active',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Size Dynamic (hide dynamic tab) 4', 'i18n' ),
					'description' => esc_html__( '(passive role)', 'i18n' ),
					'type' => 'kkcp_size_dynamic',
					'hideDynamic' => true,
					'guide' => array(
						'title' => esc_html__( 'See Code (Premium control)', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '@size-dynamic-hidetab-active',
		'transport' => 'recompilePost',
	),
	'control' => array(
		'label' => esc_html__( 'Size Dynamic (hide dynamic tab) 4', 'i18n' ),
		'type' => 'kkcp_size_dynamic',
		'hideDynamic' => true,
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			'toggle' => array(
				'setting' => array(
					'default' => 1,
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Toggle', 'i18n' ),
					'description' => esc_html__( 'Either 0 or 1.', 'i18n' ),
					'type' => 'kkcp_toggle',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 1,
		'transport' => 'postMessage',
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
			'multicheck' => array(
				'setting' => array(
					'default' => array( 'grape', 'cherry' ),
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			'textarea' => array(
				'setting' => array(
					'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dolor natus ducimus, minima placeat, modi sint corrupti eaque. Ratione delectus qui natus consequatur rem magnam, dolorem reprehenderit explicabo non nisi.',
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			// 		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Tags max items', 'i18n' ),
					'description' => esc_html__( 'Specify a maximum nuber of tags allowed.', 'i18n' ),
					'type' => 'kkcp_tags',
					'max' => 2,
					'selectize' => array(
						'plugins' => array( 'restore_on_backspace', 'remove_button', 'drag_drop' ),
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'pine,oak',
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			// 		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
			'font-weight' => array(
				'setting' => array(
					'default' => 'bold',
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Font weight', 'i18n' ),
					'description' => esc_html__( 'Select the font weight. Just a shortcut of an otherwise verbose select with many choices.', 'i18n' ),
					'type' => 'kkcp_font_weight',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'bold',
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Font weight', 'i18n' ),
		'type' => 'kkcp_font_weight',
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
		'id' => 'section-icon',
		'title' => esc_html__( 'Icons controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 163,
		'fields' => array(
			'dashicon' => array(
				'setting' => array(
					'default' => 'admin-users',
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Dashicon', 'i18n' ),
					'description' => esc_html__( 'A single dashicon to choose.', 'i18n' ),
					'type' => 'kkcp_icon',
					'icons_set' => 'dashicons',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'dashboard',
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Icon', 'i18n' ),
		'type' => 'kkcp_icon',
		'icons_set' => 'dashicons',
	),
),
```",
					),
				),
			),
			'dashicons-max' => array(
				'setting' => array(
					'default' => array( 'admin-plugins', 'admin-page' ),
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Dashicons (max number of icons)', 'i18n' ),
					'description' => esc_html__( 'In this example we set the `max` to `3`.', 'i18n' ),
					'type' => 'kkcp_icon',
					'icons_set' => 'dashicons',
					'max' => 3,
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 'dashboard',
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Icon', 'i18n' ),
		'type' => 'kkcp_icon',
		'icons_set' => 'dashicons',
		'multiple' => true,
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
		'id' => 'section-others',
		'title' => esc_html__( 'Other controls', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 322,
		'fields' => array(
			'knob' => array(
				'setting' => array(
					'default' => 74,
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Knob', 'i18n' ),
					'description' => esc_html__( 'Basically a number input. Uses [jQuery.knob.js](https://github.com/aterrien/jQuery-Knob).', 'i18n' ),
					'type' => 'kkcp_knob',
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => 74,
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Knob', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_knob',
	),
),
```",
					),
				),
			),
			'knob-options' => array(
				'setting' => array(
					'default' => 275,
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Knob (with options)', 'i18n' ),
					'description' => esc_html__( 'It is possible to pass to the `input_attrs` arg some jQuery.knob js options. See a [list here](http://@@todo) of the options allowed.', 'i18n' ),
					'type' => 'kkcp_knob',
					'input_attrs' => array(
						'min' => 30,
						'step' => 5,
						'max' => 360,
						'cursor' => 20,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'default' => 275,
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Knob (with options)', 'i18n' ),
		'description' => esc_html__( '', 'i18n' ),
		'type' => 'kkcp_knob',
		'input_attrs' => array(
			'min' => 30,
			'step' => 5,
			'max' => 360,
			'cursor' => 20,
		),
	),
),
```",
					),
				),
			),
			'date' => array(
				'setting' => array(
					'default' => '03/09/2015',
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Date', 'i18n' ),
					'description' => esc_html__( 'Focus the input to slide down the [jQuery UI datepicker](https://jqueryui.com/datepicker/)  widget. The date is validated according to the `dateFormat` selected.', 'i18n' ),
					'type' => 'kkcp_date',
					'input_attrs' => array(
						'dateFormat' => 'dd/mm/yy',
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '03/09/2015',
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Date', 'i18n' ),
		'type' => 'kkcp_date',
		'input_attrs' => array(
			'dateFormat' => 'dd/mm/yy',
		),
	),
),
```",
					),
				),
			),
			'date-inline' => array(
				'setting' => array(
					'default' => '1997-12-24',
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Date (`inline` with `input_attrs`)', 'i18n' ),
					'description' => esc_html__( 'Pass [jQuery UI datepicker](http://api.jqueryui.com/datepicker/) options and `inline` to always show a calendar without text input.', 'i18n' ),
					'type' => 'kkcp_date',
					'inline' => true,
					'input_attrs' => array(
						'dateFormat' => 'yy-mm-dd',
						'maxDate' => '+1m +1w',
						'firstDay' => 0,
						'showButtonPanel' => true,
					),
					'guide' => array(
						'title' => esc_html__( 'See Code', 'i18n' ),
						'text' => "```php
'an-id' => array(
	'setting' => array(
		'default' => '1997-12-24',
		'transport' => 'postMessage',
	),
	'control' => array(
		'label' => esc_html__( 'Date', 'i18n' ),
		'type' => 'kkcp_date',
		'inline' => true,
		'input_attrs' => array(
			'dateFormat' => 'yy-mm-dd',
			'maxDate' => '+1m +1w',
			'firstDay' => 0,
			'showButtonPanel' => true,
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
		'id' => 'section-presentation',
		'title' => esc_html__( 'Presentation controls', 'i18n' ),
		'description' => esc_html__( 'These controls are all tight to a dummy setting, their only purpose is to show some content between a control and the other.', 'i18n' ),
		'dashicon' => 105,
		'fields' => array(
			'kkcp-dummy' => array(
				'control' => array(
					'label' => esc_html__( 'Dummy', 'i18n' ),
					'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam consequatur sit fugit mollitia magni similique, nesciunt culpa maxime cupiditate debitis sed, facere odit, optio officiis architecto, ab veritatis id omnis.', 'i18n' ),
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
# Image

![sample image](http://lorempixel.com/g/270/180/city/)

## Base
`kkcp_section`

### Features
- icons for sections, in the same fashion as WordPress native icons for panels.
- reset all section values to the factory state or to the initial session value, prompt for a confirmation.

| First Header  | Second Header |
| ------------- | ------------- |
| Content Cell  | Content Cell  |
| Content Cell  | Content Cell  |

# Controls
All controls setting are required by default, set `'optional' => true` to allow a setting to be empty.

* text / email / url
* textarea / wp_editor (light)
* number
* toggle / switch / checkbox
* radio / radio image / buttonset
* multicheck
* slider
* color / alpha / palette / transparent
* font family / font weight
* select / dropdown / selectize / multiselect
* sortable (todo)
* tags / sortable tags
* dynamic color (**Premium**)
* dynamic size (**Premium**)

### WordPress native controls
You can use WordPress default controls as you can see in the demo, in this case you are in charge to handle the sanitization, defininig a 'sanitization_callback'
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
					'transport' => 'postMessage',
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
		'transport' => 'postMessage',
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
