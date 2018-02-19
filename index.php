<?php get_header(); ?>
<?php
	$settings_keys = array(
	// Customize Plus controls
	'api-theme_mod',
	'api-option',
	'color',
	'color-no-transparent',
	'color-no-alpha',
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
	'checkbox',
	'toggle',
	'toggle-with-labels',
	'multicheck',
	'multicheck-sortable',
	'multicheck-sortable-max',
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
	'font-family-with-options',
	'font-family-just-one-monospace',
	'font-weight',
	'text',
	'text-max-length',
	'text-optional',
	'text-url',
	'text-email',
	'textarea',
	'textarea-html-escape',
  'textarea-html-dangerous',
	'textarea-html-tags',
  'textarea-html-context',
	'textarea-wp_editor',
	'textarea-wp_editor-options',
	'textarea-wp_editor-no-quicktags',
	'dashicon',
	'dashicons-max',
	'dashicons-max-from',
	// // Customize Plus Premium controls
	// 'color-dynamic-active',
	// 'color-dynamic-passive',
	// 'color-dynamic-hidetab-active',
	// 'color-dynamic-hidetab-passive',
	// 'size-dynamic-active',
	// 'size-dynamic-passive',
	// 'size-dynamic-hidetab-active',
	// 'size-dynamic-hidetab-passive',
	// 'knob',
	// 'knob-options',
	// 'date',
	// 'date-inline',
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
	if ( ! function_exists( 'kk_get_theme_mod' ) ) {
		echo 'Customize Plus is inactive, does not exists.
			Activate the plugin in order to view this demo.';
		get_footer();
		return;
	}
?>
<div class="alert alert-info mb-4">
	<small>For preview purposes values that are saved as <code>array</code>
		are 'JSONified' with php function <code>json_encode</code> and through
		JavaScript <code>JSON.stringify()</code>.
	</small>
</div>
<div class="row previews">
	<?php
		foreach ( $settings_keys as $key ) {
			$settings_api_keys = array(
				'api-option'
			);

			$is_jsonified = false;

			if ( in_array( $key, $settings_api_keys ) ) {

				// either use the static method on the theme class:
				// $value = Customize_Plus_Demo::get_option( $key );
				// or use the global functions Customize Plus makes available:
				$value = kk_get_option( $key );
				$key = kk_get_option_id_attr( $key );

			} else {

				// either use the static method on the theme class:
				// $value = Customize_Plus_Demo::get_theme_mod( $key );
				// or use the global functions Customize Plus makes available
				$value = kk_get_theme_mod( $key );

				if ( is_array( $value ) ) {
					$value = json_encode( $value );
					$is_jsonified = true;
				}

			} ?>
			<?php if ( $is_jsonified ) { ?>
				<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2"
					data-toggle="popover" data-content="For preview purposes values that are
					 saved as <code>array</code> are 'JSONified' with php function <code>
					 json_encode</code>  and through JavaScript <code>JSON.stringify()</code>">
			<?php } else { ?>
				<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
			<?php } ?>
				<?php echo "<div class='setting-name' title='$key'>$key</div>"; ?>
				<?php echo "<div class='setting-preview' id='$key' title='Setting: $key'>$value</div>"; ?>
			</div>
	<?php } ?>
</div>
<?php get_footer();
