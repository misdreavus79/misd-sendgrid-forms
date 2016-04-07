<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://tripleequalsdesign.com
 * @since             1.0.0
 * @package           Misd_Sendgrid_Forms
 *
 * @wordpress-plugin
 * Plugin Name:       Misd Sendgrid Forms
 * Plugin URI:        http://misd.info/sendgrid-forms
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Eli Moreta-Feliz
 * Author URI:        http://tripleequalsdesign.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       misd-sendgrid-forms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-misd-sendgrid-forms-activator.php
 */
function activate_misd_sendgrid_forms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-misd-sendgrid-forms-activator.php';
	Misd_Sendgrid_Forms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-misd-sendgrid-forms-deactivator.php
 */
function deactivate_misd_sendgrid_forms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-misd-sendgrid-forms-deactivator.php';
	Misd_Sendgrid_Forms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_misd_sendgrid_forms' );
register_deactivation_hook( __FILE__, 'deactivate_misd_sendgrid_forms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-misd-sendgrid-forms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_misd_sendgrid_forms() {

	$plugin = new Misd_Sendgrid_Forms();
	$plugin->run();

}
run_misd_sendgrid_forms();
