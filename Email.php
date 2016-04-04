<?php

class Email{
	private $sendgrid;
	private $email;

	function __construct($apiKey){
		$this->sendgrid = new SendGrid($apiKey);
		$this->email = new SendGrid\Email();
	}

	public function send(){
		$this->email
				->addTo('foo@bar.com')
			    ->setFrom('me@bar.com')
			    ->setSubject('Subject goes here')
			    ->setText('Hello World!')
			    ->setHtml('<strong>Hello World!</strong>');

		try {
		    $this->sendgrid->send($this->email);
		    $message = "Email sent";
		} catch(\SendGrid\Exception $e) {
		    /*echo $e->getCode();
		    foreach($e->getErrors() as $er) {
		        echo $er;
		    }*/
		    $message = "There was an error sending your email. Please try again later.";
		}

		return $message;
	}
}



//sendgrid class just sends email, abstract class called SendgridException for when a nonce insn't provided for the email send part