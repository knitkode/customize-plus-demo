<?php

/**
 * Customize Plus Demo Theme
 *
 * @package   Customize_Plus
 * @author    Author's name <author@mail.com>
 * @copyright 2015 Author's name
 * @license   http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/K6
 */
class Customize_Plus_Demo {

	/**
	 * Theme version
	 *
	 * @since 0.0.1
	 */
	const VERSION = '0.0.1';

	/**
	 * Theme prefix constant
	 * @since 0.0.1
	 */
	const PREFIX = 'cpdemo';

	/**
	 * Theme docs base url
	 * @since 0.0.1
	 */
	const DOCS_BASE_URL = 'https://knitkode.com/docs/';

	/**
	 * Settings default values
	 *
	 * @since 0.0.1
	 * @var array
	 */
	public static $settings_defaults;

	/**
	 * Constructor
	 *
	 * @since 0.0.1
	 */
	public function __construct() {
		require_once dirname( __FILE__ ) . '/vendor/tgm/plugin-activation/class-tgm-plugin-activation.php';
		add_action( 'tgmpa_register', array( __CLASS__, 'register_plugins' ) );
		add_action( 'after_setup_theme', array( __CLASS__, 'add_theme_supports' ) );
		add_action( 'kkcp_theme_is_configured', array( __CLASS__, 'set_settings_defaults' ), 10, 1 );
		add_action( 'kkcp_customize_register_custom_classes', array( __CLASS__, 'register_custom_classes' ), 20, 1 );
		add_action( 'kkcp_info_add_to_view', array( __CLASS__, 'add_contacts_to_customize' ) );
		add_action( 'customize_register', array( __CLASS__, 'remove_wp_defaults' ), 10, 1 );
		add_action( 'customize_controls_print_styles' , array( __CLASS__, 'customize_enqueue_css' ) );
		add_action( 'customize_controls_print_footer_scripts' , array( __CLASS__, 'customize_enqueue_js' ) );
		// the following pretty self-explanatory hooks are also available
		// 'kkcp_customize_enqueue_css_admin_pre'
		// 'kkcp_customize_enqueue_css_admin_post'
		// 'kkcp_customize_enqueue_js_admin_pre'
		// 'kkcp_customize_enqueue_js_admin_post'
		add_action( 'customize_preview_init' , array( __CLASS__, 'customize_enqueue_js_preview' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_manager' ) );
	}

	/**
	 * Register the required plugins for this theme.
	 * This function is hooked into tgmpa_init, which is fired within the
	 * TGM_Plugin_Activation class constructor.
	 *
	 * @see http://tgmpluginactivation.com/configuration/
	 * @since 0.0.1
	 */
	public static function register_plugins() {
		$plugins = array(
			array(
				'name'             => 'Customize Plus',
				'slug'             => 'customize-plus',
				'version'          => '0.0.1',
				'required'         => true,
				'force_activation' => false,
			),
			// @note this is only for Customize Plus Premium
			array(
				'name'             => 'Customize Plus Premium',
				'slug'             => 'customize-plus-premium',
				'version'          => '0.0.1',
				'required'         => false, // @@note once released this should be false ... ? \\
				'force_activation' => false, // @@note once released this should be false ... ? \\
			),
		);

		$config = array(
			'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'message'      => '',                      // Message to output right before the plugins table.
		);
		tgmpa( $plugins, $config );
	}

	/**
	 * Add Theme Support
	 *
	 * @since 0.0.1
	 */
	public static function add_theme_supports() {

		// Customize Plus settings
		add_theme_support( 'kkcp-customize', array(
			'prefix' => self::PREFIX,
			'customize_tree' => self::get_customize_tree(),
			'images_base_url' => get_stylesheet_directory_uri() . '/images/',
			'docs_base_url' => self::DOCS_BASE_URL,

			// @note this works only with Customize Plus Premium
			'styles' => array(
				array(
					'id' => self::PREFIX . '-example',
					'dependencies' => array(),
					'version' => self::VERSION,
					'path_uncompiled' => '/styles/theme.less',
				),
			),

			// @note this works only with Customize Plus Premium
			'components' => array(
				'compiler' => 'required',
				'advanced' => 'required',
				'screenpreview' => 'recommended',
				'reset' => 'recommended',
				'resizer' => 'recommended',
				'search' => 'recommended',
				'import' => 'blocked',
				'export' => 'recommended',
				'editor' => 'optional',
				'info' => 'recommended',
			)
		) );
	}

	/**
	 * Set settings default value on static property
	 *
	 * @since 0.0.1
	 * @param array $settings_defaults
	 */
	public static function set_settings_defaults( $settings_defaults ) {
		self::$settings_defaults = $settings_defaults;
	}

	/**
	 * Add custom controls / settings / sections / panels classes
	 * to the Customize (we extend Customize Plus, so we use its hook).
	 *
	 * @since  0.0.1
	 * @param $customize_plus {KKcp_Customize} Customize Plus Customize instance
	 */
	public static function register_custom_classes( $customize_plus ) {
		// require_once( get_stylesheet_directory() . '/class-customize-classes.php' );
		// $customize_plus::register_custom_types( array(
		// 	'controls' => array(
		// 		'kkcpt_layout_columns' => 'KKcpt_Customize_Control_Layout_Columns',
		// 	)
		// ) );
	}

	/**
	 * Get customize tree
	 *
	 * @since  0.0.1
	 * @return array
	 */
	public static function get_customize_tree() {
		$customize_tree_theme = (array) require( get_stylesheet_directory() . '/options-demo.php' );
		return $customize_tree_theme;
	}

	/**
	 * Add contact details to Customize screen (info component)
	 * @note this works only with Customize Plus Premium
	 *
	 * @since  0.0.1
	 */
	public static function add_contacts_to_customize () {
		?>
		<h3><?php esc_html_e( 'Contact and Social' ); ?></h3>
		<p><?php esc_html_e( 'Website' ); ?>: <b><a href="https://knitkode.com" target="_blank">knitkode.com</a></b><br>
			<?php esc_html_e( 'Mail' ); ?>: <b><a href="mailto:dev@knitkode.com" title="Contact the author" target="_blank">dev@knitkode.com</a></b></p>
		<?php
	}

	/**
	 * Remove default WordPress panel/sections
	 *
	 * check here: http://wordpress.stackexchange.com/a/161110/25398
	 *
	 * @since  0.0.1
	 * @param {WP_Customize_Manager} $wp_customize Theme Customizer object
	 */
	public static function remove_wp_defaults( $wp_customize ) {
		// $wp_customize->remove_panel( 'nav_menus' );
		// $wp_customize->remove_panel( 'widgets' );
		// $wp_customize->remove_section( 'colors' );
		// $wp_customize->remove_section( 'static_front_page' );
		// $wp_customize->remove_section( 'title_tagline' );
		// $wp_customize->remove_section( 'background_image' );
		// $wp_customize->remove_section( 'header_image' );
		// $wp_customize->remove_control( 'background_color' );
		// $wp_customize->remove_control( 'header_textcolor' );
	}

	/**
	 * Enqueue css in the admin page of the customize
	 *
	 * @since  0.0.1
	 */
	public static function customize_enqueue_css() {
		wp_enqueue_style( self::PREFIX . '-customize', get_template_directory_uri() . '/styles/customize.css', self::VERSION, false );
	}

	/**
	 * Enqueue js in the admin page of the customize
	 *
	 * @since  0.0.1
	 */
	public static function customize_enqueue_js() {
		wp_enqueue_script( self::PREFIX . '-customize', get_template_directory_uri() . '/scripts/customize.js', array( 'kkcp-customize' ), self::VERSION, false );
	}

	/**
	 * Enqueue js in the theme preview of the customize
	 *
	 * @since  0.0.1
	 */
	public static function customize_enqueue_js_preview() {
		wp_enqueue_script( self::PREFIX . '-customize', get_template_directory_uri() . '/scripts/customize-preview.js', array( 'kkcp-customize-preview' ), self::VERSION, true );
	}

	/**
	 * Safe `get_theme_mod` with default fallback
	 *
	 * This is just to show an alternative to the function
	 * `kk_get_theme_mod( $opt_name )` available globally, they work the same
	 *
	 * @since  0.0.1
	 * @param string $opt_name
	 * @return ?
	 */
	public static function get_theme_mod( $opt_name ) {
		if ( isset( self::$settings_defaults[ $opt_name ] ) ) {
			return get_theme_mod( $opt_name, self::$settings_defaults[ $opt_name ] );
		} else {
			return get_theme_mod( $opt_name );
		}
	}

	/**
	 * Safe `get_option` with default fallback
	 *
	 * This is just to show an alternative to the function
	 * `kk_get_option( $opt_name )` available globally, they work the same
	 *
	 * @since  0.0.1
	 * @param string $opt_name
	 * @return ?
	 */
	public static function get_option( $opt_name ) {
		$full_id = self::PREFIX . '[' . $opt_name . ']';
		$option_array = get_option( self::PREFIX );
		if ( $option_array && isset( $option_array[ $opt_name ] ) ) {
			return $option_array[ $opt_name ];
		} else if ( isset( self::$settings_defaults[ $full_id ] ) ) {
			return self::$settings_defaults[ $full_id ];
		} else {
			return null; // @@tocheck \\
		}
	}

	/**
	 * Enqueue default style.css and bootstrap files required only for this demo
	 *
	 * @since 0.0.1
	 */
	public static function enqueue_manager() {
		wp_enqueue_script( self::PREFIX . '-bootstrap', get_template_directory_uri() . '/scripts/bootstrap.js', array( 'jquery' ) );
		wp_enqueue_style( self::PREFIX . '-bootstrap', get_template_directory_uri() . '/styles/bootstrap.css' );
		wp_enqueue_style( self::PREFIX . '-theme', get_template_directory_uri() . '/style.css', array(), self::VERSION );
	}
}

new Customize_Plus_Demo;
