<?php

/*
Plugin Name: Misd Sendgrid Forms
Plugin URI: http://misd.info/sendgrid-forms
Description: Create contact forms using the power of SendGrid
Version: 0.0.1
Author: Eli Moreta-Feliz
Author URI: http://tripleequalsdesign.com
Copyright: Eli Moreta-Feliz
*/

if(!defined( 'ABSPATH' )){
	header('Location: http://google.com');
}

class MisdSendGridForms{
	private $apiKey;

	function __construct(){

	}

	public function getApiKey(){
		return $this->apiKey;
	}
}