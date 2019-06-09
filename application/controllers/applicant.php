<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use thiagoalessio\TesseractOCR\TesseractOCR;

class applicant extends CI_Controller {

	function __construct() 
    { 
         parent::__construct(); 
    }
         
	public function index()
	{
		$this->load->model('View_model');

		$data = array(
			'sql_add' => $this->View_model->ViewState(),
			'sql_gen' => $this->View_model->ViewGender(),
			'sql_cvs' => $this->View_model->ViewCivil(),
			'sql_rel' => $this->View_model->ViewReligion(),
			'sql_cla' => $this->View_model->ViewClient(),
			'sql_est' => $this->View_model->ViewExam(),
			'sql_eda' => $this->View_model->ViewEduc(),
			'sql_aps' => $this->View_model->ViewApplicantStat()
		);

        $connectionInfo = array("Database"=>"dummyDMS");
        $conn = sqlsrv_connect("localhost\SQLEXPRESS", $connectionInfo);
		
        if( $conn )
		{
           
        }
         else
		{
         //  echo "Connection could not be established.<br />";
         //  die( print_r( sqlsrv_errors(), true));
        }

		$this->load->view('forms/applicant', $data);
	}

	public function ADD_APP($file, $data)
	{
		$this->load->model('App_model');
		$this->load->library('form_validation');

	//	 $this->form_validation->set_rules('fle','','')

		if (isset($_POST['submit'])) {
			# code...
		}
	}

}
