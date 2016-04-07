<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://tripleequalsdesign.com
 * @since      1.0.0
 *
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/includes
 * @author     Eli Moreta-Feliz <misdreavus79@gmail.com>
 */
class Misd_Sendgrid_Forms_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'misd-sendgrid-forms',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
