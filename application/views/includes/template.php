<?php


if($pageloaded=='admin')
{
	$this->load->view('includes/header');
	$this->load->view('includes/admin_header');
	$this->load->view('includes/scripts');
	$this->load->view('includes/footable');
	$this->load->view($main_content); 	
	$this->load->view('includes/admin_footer');
}
else if ($pageloaded=='alumni')
{
	$this->load->view('includes/header');
	$this->load->view('includes/alumni_header');
	$this->load->view('includes/scripts');
	$this->load->view('includes/modals');	
	$this->load->view($main_content);
	$this->load->view('includes/user_footer');
}
else if ($pageloaded=='company')
{
	$this->load->view('includes/header');
	$this->load->view('includes/company_header');
	$this->load->view('includes/scripts');
	$this->load->view('includes/modals');	
	$this->load->view($main_content);
	$this->load->view('includes/user_footer');
}
else if ($pageloaded=='alumni_inactive')
{
	$this->load->view('includes/header');
	$this->load->view('includes/inactive_header');
	$this->load->view('includes/scripts');
	$this->load->view($main_content);
	$this->load->view('includes/user_footer');
}
else if ($pageloaded=='company_inactive')
{
	$this->load->view('includes/header');
	$this->load->view('includes/inactive_header');
	$this->load->view('includes/scripts');	
	$this->load->view($main_content);
	$this->load->view('includes/user_footer');
}
else
{
	$this->load->view('includes/header');
	$this->load->view('includes/scripts');
	$this->load->view('includes/modals');	
	$this->load->view($main_content); 
}
?>