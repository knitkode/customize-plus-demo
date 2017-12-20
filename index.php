<?php get_header(); ?>
<?php
	$settings_keys = array(
	// Customize Plus controls
	'api-theme_mod',
	'api-option',
	'color',
	'color-no-transparent',
	'color-alpha',
	'color-palette1',
	'color-palette2',
	'color-palette3',
	'radio',
	'buttonset',
	'buttonset-three',
	'buttonset-four',
	'radio-image',
	'radio-image-custom',
	'slider',
	'slider-em',
	'slider-px-percent',
	'slider-no-units',
	'number',
	'number-float',
	'number-min',
	'number-max',
	'number-step',
	'toggle',
	'multicheck',
	'multicheck-sortable',
	'select',
	'select-selectize',
	'select-selectize-options',
	'select-selectize-more-items',
	'select-selectize-tags-plugins',
	'tags',
	'tags-removable',
	'tags-sortable-removable',
	'tags-max-items',
	'sortable',
	'font-family',
	'font-weight',
	'text',
	'text-max-length',
	'text-optional',
	'text-url',
	'text-email',
	'textarea',
	'textarea-html',
	'textarea-wp_editor',
	'textarea-wp_editor-options',
	'textarea-wp_editor-no-quicktags',
	'dashicons',
	// Customize Plus Premium controls
	'color-dynamic-active',
	'color-dynamic-passive',
	'color-dynamic-hidetab-active',
	'color-dynamic-hidetab-passive',
	'size-dynamic-active',
	'size-dynamic-passive',
	'size-dynamic-hidetab-active',
	'size-dynamic-hidetab-passive',
	'knob',
	'knob-options',
	'date',
	'date-inline',
	// WordPress controls
	'wp-color',
	'wp-media',
	'wp-image',
	'wp-background',
	'wp-upload',
	'wp-cropped',
	'wp-site',
	'wp-header',
	);
?>
<?php
	foreach ( $settings_keys as $key ) {
		$settings_api_keys = array(
			'api-option'
		);
		if ( in_array( $key, $settings_api_keys ) ) {
			// $value = Customize_Plus_Demo::get_option( $key );
			$value = kk_get_option( $key );
			$key = kk_get_option_id( $key );
		} else {
			// $value = Customize_Plus_Demo::get_theme_mod( $key );
			$value = kk_get_theme_mod( $key );
			if ( is_array( $value ) ) {
				$value = json_encode( $value );
			}
		} ?>
		<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2">
			<?php echo "<div class='setting-name' title='$key'>$key</div>"; ?>
			<?php echo "<div class='setting-preview' id='$key' title='$key'>$value</div>"; ?>
		</div>
<?php } ?>
<?php get_footer();
