<?php include('includes/footable.php'); ?>
<?php include('includes/variables.php'); ?>
</br></br>

  <div class="ui centered grid">

<!-- LEFT COLUMN START-->  

  <div class="four wide column">
    <div class="ui card" style="margin-left:500px; margin-top:71px;width:20px">
      <div class="" id="company">
        <div class="left ui rail">
          <div class="ui sticky fixed top" style="left:133px; margin-top:100px;">
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
                    </form>

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
                <font size="2.5"><i class="world icon"></i> https://<?php echo "$website"; ?></font></br>
              </div>
            </div>


            <div class="ui styled accordion">
              <div class="title">
                 <i class="phone icon"></i>
                Contact Details
              </div>
              <div class=" content">
                <p><?php echo "$contact"; ?></p>
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
</div>
</div>
</div>
  <!-- LEFT COLUMN END --> 

  <!-- RIGHT COLUMN START-->  
<div class="nine wide column">
  <div class="ui floating left aligned attatched message">

   <div class="ui accordion">
    <div class="title">
      <h4 class="ui header">

       <button class="fluid blue ui button">  <i class="announcement icon"></i>Post something</button>
        </h4>

    </div>

    <div class="content">
  <!--form class="ui form segment">-->
     <?php
      $attribute = array('class'=>'ui form segment');    
      echo form_open('control1/post_job',$attribute); 
      ?>

    <div class="fields">
      <div class="ten wide field">
        <label>Job Title:</label>
        <input placeholder="Job Title" name="jobtitle" type="text" required>
      </div>

      <div class="six wide field">
          <label>Skills</label>
          <div class="ui icon input">
           <input placeholder="Skills" data-content="You can use me to enter data" name="skills" type="text" required>
        </div>
        </div>  
    </div>


           <div class="fields">

                 <div class="seven wide field">
                    <label>Job Category</label>
                       <select name="job_category" class="ui fluid dropdown">
                  <?php foreach($job_category->result_array() as $result){ ?>

                       <option value="<?php echo $result['category_name']; ?>"><?php echo $result['category_name']; ?></option>
                       <?PHP }?>
                       </select>   
                 </div>

                 <input type="hidden" value="Pending" name="status">
                 <div class="three wide field">
                       <label>Age</label>
                       <input placeholder="Age" name="age" type="text" required>
                  </div>

                  <div class="six wide field">
                       <label>Gender</label>
                       <select multiple="" name="gender" class="ui fluid dropdown">
                       <option value="">Gender</option>
                       <option value="Man">Male</option>
                       <option value="Woman">Female</option>
                       <option value="Both">Both</option>
                       </select>
                  </div>
            </div>

    
            <div class= "fields">
    
                  <div class="eight wide field">
                      <label>Salary</label>
                      <input placeholder="Salary" name="salary" type="text"  required>
                  </div>

                  <div class="eight wide field">
                      <label>Year(s) of Experience</label>
                        <select name="experience" class="ui fluid dropdown">
                          <option value="">Experience</option>
                          <option value="Less than 1 year">Less than 1 year</option>
                          <option value="1 - 3 years">1 - 3 years</option>
                          <option value="4 - 6 years">4 - 6 years</option>
                          <option value="7 - 10 years">7 - 10 years</option>
                          <option value="More than 10 years">More than 10 years</option>
                        </select>
                  </div>

                  <div class="eight wide field">
                       <label>Validity of job post</label>
                       <input placeholder="Date" name="validity" type="date"  required>
                  </div>
            </div>

             <div class="field">
              <label>Description</label>
              <textarea rows="4" name="job_desc" required></textarea>
            </div>
          

            <input class="ui blue compact tiny submit button" type="submit" value="Add Job Post"  required>
          </div>
        </div>
  </form>

  <div class="ui inverted divider"></div>


<!-- RECENT JOB POSTINGS -->


      <div class="nine wide column">

      <div class="ui floating left aligned message">

  <div id="demo">
    
      <div class="column">
                
        <div class="ui action fluid input">
            <input id="filter" name="search" type="text" placeholder="Search ..." >
                <button class="ui blue labeled icon button">
                  <i class="search icon"></i>
                  Search
                </button>
        </div>

      </div></br>

            <table class="table demo metro-blue" data-filter="#filter" data-page-size="5">


                <tbody>
                  <?php foreach($job_post->result_array() as $result){ ?>

                <tr>

                            <td>

        <div class="ui feed">

              <div class="event">

                  <div class="content">

                      <div class="summary">
                           <h3><?php echo $result['jobtitle']; ?></h3>
                      </div>
                      <div class="extra text">
                        <?php echo $result['job_desc']; ?>
                      
                      </div></br>

                  </div></br>
                        
              </div>

        </div>

                      <!-- <?php echo form_open('site/archive_job_info');?> -->
                        <input type="hidden" name="id" value="<?php echo $result['id'];?>"/> 
                          <button class="ui right floated compact tiny red button" type="submit">
                          Archive <i class="right x icon"></i>
                          </button>      
                       <!--  </form> -->

                      <!--  <?php echo form_open('site/edit_job_info');?> -->
                        <input type="hidden" name="id" value="<?php echo $result['id'];?>"/>                    
                          <button class="ui right floated compact tiny green button" type="submit">
                          Edit <i class="right setting icon"></i>
                          </button>
                      <!-- </form> -->
                      
                      <?php echo form_open('site/company_view_job_info');?>                      
                        <input type="hidden" name="id" value="<?php echo $result['id'];?>"/>
                          <button class="ui right floated compact tiny button" type="submit">
                          Job Information <i class="right suitcase icon"></i>
                          </button>
                      </form>



                            </td>
                           
                </tr>
                <?php }?>
                </tbody>
                <tfoot class="">
                <tr>
                    <td colspan="7">
                        <div class="pagination pagination-centered"></div>
                    </td>
                </tr>
                </tfoot>
            </table>
       
  </div>


  <!-- RIGHT COLUMN END --> 

  </div>


