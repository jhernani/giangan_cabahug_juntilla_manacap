<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


		function __construct()
		{

			parent:: __construct();
			$this->is_logged_in();
			$this->load->model('databasein');

		}

		function admin_home()
		{
		
			$data['main_content'] = 'admin_home';
			$page_type = 'admin';
			if($this->session->userdata('user_type')==$page_type)
			{
			$data['pageloaded'] = 'admin';
			$this->load->view('includes/template', $data);	
			}
			 else{
			 	$this->load->view('error');
			 }
		}

		function admin_tab($tab)
		{
			$page_type='admin';
			if($this->session->userdata('user_type')==$page_type)
			{
					if($tab=='view_alumni')
					{
						$data['result']=$this->databasein->view_alumni_data();
						$data['main_content']='view_alumni';
					}
					else if($tab=='view_companies')
					{
						$data['result']=$this->databasein->view_company_data();
						$data['main_content'] = 'view_companies';
					}
					else if($tab=='other_tasks')
					{
						$data['result']=$this->databasein->view_job_category();
						$data['main_content'] = 'other_tasks';
					}
					else if($tab=='add_users')
					{
						$data['main_content'] = 'add_users';
					}
					else if($tab=='add_alumni')
					{
						$data['main_content'] = 'add_alumni';
					}
					else if($tab=='add_company')
					{
						$data['main_content'] = 'add_company';
					}
					else
					{
						$data['main_content'] = 'view_reports';
					}
				$data['pageloaded'] = 'admin';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$this->load->view('error');
			}

		}


		function edit_user()
		{
			$edit_type=$this->input->post('edit_type');
			$page_type = 'admin';
			if($this->session->userdata('user_type')==$page_type)
			{
				if($edit_type=='alumni')
				{
					$data['result']=$this->databasein->retrieve_edit_alumni();
					$data['main_content']='edit_alumni';
				}
				else
				{
					$data['result']=$this->databasein->retrieve_edit_company();
					$data['main_content']='edit_company';
				}
				$data['pageloaded'] = 'admin';
				$this->load->view('includes/template', $data);

			}
			else
			{
				$this->load->view('error');
			}
		}



		function company_home()
		{
			$page_type = 'company';
			$data['personal'] = $this->databasein->retrieve_personal_info();
			$data['job_category'] = $this->databasein->retrieve_job_category();
			$data['job_post'] = $this->databasein->retrieve_job_post();
			if($this->session->userdata('user_type')==$page_type)
			{
				

					if($this->session->userdata('status')=='Active')
					{ 
					$data['main_content'] = 'company_home';
					$data['pageloaded'] = 'company';
					$this->load->view('includes/template', $data);	
					}
					else
					{
						$data['main_content'] = 'company_inactive';
						$data['pageloaded'] = 'company_inactive';
						$this->load->view('includes/template',$data);
					}
					
			}
			else
			 {
			 	$this->load->view('error');
			 }
		}


		function alumni_home()
		{
			$page_type = 'alumni';
			$status=$this->session->userdata('status');
			$data['experience'] = $this->databasein->retrieve_experience();
			$data['personal'] = $this->databasein->retrieve_personal_info();
			$data['education']=$this->databasein->retrieve_education();
			$data['projects']=$this->databasein->retrieve_projects();
			$data['organization']=$this->databasein->retrieve_organization();
			$data['awards']=$this->databasein->retrieve_awards();
			if($this->session->userdata('user_type')==$page_type)
			{

				if($status=='Active')
					{ 
					$data['main_content'] = 'alumni_home';
					$data['pageloaded'] = 'alumni';
					$this->load->view('includes/template', $data);	
					}
					else
					{
						$data['main_content'] = 'alumni_inactive';
						$data['pageloaded'] = 'alumni_inactive';
						$this->load->view('includes/template',$data);
					}
			}
			 else{
			 	$this->load->view('error');
			 }
		}

		function alumni_index()
		{	
			$page_type = 'alumni';
			if($this->session->userdata('user_type')==$page_type)
			{
					$data['experience'] = $this->databasein->retrieve_experience();
					$data['personal'] = $this->databasein->retrieve_personal_info();
					$data['education']=$this->databasein->retrieve_education();
					$data['projects']=$this->databasein->retrieve_projects();
					$data['organization']=$this->databasein->retrieve_organization();
					$data['awards']=$this->databasein->retrieve_awards();	
					$data['main_content'] = 'alumni_home';
					$data['pageloaded'] = 'alumni';
					$this->load->view('includes/template', $data);	
			}
			else
			{
			 	$this->load->view('error');
			}
		}

		function alumni_search()
		{	
			$page_type = 'alumni';

			if($this->session->userdata('user_type')==$page_type)
			{
					$data['search_term']=$this->input->post('search');
					$data['search_result']=$this->databasein->initial_search();
					$data['experience'] = $this->databasein->retrieve_experience();
					$data['personal'] = $this->databasein->retrieve_personal_info();
					$data['education']=$this->databasein->retrieve_education();
					$data['projects']=$this->databasein->retrieve_projects();
					$data['organization']=$this->databasein->retrieve_organization();
					$data['awards']=$this->databasein->retrieve_awards();	
					$data['main_content'] = 'alumni_search';
					$data['pageloaded'] = 'alumni';
					$this->load->view('includes/template', $data);	
			}
			else
			{
			 	$this->load->view('error');
			}
		}

		function company_index()
		{	
			$page_type = 'company';
			if($this->session->userdata('user_type')==$page_type)
			{
					$data['personal'] = $this->databasein->retrieve_personal_info();
					$data['job_category'] = $this->databasein->retrieve_job_category();
					$data['main_content'] = 'company_home';
					$data['pageloaded'] = 'company';
					$this->load->view('includes/template', $data);	
			}
			else
			{
			 	$this->load->view('error');
			}
		}

		function approved_posts()
		{
			$page_type = 'admin';

			$data['result']=$this->databasein->view_approved_posts();
			$data['main_content']='view_approved_posts';

			if($this->session->userdata('user_type')==$page_type)
			{
			$this->load->view('includes/template', $data);
			}
			 else{
			 	$this->load->view('error');
			 }
		}


		function company_view_job_info()
		{
			$page_type = 'company';
			$data['main_content']='company_view_job_info';
			$data['personal'] = $this->databasein->retrieve_personal_info();
			$data['job_category'] = $this->databasein->retrieve_job_category();
			$data['job_post'] = $this->databasein->retrieve_job_post();
			$data['company_view_job_info'] = $this->databasein->view_job_info(); 
			$data['pageloaded'] = 'company';

			if($this->session->userdata('user_type')==$page_type)
			{
			$this->load->view('includes/template', $data);
			}
			 else{
			 	$this->load->view('error');
			 }

		}

		function edit_job_info()
		{
			$page_type = 'company';
			$data['main_content']='edit_job_info';

			if($this->session->userdata('user_type')==$page_type)
			{
			$this->load->view('includes/template', $data);
			}
			 else{
			 	$this->load->view('error');
			 }

		}
		
		function archieve_job_info()
		{
			$page_type = 'company';
			$data['main_content']='archieve_job_info';

			if($this->session->userdata('user_type')==$page_type)
			{
			$this->load->view('includes/template', $data);
			}
			 else{
			 	$this->load->view('error');
			 }

		}
		
		function is_logged_in()
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
			if(!isset($is_logged_in) || $is_logged_in !=true)
			{
				echo 'You dont have permission to access this page.';
				echo anchor(site_url('default1'), 'Login');
				die();
			} 

		}




}

?>