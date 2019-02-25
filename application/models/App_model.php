<?php
class App_model extends CI_Model{
function __construct() {
	parent::__construct();
}

public function InsertFile($data, $file)
{
	$data = array(
		'docuType_ID' => $this->input->post(''),
		'docu_uploader' => $this->input->post(''),
		'docu_name' => $this->input->post(''),
		'docu_filepath' => $this->input->post(''),
		'docu_fileUploaded' => $this->input->post('')

	); 
}

public function InsertApplication($data)
{
	$data = array(
		'APP_docuID' => $this->input->post(''),
		'APP_firstName' => $this->input->post(''),
		'APP_middleName' => $this->input->post(''),
		'APP_lastName' => $this->input->post(''),
		'APP_birthdate' => $this->input->post(''),
		'APP_gender' => $this->input->post(''),
		'APP_civilStatus_ID' => $this->input->post(''),
		'APP_religion_ID' => $this->input->post(''),
		'APP_height' => $this->input->post(''),
		'APP_pleasPers' => $this->input->post(''),
		'APP_course' => $this->input->post(''),
		'APP_address' => $this->input->post(''),
		'APP_skills' => $this->input->post(''),
		'APP_contactNo' => $this->input->post(''),
		'APP_clientAssigned_ID' => $this->input->post(''),
		'APP_examStatus_ID' => $this->input->post(''),
		'APP_workExp' => $this->input->post(''),
		'APP_educationAttain_ID' => $this->input->post(''),
		'APP_referredBy' => $this->input->post(''),
		'APP_sourcedBy_ID' => $this->input->post(''),
		'APP_dateApplied' => $this->input->post(''),
		'APP_applicantStatus_ID' => $this->input->post(''),
		'APP_interviewRemarks' => $this->input->post('')
	); 

}
}
?>