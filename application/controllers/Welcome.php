<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use thiagoalessio\TesseractOCR\TesseractOCR;

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		
		echo (new TesseractOCR('files\text.png'))
		->run();
		
		$serverName = "localhost\SQLEXPRESS";
        $connectionInfo = array("Database"=>"dummyDMS");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
		
        if( $conn )
		{
           echo "<br/> Connection established.<br/>";
        }
         else
		{
           echo "Connection could not be established.<br />";
           die( print_r( sqlsrv_errors(), true));
        }



	}
}
