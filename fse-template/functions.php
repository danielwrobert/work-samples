<?php
/**
 * Demeter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Demeter
 * @since Demeter 1.0.0
 */

/**
 * Register theme stylesheets.
 */

if ( ! function_exists( 'demeter_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Demeter 1.0
	 *
	 * @return void
	 */
	function demeter_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'demeter-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'demeter-style' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'demeter_styles' );


/**
 * Register block styles.
 */

if ( ! function_exists( 'demeter_block_styles' ) ) :
	/**
	 * Register block styles.
	 *
	 * @since Demeter 1.0
	 *
	 * @return void
	 */
	function demeter_block_styles() {
		register_block_style(
			'core/separator',
			array(
				'name'         => 'stitches',
				'label'        => __( 'Stitches', 'demeter' ),
				'inline_style' => "
				.wp-block-separator.is-style-stitches {
					border: none;
					width: 4rem;
					height: 1.5rem;
					background-image: url('data:image/svg+xml,%3Csvg%20id%3D%22stitch%22%20data-name%3D%22stitch%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2087.5%2023.1%22%3E%3Cline%20x1%3D%220.1%22%20y1%3D%2213.4%22%20x2%3D%2287.4%22%20y2%3D%2210.2%22%20stroke%3D%22%23bcc2cd%22%20stroke-width%3D%222.75%22%2F%3E%3Cline%20x1%3D%2242.4%22%20y1%3D%220.8%22%20x2%3D%2243.6%22%20y2%3D%2221.8%22%20stroke%3D%22%23bcc2cd%22%20stroke-width%3D%222.75%22%2F%3E%3Cline%20x1%3D%2259.2%22%20y1%3D%220.4%22%20x2%3D%2260.4%22%20y2%3D%2221.4%22%20stroke%3D%22%23bcc2cd%22%20stroke-width%3D%222.75%22%2F%3E%3Cline%20x1%3D%2275.8%22%20y1%3D%220.1%22%20x2%3D%2277%22%20y2%3D%2221.1%22%20stroke%3D%22%23bcc2cd%22%20stroke-width%3D%222.75%22%2F%3E%3Cline%20x1%3D%2226.3%22%20y1%3D%221.1%22%20x2%3D%2227.4%22%20y2%3D%2222.1%22%20stroke%3D%22%23bcc2cd%22%20stroke-width%3D%222.75%22%2F%3E%3Cline%20x1%3D%229.7%22%20y1%3D%222%22%20x2%3D%2210.9%22%20y2%3D%2223%22%20stroke%3D%22%23bcc2cd%22%20stroke-width%3D%222.75%22%2F%3E%3C%2Fsvg%3E');
					background-position: center;
					background-repeat: no-repeat;
				}",
			)
		);
	}
endif;

add_action( 'init', 'demeter_block_styles' );

/**
 * Register block bindings.
 */

 if ( ! function_exists( 'demeter_block_bindings' ) ) :
 	/**
 	 * Register block bindings.
 	 *
 	 * @since Demeter 1.0
 	 *
 	 * @return void
 	 */
 	function demeter_block_bindings() {
		register_block_bindings_source( 'demeter/copyright', array(
			'label'              => __( 'Copyright', 'demeter' ),
			'get_value_callback' => 'demeter_copyright_binding'
		) );
	}
endif;

/**
 * Get the copyright text.
 *
 * @since Demeter 1.0
 *
 * @return string
 */
function demeter_copyright_binding() {
	return '&copy; ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' );
}

add_action( 'init', 'demeter_block_bindings' );