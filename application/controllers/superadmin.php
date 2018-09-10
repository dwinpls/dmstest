<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superadmin extends CI_Controller {

	public function index()
	{
		$this->load->view('SA/dashboard');
	
	}

	public function applicant()
	{
		$this->load->view('forms/applicant');
		
	}
	
}