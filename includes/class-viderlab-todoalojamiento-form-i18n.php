<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://viderlab.com
 * @since      1.0.0
 *
 * @package    ViderLab_TodoAlojamiento_Form
 * @subpackage ViderLab_TodoAlojamiento_Form/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    ViderLab_TodoAlojamiento_Form
 * @subpackage ViderLab_TodoAlojamiento_Form/includes
 * @author     ViderLab <contacto@viderlab.com>
 */
class ViderLab_TodoAlojamiento_Form_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'viderlab-todoalojamiento-form',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
