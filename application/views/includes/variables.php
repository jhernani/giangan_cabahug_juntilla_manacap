<?php 

if($this->session->userdata('user_type')=='alumni')
{
foreach ($personal->result() as $row)
          {
            $fname=$row->fname;
            $mname=$row->mname;
            $lname=$row->lname;
            $contact=$row->contact;
            $bday=$row->bday;
            $gender=$row->gender;
            $course=$row->course;
            $height=$row->height;
            $religion=$row->religion;
            $civil_status=$row->civil_status;
            $birthplace=$row->birthplace;
            $weight=$row->weight;
            $nationality=$row->nationality;
            $address=$row->address;
            $email=$row->email;
            $status=$row->status;
            $img_name=$row->img_name;
            $ext=$row->ext;
          } 

          

}else
    {
      foreach ($personal->result() as $row)
          {
            $company_id=$row->company_id;
            $username=$row->username;
            $company_name=$row->company_name;
            $email=$row->email;
            $contact=$row->contact;
            $address=$row->address;
            $company_desc=$row->company_desc;
            $website=$row->website;
            $img_name=$row->img_name;
            $ext=$row->ext;
          } 
          
    }






/*
          foreach($education->result() as $row2)
          {
            $degree = $row2->degree;
            $school=$row2->school;
            $start_date = $row2->start_date;
            $end_date = $row2->end_date;
            $field_of_study=$row2->field_of_study;
          }  
          foreach($projects->result() as $row3)
          {
            $project_name = $row3->project_name;
            $date=$row3->date;
            $proj_url = $row3->proj_url;
            $proj_desc = $row3->proj_desc;
          }*/
?>