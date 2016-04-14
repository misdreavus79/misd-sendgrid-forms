<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://tripleequalsdesign.com
 * @since      1.0.0
 *
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/public
 * @author     Eli Moreta-Feliz <misdreavus79@gmail.com>
 */
class Misd_Sendgrid_Forms_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $pluginName    The ID of this plugin.
	 */
	private $pluginName;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $pluginName       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $pluginName, $version ) {

		$this->pluginName = $pluginName;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Misd_Sendgrid_Forms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Misd_Sendgrid_Forms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->pluginName, plugin_dir_url( __FILE__ ) . 'css/misd-sendgrid-forms-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Misd_Sendgrid_Forms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Misd_Sendgrid_Forms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->pluginName, plugin_dir_url( __FILE__ ) . 'js/misd-sendgrid-forms-public.js', array( 'jquery' ), $this->version, false );

	}

}
