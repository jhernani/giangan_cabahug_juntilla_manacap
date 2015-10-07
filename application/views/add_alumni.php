
<div class="breadcrumb-panel">
  <div class="ui breadcrumb">
    <i class="right chevron icon divider"></i>
    <div class="section">User Accounts</div>
    <i class="right chevron icon divider"></i>
    <a class="section" href="<?php echo site_url('site/admin_tab/view_alumni'); ?>">Alumni Accounts</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">Add Alumni</div>
  </div>
</div>

<div class="wrapper">


<div class="ui centered grid">

  <div class="eight wide column">

    <div class="item"></br></div>


    <!-- ADD ALUMNI START -->  
      <div class="column">

            <div style="display: block;">

            <?php
              $attribute = array('class'=>'ui form segment');    
              echo form_open('control1/add_user',$attribute); 
            ?>

                <form class="ui form segment">

                  <h2 class="ui header">
                    <i class="browser icon"></i>
                    <div class="content">Add Alumni</div>
                  </h2>


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
    <!-- ADD ALUMNI END -->

    </div>

  </div>
</div>


</div>


  <script>
    $(document)
      .ready(function() {

     
    //form validation

    $('.ui.form')
      .form({
        inline:true,
        on: 'blur',
        fields: {
          fname: {
            identifier: 'fname',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter First Name.'
              }
            ]
          },
          mname: {
            identifier: 'mname',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter Middle Name.'
              }
            ]
          },
          lname: {
            identifier: 'lname',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter Last Name.'
              }
            ]
          },
          course: {
            identifier: 'course',
            rules: [
              {
                type   : 'minCount[1]',
                prompt : 'Please enter Course.'
              }
            ]
          },
          username: {
            identifier: 'username',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter an ID Number.'
              }
            ]
          }
          
         
        }
      })
    ;

        })
      ;

  </script>