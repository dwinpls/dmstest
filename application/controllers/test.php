<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use thiagoalessio\TesseractOCR\TesseractOCR;

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('test');
		

	}
}
