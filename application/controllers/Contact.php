<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function send()
	{
		$this->load->view('contact-messages/add');
	}

}