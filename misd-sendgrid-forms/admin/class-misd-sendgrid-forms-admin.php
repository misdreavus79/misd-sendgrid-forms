<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://tripleequalsdesign.com
 * @since      1.0.0
 *
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/admin
 * @author     Eli Moreta-Feliz <misdreavus79@gmail.com>
 */
class Misd_Sendgrid_Forms_Admin {

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
	 * @param      string    $pluginName       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $pluginName, $version ) {

		$this->pluginName = $pluginName;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function adminEnqueueStyles() {

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

		wp_enqueue_style( $this->pluginName, plugin_dir_url( __FILE__ ) . 'css/misd-sendgrid-forms-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function adminEnqueueScripts() {

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

		wp_enqueue_script( $this->pluginName, plugin_dir_url( __FILE__ ) . 'js/misd-sendgrid-forms-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function addPluginAdminMenu(){
		
		//add option menu item in the settings menu
		add_options_page('Misd Sendgrid Forms Options', 'Misd Forms', 'manage_options', $this->pluginName, array($this, 'displayPluginSetupPage'));
	}

	public function addActionLinks($links){

		$customLinks = [
		    '<a href="' . admin_url( 'options-general.php?page=' . $this->pluginName ) . '">' . __('Settings', $this->pluginName) . '</a>'
		];

		return array_merge($customLinks, $links);
	}

	public function displayPluginSetupPage(){
		include_once 'partials/misd-sendgrid-forms-admin-display.php';
	}

	public function sanitizeUserInput($input){
		$valid = [];

		$valid['apikey'] = (isset($input['apikey']) && !empty($input['apikey']));

		return $valid;
	}
}
