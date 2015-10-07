<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control1 extends CI_Controller {

	function __construct()
	{

	parent:: __construct();
	$this->load->model('databasein');

	}



	function validate_credentials()
	{

		$data = array('username' =>  $_POST['username'], 'password' => md5($_POST['password']) );	
		$query=$this->databasein->validate($data);

		if($query)
		{

			$data= array(

				'username' =>$this->input->post('username'),
				'is_logged_in' => true

				);
			$this->session->set_userdata($data);
			$type=$this->session->userdata('user_type');

			if($type=='admin')
			{
				redirect('site/admin_home');
			}else if($type=='company')
				{
					redirect('site/company_home');
				}else
					{
						redirect('site/alumni_home');
					}
		}
		else
		{

			$message = "NOT REGISTERED/WRONG PASSWORD";
            echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('default1','refresh');

		}


	}


	function edit_user_data()
	{
		$edit_type = $this->input->post('edit_type');
		if($edit_type=='alumni')
		{
			$data=array
			(
			'fname' =>$this->input->post('newfname'),
			'mname' =>$this->input->post('newmname'),
			'lname' =>$this->input->post('newlname'),
			'course' =>$this->input->post('newcourse')
			);
		$this->databasein->edit_alumni_data($data);
		$tab='view_alumni';
		redirect(site_url("site/admin_tab/{$tab}"));
		}
		else
		{
			 $data=array
			 (
			'company_name' =>$this->input->post('newcompany_name'),
			'email' =>$this->input->post('newemail'),
			'contact' =>$this->input->post('newcontact'),
			'address' =>$this->input->post('newaddress')
			);	
		$this->databasein->edit_company_data($data);
		$tab='view_companies';
		redirect(site_url("site/admin_tab/{$tab}"));	
		}
	}


	function update_status()
	{
		$update_type = $this->input->post('update_type');
		if($update_type=='alumni')
		{
			$data=array('alumni_id' =>$this->input->post('alumni_id'),'status' =>$this->input->post('status'));
			$this->databasein->update_alumni_status($data);
			$tab='view_alumni';
			redirect(site_url("site/admin_tab/{$tab}"));
		}
		else
		{
			$data=array('company_id' =>$this->input->post('company_id'),'status' =>$this->input->post('status'));
			$this->databasein->update_company_status($data);
			$tab='view_companies';
			redirect(site_url("site/admin_tab/{$tab}"));
		}

	}


	function add_user()
	{	
		$add_type=$this->input->post('add_type');
		$query=$this->databasein->insert_user();

			if($query)
			{
				if($add_type=='alumni')
				{
					$message = "User is now added";
		            echo "<script type='text/javascript'>alert('$message');</script>";
		            $tab='view_alumni';
					redirect(site_url("site/admin_tab/{$tab}"),'refresh');
				}
				else
				{
					$message = "Company is now added";
                    echo "<script type='text/javascript'>alert('$message');</script>";
					$tab='view_companies';
					redirect(site_url("site/admin_tab/{$tab}"),'refresh');
				}
			}
			else
			{

				if($add_type=='company')
				{
					$message = "Username already exist";
		            echo "<script type='text/javascript'>alert('$message');</script>";
					$tab='add_users';
					redirect(site_url("site/admin_tab/{$tab}"),'refresh');
				}
				else
				{
					$message = "Username already exist";
	                echo "<script type='text/javascript'>alert('$message');</script>";
	                $tab='add_users';
					redirect(site_url("site/admin_tab/{$tab}"),'refresh');
				}
			}
		
	}

	function add_jobcategory()
	{
		$this->form_validation->set_rules('jobcat','Job Category','required');
		if($this->form_validation->run() == FALSE)
		{
			$data['pageloaded'] = 'admin';
			$data['main_content']='other_tasks';
			$this->load->view('includes/template',$data);
		} else
			{
				 if($query = $this->databasein->add_jobcategory())
				 {
				 	$message ="Job Category Added";
				 	echo "<script type='text/javascript'>alert('$message');</script>";
				 	$tab='other_tasks';
					redirect(site_url("site/admin_tab/{$tab}"),'refresh');
				 }	else
					{

						$message = "Job Category already exist";
	                    echo "<script type='text/javascript'>alert('$message');</script>";
						$tab='other_tasks';
						redirect(site_url("site/admin_tab/{$tab}"),'refresh');
					}

			
			}

	}

	function add_skill()
	{
		$this->form_validation->set_rules('skill','Skill','required');
		if($this->form_validation->run() == FALSE)
		{
			$data['pageloaded'] = 'admin';
			$data['main_content']='other_tasks';
			$this->load->view('includes/template',$data);
		} else
			{
				 if($query = $this->databasein->add_skill())
				 {
				 	$message ="Skill Added";
				 	echo "<script type='text/javascript'>alert('$message');</script>";
				 	$tab='other_tasks';
					redirect(site_url("site/admin_tab/{$tab}"),'refresh');
				 }	else
					{

						$message = "Skill already exist";
	                    echo "<script type='text/javascript'>alert('$message');</script>";
						$tab='other_tasks';
						redirect(site_url("site/admin_tab/{$tab}"),'refresh');
					}

			
			}

	}

	function edit_alumni_inactive()
	{
		$query=$this->databasein->add_user_inactive();
		if($query)
				{
					
					$data['main_content'] = 'alumni_inactive_upload';
					$data['pageloaded'] = 'alumni_inactive';
					$this->load->view('includes/template',$data);

				}
				else
				{

				}

	}

	function edit_company_inactive()
	{
		$query=$this->databasein->add_user_inactive();
		if($query)
				{
					
					$data['main_content'] = 'company_inactive_upload';
					$data['pageloaded'] = 'company_inactive';
					$this->load->view('includes/template',$data);

				}
				else
				{

				}

	}


		function post_job()
		{
			$query=$this->databasein->job_post_insert();
			if($query)
			{
				redirect('site/company_home');
			}
		}

		function add_experience()
		{
			$query=$this->databasein->insert_experience();
			if($query)
			{
				redirect('site/alumni_home');
			}
		}

		
		function add_education()
		{
			$query=$this->databasein->insert_education();
			if($query)
			{
				redirect('site/alumni_home');
			}
		}

		function add_projects()
		{
			$query=$this->databasein->insert_projects();
			if($query)
			{
				redirect('site/alumni_home');
			}
		}

		function add_organizations()
		{
			$query=$this->databasein->insert_organizations();
			if($query)
			{
				redirect('site/alumni_home');
			}
		}

		function add_awards()
		{
			$query=$this->databasein->insert_awards();
			if($query)
			{
				redirect('site/alumni_home');
			}
		}



		































	


	

	
	
	
	




	function do_upload()
	{
		if($this->input->post('upload'))
		{
			$config['upload_path'] = './assets/images/profile/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']    = '5000';
			$config['max_width']  = '5000';
			$config['max_height']  = '5000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('editprofile', $error);
			//print_r($post);
			}
			else
			{
			$data=$this->upload->data();
			$this->thumb($data);
				$file=array(
				'img_name'=>$data['raw_name'],
				'thumb_name'=>$data['raw_name'].'_thumb',
				'ext'=>$data['file_ext']
				);
			$this->databasein->add_image($file);

				if($this->session->userdata('user_type')=='alumni'){
					redirect('site/alumni_index','refresh');

				}else{
					redirect('site/company_index','refresh');
				}
					
			}
		}
		else
			{
				if($this->session->userdata('user_type')=='alumni'){
					redirect('site/alumni_index','refresh');
				}else{
					redirect('site/company_index','refresh');
				}
			}
	}

	function thumb($data)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] =$data['full_path'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 275;
		$config['height'] = 250;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
		


}
