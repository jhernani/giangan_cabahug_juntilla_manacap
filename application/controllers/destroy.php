<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destroy extends CI_Controller {


function index()
	{
		
		redirect('default1');
			
	}

function des_ses()
	{

		$this->session->sess_destroy();
		$this->index();
	}


}

?>