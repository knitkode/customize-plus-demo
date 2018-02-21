<?php defined( 'ABSPATH' ) or die;

/**
 * Customize options file
 *
 * @package      packageName
 * @since        0.0.1
 * @link         http://homepage.com
 * @author       name <email> (http://url.io)
 * @copyright    2018 | GPLv3
 * @license      GPLv3
 */

return array(
	array(
		'subject' => 'panel',
		'id' => 'example-panel-premium',
		'title' => esc_html__( 'Example premium panel', 'i18n' ),
		'description' => esc_html__( 'Layout generic options, globally change the look and feel', 'i18n' ),
		'dashicon' => 309,
		'type' => 'kkcp_panel',
		'sections' => array(
			array(
				'id' => 'example-section-premium',
				'title' => esc_html__( 'Example premium section', 'i18n' ),
				'description' => esc_html__( 'Just a sample section.', 'i18n' ),
				'type' => 'kkcp_section',
				'fields' => array(
					'in-panel-control-premium' => array(
						'control' => array(
							'label' => esc_html__( 'Example premium control', 'i18n' ),
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
		'id' => 'section-premium',
		'title' => esc_html__( 'Premium controls', 'i18n' ),
		'description' => esc_html__( 'This section collects all premium controls that come with [Customize Plus Premium](https://knitkode.com/products/customize-plus-premium)', 'i18n' ),
		'type' => 'kkcp_section',
		'dashicon' => 486,
		'fields' => array(
			'color-dynamic-active' => array(
				'setting' => array(
					'default' => '#f40030',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Dynamic Color', 'i18n' ),
					'description' => esc_html__( '(active role)', 'i18n' ),
					'type' => 'kkcp_color_dynamic',
					'info' => array(
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
					'info' => array(
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
					'info' => array(
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
					'info' => array(
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
			'size-dynamic-active' => array(
				'setting' => array(
					'default' => '14px',
					'transport' => 'recompilePost',
				),
				'control' => array(
					'label' => esc_html__( 'Size Dynamic 1', 'i18n' ),
					'description' => esc_html__( '(active role)', 'i18n' ),
					'type' => 'kkcp_size_dynamic',
					'info' => array(
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
					'info' => array(
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
					'info' => array(
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
					'info' => array(
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
			'knob' => array(
				'setting' => array(
					'default' => 74,
					'transport' => 'postMessage',
				),
				'control' => array(
					'label' => esc_html__( 'Knob', 'i18n' ),
					'description' => esc_html__( 'Basically a number input. Uses [jQuery.knob.js](https://github.com/aterrien/jQuery-Knob).', 'i18n' ),
					'type' => 'kkcp_knob',
					'info' => array(
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
					'info' => array(
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
					'info' => array(
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
					'info' => array(
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
);
