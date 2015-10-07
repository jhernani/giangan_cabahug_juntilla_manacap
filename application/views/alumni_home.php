
    <?php include('includes/variables.php'); ?>
</br>

<div class="ui centered grid">

  <div class="four wide column">

    <div class="ui card" style="margin-left:500px; margin-top:71px;width:20px">
      <div class="" id="alumni">

        <div class="left ui rail">

          <div class="ui sticky fixed top" style="left:100px; margin-top:80px;">
            
            <div class="ui center aligned special cards">
              
              <div class="card">
                <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <?php echo form_open_multipart('control1/do_upload'); ?>
                        <label for="file" class="ui inverted button">
                        <i class="file icon"></i>Change Photo</label>                
                        <input type="hidden" name="type" value="alumni">
                        <input type="file" id="file" name="userfile" style="display:none"></br></br>
                        <input type="submit" value="Upload" name="upload" align="left" class="ui small inverted blue button">
                        <?php echo form_close();?>

                      </div>
                    </div>
                  </div>
                   <?php if($img_name==''){?>
                    <img src="<?php echo base_url(); ?>assets/images/profile/default-avatar.PNG">
                  <?php  } else{?>
                    <img src="<?php echo base_url('assets/images/profile/'.$img_name.$ext);?>">
                    <?php  }?>
                </div>
                  
                <div class="content">              
                  <a class="header"><?php echo "$fname $mname $lname";?></a>
                
                  <div class="meta">
                    <span class="date">Born on <?php echo date_format(date_create($bday),"F j, Y")?></span>
                  </div>

                  <div class="description">
                    <font size="2.5"><i class="student icon"></i> Graduated at University of San Carlos</font></br>
                    <font size="2.5"><i class="home icon"></i>Lives in <?php echo $address;?></font></br>
                  </div>
                </div>

                <div class="ui styled accordion">
                  <div class="title">
                    <i class="call icon"></i>
                    Contact details
                  </div>

                  <div class="content">
                    <p class="transition hidden">
                      <font size="2">
                      <i class="mail icon"></i>
                      <?php echo $email;?>
                      </br>
                      <i class="call icon"></i>
                      <?php echo $contact;?>
                      </br>
                      </font>
                    </p>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>
      </div>

    </div>

  </div>


<!--Main Accordion Start-->


<!--Person Info Tab Start-->     
<div class="nine wide column">
    <div class="ui floating left aligned message">


    <font size="4.9"><i class="user icon"></i>
      <b> Personal Information </b> 
      <a href="#"><i class="tiny setting icon"></i></a>
    </font>

    <div class="ui inverted divider"></div>

      <div class="active content">
    <div class="ui grid">
        <div class="eight wide column">
          <table class="ui definition table">
      <tbody>
        <tr>
          <td class="four wide column">Age</td>
          <td>21 years old</td>
        </tr>
        <tr>
          <td>Birthdate</td>
          <td><?php echo date_format(date_create($bday),"F j, Y")?></td>
        </tr>
        <tr>
          <td>Height</td>
          <td><?php echo $height;?> ft.</td>
        </tr>
        <tr>
          <td>Religion</td>
          <td><?php echo $religion;?></td>
        </tr>
        <tr>
          <td>Civil&nbsp;Status</td>
          <td><?php echo $civil_status;?></td>
        </tr>
        <tr>
        </tr>
      </tbody>



    </table>
    </div>
      <div class="eight wide column">
     <table class="ui definition table">

      <tbody>
        <tr>
          <td class="four wide column">Gender</td>
          <td><?php echo $gender;?></td>
        </tr>
        <tr>
          <td>Birthplace</td>
          <td><?php echo $birthplace;?></td>
        </tr>
        <tr>
          <td>Weight</td>
          <td><?php echo $weight;?> kg.</td>
        </tr>
        <tr>
          <td>Nationality</td>
          <td><?php echo $nationality;?></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo $address;?></td>
        </tr>
        </tr>
      </tbody>
      

    </table>
      </div>
    </div>
    </div>
      <div class="ui accordion">
    <div class="ui inverted divider"></div>
    <!--Personal Info Tab End-->

    <!--Experience Tab Start-->
      <div class="title">
        <h3 class="ui header">
          <i class="suitcase icon"></i>
            Work Experience 
          </h3>
      </div>

      <div class="content">
      <?php foreach($experience->result_array() as $results){ ?>
      <div class="ui inverted divider"></div>
          <font size="3"><b><?php echo $results['job_title']; ?>
            <a href="#"><i class="tiny setting icon" id="exp"></i></a>
          </b></font></br>
          <font size="2"><?php echo $results['company_name']; ?></br>
          <?php echo date_format(date_create($results['start_date']),"F j, Y");
                echo " - ";
                echo date_format(date_create($results['end_date']),"F j, Y");

           ?></br>
          <?php echo $results['company_address']; ?></br>
          <?php }?>
          </font>

          </br></br>
          <button class="ui blue compact tiny button" id="addExpButton">
            <i class="add icon"></i>
            <font size="2">Add Work Experience</font>
          </button>

      </div>
    <!--Experience Tab End-->


    <!--Education Tab Start-->
      <div class="ui inverted divider"></div>

        <div class="title">
          <h3 class="ui header">
            <i class="student icon"></i>
            Education
          </h3>
        </div>

        <div class="content">
          <?php foreach($education->result_array() as $results){ ?>
          <div class="ui inverted divider"></div>
          <font size="3"><b><?php echo $results['school'];?>
           <a href="#"><i class="tiny setting icon" id="educ"></i></a>
          </b></font></br>
          <font size="2"><?php echo $results['field_of_study'];?></br>
           <?php echo date_format(date_create($results['start_date']),"F j, Y");
                echo " - ";
                echo date_format(date_create($results['end_date']),"F j, Y");

           ?></br>
           <?php echo $results['degree'];?>
          </font>
          <?php }?>

          </br></br>
          <button class="ui blue compact tiny button" id="addEducButton">
            <i class="add icon"></i>
            <font size="2">Add Education</font>
          </button>

        </div>
    <!--Education Tab End-->


    <!--Project Tab Start-->
      <div class="ui inverted divider"></div>
        <div class="title">
          <h3 class="ui header">
          <i class="book icon"></i>
          Projects
          </h3>
        </div>

      <div class="content">
          <?php foreach($projects->result_array() as $results){ ?>

        <div class="ui inverted divider"></div>
        <font size="3"><b><?php echo $results['project_name'];?>&nbsp;
            <a href="#"><i class="tiny setting icon" id="proj"></i></a>
        </b></font></br>
        <font size="2"><?php echo $results['position'];?></br>
        <?php echo date_format(date_create($results['start_date']),"F j, Y");
                echo " - ";
                echo date_format(date_create($results['end_date']),"F j, Y");

           ?></br>
        <i><?php echo $results['proj_desc'];?></i>
      
        <?php }?>

          </br></br>
          <button class="ui blue compact tiny button" id="addProjButton">
            <i class="add icon"></i>
            <font size="2">Add Project</font>
          </button>

    </div>
    <!--Project Tab End-->


    <!--Organizations Tab Start-->
      <div class="ui inverted divider"></div>
        <div class="title">
          <h3 class="ui header">
          <i class="university icon"></i>
          Organizations
          </h3>
        </div>

      <div class="content">
          <?php foreach($organization->result_array() as $results){ ?>

        <div class="ui inverted divider"></div>
        <font size="3"><b><?php echo $results['org_name'];?>&nbsp;
            <a href="#"><i class="tiny setting icon" id="proj"></i></a>
        </b></font></br>
        <font size="2"><?php echo $results['org_position'];?></br>
        <?php echo date_format(date_create($results['start_date']),"F j, Y");
                echo " - ";
                echo date_format(date_create($results['end_date']),"F j, Y");

           ?></br>
        <i><?php echo $results['org_desc'];?></i>
      
        <?php }?>

          </br></br>
          <button class="ui blue compact tiny button" id="addOrgButton">
            <i class="add icon"></i>
            <font size="2">Add Organization</font>
          </button>

    </div>
    <!--Organizations Tab End-->

    <!--Awards & Trainings Tab Start-->
      <div class="ui inverted divider"></div>
        <div class="title">
          <h3 class="ui header">
          <i class="trophy icon"></i>
          Awards and Trainings
          </h3>
        </div>

      <div class="content">
          <?php foreach($awards->result_array() as $results){ ?>

        <div class="ui inverted divider"></div>
        <font size="3"><b><?php echo $results['award_title'];?>&nbsp;
            <a href="#"><i class="tiny setting icon" id="proj"></i></a>
        </b></font></br>
        <font size="2"><?php echo $results['award_issuer'];?></br>
        
        <i><?php echo $results['award_desc'];?></i>
      
        <?php }?>

          </br></br>
          <button class="ui blue compact tiny button" id="addAwardsButton">
            <i class="add icon"></i>
            <font size="2">Add Awards & Trainings</font>
          </button>


    </div>
    <!--Awards & Trainings End-->


    <!--Skills Tab Start-->
      <div class="ui inverted divider"></div>

        <div class="title">
          <h3 class="ui header">
            <i class="star icon"></i>
            Skills
            </h3>
        </div>

        <div class="content">
          <div class="ui inverted divider"></div>
    <table class="ui very basic table">

      <thead>
        <tr>
          <th class="five wide"><font size="3">Skill&nbsp;
          </th>
          <th><center>Experience</th>
          <th><center>Rookie</th>
          <th><center>Beginner</th>
          <th><center>Average</th>
          <th><center>Advanced</th>
          <th><center>Expert</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td><font size="2">HTML/CSS&nbsp;
             <a href="#"><i class="mini setting icon" id="skill"></i></a>
          </font></td>
          <td><center><div class="ui green label">3 years</div></center></td>
          <td></td>
          <td></td>
          <td></td>
          <td><center> <i class="large green checkmark icon"></i></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <center>
    <i><font size="1">Rating is as follow: Rookie as the lowest and Expert the as highest.</font></i>
    </center>
    </div>
    <!--Skills Tab End-->
    </div>
    <!--Main accordion end-->


    </div>


    <div class="ui center aligned text container">
    <div class="ui accordion">
      <div class="active title">
<!--
        <button class="ui blue medium labeled icon button">
          <i class="plus icon"></i>
          Add Additional Info
        </button>
    
        <button class="ui blue medium labeled icon button">
          <i class="print icon"></i>
          Print Resume
        </button>
    -->
      </div>


      <div class="content">
        <div class="ui centered cards">

          <div class="card">
            <div class="content">
              <div class="header"><font size="3">Work Experience</font></div>
              <div class="description">
                <font size="2"> Adding a summary is a quick and easy way to highlight your experience and interests.</font>
              </div>
            </div>
            <button class="ui blue bottom attached button" id="addExpButton">
              <i class="add icon"></i>
              <font size="2">Add Work Experience</font>
            </button>
          </div>

          <div class="card">
            <div class="content">
              <div class="header"><font size="3"> Education</font></div>
              <div class="description">
              <font size="2">  Add more color to your professional identity to show who you are.</font>
              </div>
            </div>
            <button class="ui blue bottom attached button" id="addEducButton">
              <i class="add icon"></i>
              <font size="2"> Add Education</font>
            </button>
          </div>

          <div class="card">
            <div class="content">
              <div class="header"><font size="3"> Projects</font></div>
              <div class="description">
              <font size="2">  Add more color to your professional identity to show who you are.</font>
              </div>
            </div>
            <button class="ui blue bottom attached button" id="addProjButton">
              <i class="add icon"></i>
              <font size="2"> Add Project</font>
            </button>
          </div>


          <div class="card">
            <div class="content">
              <div class="header"><font size="3"> Organizations</font></div>
              <div class="description">
              <font size="2">  Add more color to your professional identity to show who you are.</font>
              </div>
            </div>
            <button class="ui blue bottom attached button" id="addOrgButton">
              <i class="add icon"></i>
              <font size="2"> Add Organization</font>
            </button>
          </div>

          <div class="card">
            <div class="content">
              <div class="header"><font size="3"> Awards & Trainings</font></div>
              <div class="description">
               <font size="2"> Show the recognition you've earned.</font>
              </div>
            </div>
            <button class="ui blue bottom attached button" id="addAwardsButton">
              <i class="add icon"></i>
             <font size="2">  Add Award & Training</font>
            </button>
          </div>

          <div class="card">
            <div class="content">
              <div class="header"><font size="3"> Skills</font></div>
              <div class="description">
              <font size="2"> Members with a certification on their profile get double the profile views.</font>
              </div>
            </div>
            <button class="ui blue bottom attached button" id="addSkillsButton">
              <i class="add icon"></i>
             <font size="2">  Add Skill </font>
            </button>
          </div>
    </div>
    </div>

  </div>
  </div>



</div>

</body>

</html>
