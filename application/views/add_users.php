


<div class="breadcrumb-panel">
	<div class="ui breadcrumb">
		<i class="right chevron icon divider"></i>
    <div class="section">Manage User Accounts</div>
    <i class="right chevron icon divider"></i>
		<div class="active section">Add Users</div>
	</div>
</div>

<div class="wrapper">


  <div class="item"></br></div>


    <div class="ui two column doubling grid container">

<!-- ADD ALUMNI START --> 

      <div class="column">

          <div class="ui styled accordion">
                  <div class="title">

                        <h2 class="ui header">
                            <i class="browser icon"></i>
                            Add Alumni
                        </h2>
                  </div>
                  
                  <div class="content"> 
          

                            <?php
                              $attribute = array('class'=>'ui form segment');    
                              echo form_open('control1/add_user',$attribute); 
                            ?>

                                  <div class="two fields">
                                    <div class="field">
                                      <label>First Name</label>
                                      <input name="fname" type="text" placeholder="First Name" required>
                                    </div>
                                    <div class="field">
                                      <label>Middle Name</label>
                                      <input name="mname" type="text" placeholder="Middle Name" required>
                                    </div>
                                  </div>
                                  


                                  <div class="two fields">
                                    <div class="field">
                                      <label>Last Name</label>
                                      <input name="lname" type="text" placeholder="Last Name" required>
                                    </div>
                                  
                                      

                                    <div class="field">
                                      <label>Select Course</label>
                                      <div class="ui selection dropdown">
                                        <input type="hidden" name="course" required>
                                        <div class="default text">Course</div>
                                        <i class="dropdown icon"></i>
                                        <div class="menu ui transition hidden">
                                          <div class="item" data-value="BS-ICT">BS-ICT</div>
                                          <div class="item" data-value="BS-IT">BS-IT</div>
                                          <div class="item" data-value="BS-CS">BS-CS</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                    <input name="status" type="hidden" value="Inactive">   
                                    <input name="add_type" type="hidden" value="alumni">
                                  <div class="field">
                                    <label>ID Number</label>
                                    <input name="username" type="text" placeholder="ID Number" required>
                                  </div>

                                  <input class="ui blue submit button" type="submit" value="Submit"/>

                                  <div class="ui error message"></div>
                          </form>


                  </div>
          </div>
      </div>

<!-- ADD ALUMNI END -->


<!-- ADD COMPANY START -->
      <div class="column">

          <div class="ui styled accordion">
                  <div class="title">

                        <h2 class="ui header">
                            <i class="browser icon"></i>
                            Add Company
                        </h2>
                  </div>

                  <div class="content">

                      <?php
                        $attribute = array('class'=>'ui form segment');    
                        echo form_open('control1/add_user',$attribute); 
                      ?>

                            <div class="field">
                              <label>Company Name</label>
                              <input name="company_name" type="text" placeholder="Company Name" required>
                            </div>

                            <input name="status" type="hidden" value="Inactive">
                            <input name="add_type" type="hidden" value="company">
                            <div class="field">
                              <label>Username</label>
                              <input name="username" type="text" placeholder="Username" required>
                            </div>

                            <input class="ui blue submit button" type="submit" value="Submit"/>
                      </form>

                  </div>
          </div>
      </div>
<!-- ADD COMPANY END -->


    </div>




</div>