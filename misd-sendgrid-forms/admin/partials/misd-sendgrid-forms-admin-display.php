<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://tripleequalsdesign.com
 * @since      1.0.0
 *
 * @package    Misd_Sendgrid_Forms
 * @subpackage Misd_Sendgrid_Forms/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
	<h2><?= esc_html(get_admin_page_title()); ?></h2>
	<form action="options.php" name="sendgrid_options" method="post">
		<?php settings_fields($this->pluginName); ?>
		<fieldset>
			<label for="<?= $this->pluginName; ?>-apikey">SendGrid API Key</label><br>
			<input type="text" id="<?= $this->pluginName; ?>-apikey" class="regular-text" placeholder="Paste your Sendgrid API Key here" name="<?= $this->pluginName; ?>[apikey]">
			<span class="description">
				<?php esc_attr_e('Find out more about API Keys: https://sendgrid.com/docs/Classroom/Send/How_Emails_Are_Sent/api_keys.html', 'wp_admin_style'); ?>
			</span>
		</fieldset>
		<?php submit_button('Save changes', 'primary','submit', TRUE); ?>
	</form>
</div>