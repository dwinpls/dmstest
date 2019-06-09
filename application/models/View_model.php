<?php
class View_model extends CI_Model{
function __construct() {
	parent::__construct();
}

public function ViewState()
{
	$query = $this->db->query("SELECT * FROM view_addressState");
	return $query->result();
}

public function ViewGender()
{
	$query = $this->db->query("SELECT * FROM view_gender");
	return $query->result();
}

public function ViewCivil()
{
	$query = $this->db->query("SELECT * FROM view_civilStatus");
	return $query->result();
}

public function ViewReligion()
{
	$query = $this->db->query("SELECT * FROM view_religion");
	return $query->result();
}

public function ViewClient()
{
	$query = $this->db->query("SELECT * FROM view_clientAssigned");
	return $query->result();
}

public function ViewExam()
{
	$query = $this->db->query("SELECT * FROM view_examStatus");
	return $query->result();
}

public function ViewEduc()
{
	$query = $this->db->query("SELECT * FROM view_educAttain");
	return $query->result();
}

public function ViewApplicantStat()
{
	$query = $this->db->query("SELECT * FROM view_applicantStatus");
	return $query->result();
}

public function ViewClaimType()
{
	$query = $this->db->query("SELECT * FROM view_claimType");
	return $query->result();
}

public function ViewDeathClaim()
{
	$query = $this->db->query("SELECT * FROM view_deathClaim");
	return $query->result();
}

public function ViewLab()
{
	$query = $this->db->query("SELECT * FROM view_applicantStatus");
	return $query->result();
}

public function ViewLoan()
{
	$query = $this->db->query("SELECT * FROM view_loanType");
	return $query->result();
}

public function ViewMemberType()
{
	$query = $this->db->query("SELECT * FROM view_membershipType");
	return $query->result();
}

public function ViewOffense()
{
	$query = $this->db->query("SELECT * FROM view_offense");
	return $query->result();
}

public function ViewSourcedBy()
{
	$query = $this->db->query("SELECT * FROM view_sourcedBy");
	return $query->result();
}

public function ViewViolation()
{
	$query = $this->db->query("SELECT * FROM view_violation");
	return $query->result();
}




}
?>