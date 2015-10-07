<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default1 extends CI_Controller {

	function __construct()
	{

	parent:: __construct();
	$this->is_logged();
	}

	function index()
	{
		
		$data['main_content'] = 'home';
		$data['pageloaded'] ='home';
		$this->load->view('includes/template', $data);	
			
	}

	function is_logged()
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
			$user_type = $this->session->userdata('user_type');

			if(isset($is_logged_in) || $is_logged_in ==true)
			{
					
						if($user_type =='admin')
						{
							redirect('site/admin_home');
						} else if($user_type == 'alumni')
							{
							redirect('site/alumni_home');	
							}else
								{
								redirect('site/company_home');
								}

			} 

		}


}