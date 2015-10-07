<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Databasein extends CI_Model
{

		function validate($data)
		{


		$condition = "username =" . "'" . $this->input->post('username') . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);

		$query = $this->db->get();

			if($query->num_rows() ==1)
			{
				
 				foreach ($query->result() as $row)
                {	
                	$user_type=$row->user_type;
                	$username=$row->username;
                    $this->session->set_userdata('id',$row->id);
                    $this->session->set_userdata('user_type',$user_type);
                    $this->session->set_userdata('username',$username);   
              	}
                if($user_type=='admin')
                {
				$this->db->select('*');
                $this->db->from('admin_info');
                $this->db->where('username', $this->input->post('username'));
                $query2=$this->db->get();
	                	foreach($query2->result() as $rows)
	                	{
	                		$this->session->set_userdata('fname',$rows->fname);
	                		$this->session->set_userdata('lname',$rows->lname);
	                		$this->session->set_userdata('mname',$rows->mname);
	                	}

                }
                else if($user_type=='alumni')
                {
				$this->db->select('*');
                $this->db->from('alumni_info');
                $this->db->where('username', $this->input->post('username'));
                $query2=$this->db->get();
	                	foreach($query2->result() as $rows)
	                	{
	                		$this->session->set_userdata('alumni_id',$rows->alumni_id);
	                		$this->session->set_userdata('fname',$rows->fname);
	                		$this->session->set_userdata('lname',$rows->lname);
	                		$this->session->set_userdata('mname',$rows->mname);
	                		$this->session->set_userdata('bday',$rows->bday);
	                		$this->session->set_userdata('gender',$rows->gender);
	                		$this->session->set_userdata('course',$rows->course);
	                		$this->session->set_userdata('status',$rows->status);
	                		$this->session->set_userdata('img_name',$rows->img_name);
	                		$this->session->set_userdata('thumb_name',$rows->thumb_name);
	                		$this->session->set_userdata('ext',$rows->ext);
	                	}
                }
                else
                {
                $this->db->select('*');
      			$this->db->from('company_info');
        		$this->db->where('username', $this->input->post('username'));
        		$query2=$this->db->get();
	                	foreach($query2->result() as $rows)
	                	{	
	                  		$this->session->set_userdata('company_id',$rows->company_id);
	                		$this->session->set_userdata('company_name',$rows->company_name);
	                		$this->session->set_userdata('email',$rows->email);
	                		$this->session->set_userdata('contact',$rows->contact);
	                		$this->session->set_userdata('status',$rows->status);
	                		$this->session->set_userdata('address',$rows->address);
							$this->session->set_userdata('img_name',$rows->img_name);
	                		$this->session->set_userdata('thumb_name',$rows->thumb_name);
	                		$this->session->set_userdata('ext',$rows->ext);
	                	}

                }

			return true;
			}

		}


		function retrieve_personal_info()
		{
			if($this->session->userdata('user_type')=='alumni')
			{
			$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
			$this->db->select('*');
		    $this->db->from('alumni_info');
		    $this->db->where($condition);
			$query = $this->db->get();
			return $query;		
			}
			 else
				{
				$condition = "company_id =" . "'" . $this->session->userdata('company_id') . "'";
				$this->db->select('*');
		    	$this->db->from('company_info');
		    	$this->db->where($condition);
				$query = $this->db->get();
				return $query;		
				}

		}



		function insert_user()
		{
	        $condition = "username =" . "'" . $this->input->post('username') . "'";
			$this->db->select('*');
	        $this->db->from('users');
	        $this->db->where($condition);

			$query = $this->db->get();
			if($query->num_rows() ==1)
			{
				return false;
			}
			else
			{
				if($this->input->post('add_type')=='alumni')
				{		
						$type='alumni';
						$new_alumni = array(
							'username' => $this->input->post('username'),
							'password' => md5($this->input->post('username')),
							'user_type' =>$type				
							);

						$new_alumni_data = array(
							'username'=>	$this->input->post('username'),
							'fname'  => $this->input->post('fname'),
							'mname'  => $this->input->post('mname'),
							'lname'  => $this->input->post('lname'),
							'course' =>	$this->input->post('course'),
							'status' =>	$this->input->post('status')
							);

						$insertalumni = $this->db->insert('users',$new_alumni);
						$insertalumnidata=$this->db->insert('alumni_info',$new_alumni_data);

						return $insertalumnidata;
				} else
					{
						$type='company';
						$new_company = array(
							'username' => $this->input->post('username'),
							'password' => md5($this->input->post('username')),
							'user_type' =>$type				
							);
						$new_company_data = array(
							'username' => $this->input->post('username'),
							'company_name'  => $this->input->post('company_name'),
							'status' =>	$this->input->post('status')
							);

						$insertcompany = $this->db->insert('users',$new_company);
						$insertcompanydata=$this->db->insert('company_info',$new_company_data);

						return $insertcompanydata;
					}
						
			}



		}



		function job_post_insert()
		{

						$new_job_post = array(
							'job_category'=>	$this->input->post('job_category'),
							'jobtitle'  => $this->input->post('jobtitle'),
							'job_desc'  => $this->input->post('job_desc'),
							'company_id'  => $this->session->userdata['company_id'],
							'status' =>	$this->input->post('status'),
							'salary' =>	$this->input->post('salary'),
							'validity' =>	$this->input->post('validity'),
							'gender' =>	$this->input->post('gender'),
							'age' =>	$this->input->post('age')
							);

						$insertjobpost=$this->db->insert('job_post',$new_job_post);

						return $insertjobpost;
										
		

		}






		function add_skill()
		{
		$condition = "skill_name =" . "'" . $this->input->post('skill') . "'";
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->where($condition);

		$query=$this->db->get();
		if($query->num_rows() == 1)
		{
			return false;
		}else
			{
				$skilladd = array(
					'skill_name' => $this->input->post('skill')
					);
				$insertskill=$this->db->insert('skill',$skilladd);
					return $insertskill;
			}
				
		}





		function add_jobcategory()
		{
		$condition = "category_name =" . "'" . $this->input->post('jobcat') . "'";
		$this->db->select('*');
		$this->db->from('job_category');
		$this->db->where($condition);

		$query=$this->db->get();
		if($query->num_rows() == 1)
		{
			return false;
		}else
			{
				$jobcat = array(
					'category_name' => $this->input->post('jobcat')
					);
				$insertjobcat=$this->db->insert('job_category',$jobcat);
					return $insertjobcat;
			}
				
		}

		function add_user_inactive()
		{
	        
			if($this->input->post('add_type')=='alumni')
			{	
				$unfinished_alumni_data = array(
						'contact'=> $this->input->post('contact'),
						'bday'	 => $this->input->post('bday'),
						'status' =>	$this->input->post('status'),
						'gender' => $this->input->post('gender'),
						'height' => $this->input->post('height'),
						'weight' => $this->input->post('weight'),
						'religion'=> $this->input->post('religion'),
						'civil_status'=>$this->input->post('civil_status'),
						'birthplace' =>$this->input->post('birthplace'),
						'address'=> $this->input->post('address')
						);

				$id=$this->session->userdata('alumni_id');
				$this->db->select('*');
				$this->db->from('alumni_info');
				$this->db->where('alumni_id',$id);
				$this->db->update('alumni_info',$unfinished_alumni_data);
				
				return true;
			} else
				{
					

					$unfinished_company_data = array(
						'contact'=> $this->input->post('contact'),
						'email'	 => $this->input->post('email'),
						'status' =>	$this->input->post('status'),
						'address' => $this->input->post('address'),
						'website' => $this->input->post('website'),
						'company_desc' => $this->input->post('company_desc')
						);

				$id=$this->session->userdata('company_id');
				$this->db->select('*');
				$this->db->from('company_info');
				$this->db->where('company_id',$id);
				$this->db->update('company_info',$unfinished_company_data);
				return true;

				}
						
			



		}



	function edit_alumni_data($data)
	{
	$id=$this->input->post('id');
	$this->db->select('*');
    $this->db->from('alumni_info');
	$this->db->where('alumni_id',$id);
	$this->db->update('alumni_info',$data);
    
	}

	function edit_company_data($data)
	{

	$id=$this->input->post('id');
	$this->db->select('*');
    $this->db->from('company_info');
	$this->db->where('company_id',$id);
	$this->db->update('company_info',$data);
    
	}

	function update_alumni_status($data)
	{
		$id=$this->input->post('alumni_id');
		$this->db->select('*');
		$this->db->from('alumni_info');
		$this->db->where('alumni_id',$id);
		$this->db->update('alumni_info',$data);

	}

	function update_company_status($data)
	{
		$id=$this->input->post('company_id');
		$this->db->select('*');
		$this->db->from('company_info');
		$this->db->where('company_id',$id);
		$this->db->update('company_info',$data);

	}

	

	function view_alumni_data()
	{
		
		$this->db->select('*');
        $this->db->from('alumni_info');
		$query = $this->db->get();
		$query->result_array(); 
		return $query;

	}

	function view_company_data()
	{
		$this->db->select('*');
        $this->db->from('company_info');
		$query = $this->db->get();
		$query->result_array(); 
		return $query;
	}

	function view_job_category()
	{
		$this->db->select('*');
        $this->db->from('job_category');
		$query = $this->db->get();
		$query->result_array(); 
		return $query;
	}		

	function view_approved_posts()
	{
		$this->db->select('*');
        $this->db->from('job_post');
		$query = $this->db->get();
		$query->result_array(); 
		return $query;		
	}


	function view_job_info()
	{
	$condition = "id =" . "'" . $this->input->post('id') . "'";
	$this->db->select('*');
    $this->db->from('job_post');
    $this->db->where($condition);
	$query = $this->db->get();
	$query->result_array();
	return $query;
	}

	function retrieve_edit_alumni()
	{
	$condition = "alumni_id =" . "'" . $this->input->post('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('alumni_info');
    $this->db->where($condition);
	$query = $this->db->get();
	$query->result_array();
	return $query;	
	}

	function retrieve_job_category()
	{
	$this->db->select('*');
    $this->db->from('job_category');
    $query = $this->db->get();
	return $query;	
	}

	function retrieve_job_post()
	{
	$condition = "company_id =" . "'" . $this->session->userdata('company_id') . "'";
	$this->db->select('*');
    $this->db->from('job_post');
    $this->db->where($condition);
    $query = $this->db->get();
	return $query;		
	}


	function retrieve_experience()
	{
	$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('experience');
    $this->db->where($condition);
	$query = $this->db->get();
	$query->result_array();
	return $query;	

	}

	function insert_experience()
	{
		$exp = array(
			'job_title'=> $this->input->post('job_title'),
			'alumni_id'=> $this->session->userdata('alumni_id'),
			'company_name'	 => $this->input->post('company_name'),
			'start_date' =>	$this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'company_address' => $this->input->post('company_address')
					);
	
		$insert_experience=$this->db->insert('experience',$exp);
		return $insert_experience;	
	}

	function insert_education()
	{
		$educ = array(
			'school'=> $this->input->post('school'),
			'alumni_id'=> $this->session->userdata('alumni_id'),
			'degree'	 => $this->input->post('degree'),
			'start_date' =>	$this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'field_of_study' => $this->input->post('field_of_study')
					);
	
		$insert_education=$this->db->insert('education',$educ);
		return $insert_education;	
	}

	function insert_projects()
	{
		$proj = array(
			'project_name'=> $this->input->post('project_name'),
			'alumni_id'=> $this->session->userdata('alumni_id'),
			'position'	 => $this->input->post('position'),
			'start_date' =>	$this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'proj_desc' => $this->input->post('proj_desc')
					);
	
		$insert_project=$this->db->insert('projects',$proj);
		return $insert_project;	
	}

	function insert_organizations()
	{
		$org = array(
			'org_name'=> $this->input->post('org_name'),
			'alumni_id'=> $this->session->userdata('alumni_id'),
			'org_position'	 => $this->input->post('org_position'),
			'start_date' =>	$this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'org_desc' => $this->input->post('org_desc')
					);
	
		$insert_organization=$this->db->insert('organizations',$org);
		return $insert_organization;	
	}

	function insert_awards()
	{
		$award = array(
			'award_title'=> $this->input->post('award_title'),
			'alumni_id'=> $this->session->userdata('alumni_id'),
			'award_issuer'	 => $this->input->post('award_issuer'),
			'award_date' =>	$this->input->post('award_date'),
			'award_desc' => $this->input->post('award_desc')
					);
	
		$insert_awards=$this->db->insert('awards',$award);
		return $insert_awards;	
	}


	function initial_search()
	{
		$this->db->select("
			job_post.id,
			job_post.company_id,
			job_post.jobtitle,
			job_post.job_desc,
			job_post.skills,
			job_post.experience,
			job_post.age,
			job_post.gender,
			job_post.salary,
			company_info.company_name,
			company_info.img_name,
			company_info.thumb_name,
			company_info.ext");
		$this->db->from('job_post');
		$this->db->join('company_info', 'company_info.company_id = job_post.company_id');

		$query = $this->db->get();
		return $query->result_array();
	}
	












	function retrieve_education()
	{
	$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('education');
    $this->db->where($condition);
	$query = $this->db->get();
                

	return $query;	

	}

	function retrieve_awards()
	{
	$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('awards');
    $this->db->where($condition);
	$query = $this->db->get();
                

	return $query;	

	}

	function retrieve_organization()
	{
	$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('organizations');
    $this->db->where($condition);
	$query = $this->db->get();
                

	return $query;	

	}

	function retrieve_projects()
	{
	$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('projects');
    $this->db->where($condition);
	$query = $this->db->get();
                

	return $query;	

	}

	function retrieve_skills()
	{
/*	$condition = "alumni_id =" . "'" . $this->session->userdata('alumni_id') . "'";
	$this->db->select('*');
    $this->db->from('alumni_info');
    $this->db->where($condition);
	$query = $this->db->get();
                

	return $query;	
*/
	}

	function retrieve_edit_company()
	{
	$condition = "company_id =" . "'" . $this->input->post('company_id') . "'";
	$this->db->select('*');
    $this->db->from('company_info');
    $this->db->where($condition);
	$query = $this->db->get();
	$query->result_array();
	return $query;	
	}







 	function add_image($data)
    {
        $username= $this->session->userdata('username');
			if($this->session->userdata('user_type')=='alumni')
			{
        	$this->db->where('username', $username);
        	$this->db->update('alumni_info',$data);
			}
			else
			{
        	$this->db->where('username', $username);
        	$this->db->update('company_info',$data);

			}
    }


}
