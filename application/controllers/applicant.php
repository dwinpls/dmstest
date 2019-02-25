<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use thiagoalessio\TesseractOCR\TesseractOCR;

class applicant extends CI_Controller {

	function __construct() 
    { 
         parent::__construct(); 
         $this->load->model('App_model');




    }
         
	public function index()
	{
		$data = array(
			'sql_add' => "SELECT * FROM view_addressState",
			'sql_gen' => "SELECT * FROM view_gender",
			'sql_cvs' => "SELECT * FROM view_civilStatus",
			'sql_rel' => "SELECT * FROM view_religion",
			'sql_cla' => "SELECT * FROM view_clientAssigned",
			'sql_est' => "SELECT * FROM view_examStatus",
			'sql_eda' => "SELECT * FROM view_educAttain",
			'sql_aps' => "SELECT * FROM view_applicantStatus"

		);

		$this->load->view('forms/applicant', $data);
		
		


	}

}
