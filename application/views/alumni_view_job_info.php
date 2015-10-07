
<?php include('includes/variables.php'); 

foreach ($company_view_job_info->result() as $row)
          {
          $jobtitle=$row->jobtitle;
          $job_desc=$row->job_desc;
          $skills=$row->skills;
          $status=$row->status;
          $salary=$row->salary;
          $gender=$row->gender;
          $age=$row->age;
          $experience=$row->experience;
          $validity=$row->validity;
          $job_category=$row->job_category;
          }

?>          

</br></br>

  <div class="ui centered grid">

<!-- LEFT COLUMN START-->  

  <div class="four wide column">
    <div class="ui card">
      <div class="ui center aligned special cards">
        <div class="card">


            <div class="blurring dimmable image">
              <div class="ui dimmer">
                <div class="content">
                  <div class="center">
                    <?php echo form_open_multipart('control1/do_upload'); ?>
                    <label for="file" class="ui inverted button">
                    <i class="file icon"></i>Change Photo</label>
                    <input type="hidden" name="type" value="company">
                    <input type="file" id="file" name="userfile" style="display:none"></br></br>
                    <input type="submit" value="Upload" name="upload" align="left" class="ui small inverted blue button">
                    <?php echo form_close();?>

                  </div>
                </div>
              </div>
            <img src="<?php echo base_url('assets/images/profile/'.$img_name.$ext);?>">
            </div>


            
            <div class="content">
              <a class="header"><?php echo "$company_name"; ?></a>
              <div class="meta">
              </div>
              <div class="description">
                <font size="2.5"><i class="home icon"></i> Located at <?php echo "$address"; ?></font></br>
                <font size="2.5"><i class="world icon"></i> <?php echo "$website"; ?></font></br>
              </div>
            </div>

            <div class="ui styled accordion">
              <div class="title">
                 <i class="phone icon"></i>
                Contact Details
              </div>
              <div class=" content">
                <p><?php echo "$contact";?></p>
              </div>
              <div class="title">
                <i class="suitcase icon"></i>
                Company Overview
              </div>
              <div class="content">
                <p><?php echo "$company_desc"; ?></p>
              </div>
              <div class="title">
                <i class="protect icon"></i>
                Mission & Vision
              </div>
              <div class="content">
                <p><?php echo "$mission_vision"; ?></p>
              </div>

            </div>

        </div>
      </div>
    </div>
  </div>

  <!-- LEFT COLUMN END --> 

  <!-- RIGHT COLUMN START-->  
  <div class="nine wide column">

    <div class="ui floating left aligned attatched message">

     <div class="ui feed">
               <div class="event">
                   <h4 class="ui image header">
                      <img src="<?php echo base_url('assets/images/profile/'.$img_name.$ext);?>" class="ui mini rounded image">
                   </h4>

               <div class="content">
                   <div class="summary">
                       <a><?php echo $company_name;?></a>
                   <div class="date">
                         X days left
                   </div>
                   </div>
              <div class="extra text">
                  <h2>Job Title: <?php echo $jobtitle;?></h2>
                  <b>Skills Required:</b> <?php echo $skills;?></br>
                  <b>Job Category:</b>  <?php echo $job_category;?></br>
                  <b>Gender Required:</b>  <?php echo $gender;?></br>
                  <b>Salary:</b>  <?php echo $salary;?></br>
                  <b>Post Validity:</b>  <?php echo date_format(date_create($validity),"F j, Y")?></br></br>
                  <b>Description</b></br>
                   <?php echo $job_desc;?>
              </div></br>


                      <div class="ui right floated compact tiny  button">
                             <i class="left angle icon"></i>
                     <a href="<?php echo site_url('site/company_home'); ?>">  Back to Profile</a> 
                    </div>

                     <div class="ui right floated compact tiny button">
                       <i class="left zoom icon"></i> 
                  <a href="#">  Apply Now</a>    
                  </div>

              </div>
              </div>
            </div>

    </div>

  </div>
  <!-- RIGHT COLUMN END --> 



