
<div class="breadcrumb-panel">
  <div class="ui breadcrumb">
    <i class="right chevron icon divider"></i>
    <div class="section">User Accounts</div>
    <i class="right chevron icon divider"></i>
    <a class="section" href="<?php echo site_url('site/admin_tab/view_alumni'); ?>">Company Linkages</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">Add Company</div>
  </div>
</div>

<div class="wrapper">


  <div class="item"></br></div>


<div class="ui centered grid">

  <div class="eight wide column">

    <div class="item"></br></div>

      <!-- ADD COMPANY START -->
        <div class="column">

            <div style="display: block;">

            <?php
              $attribute = array('class'=>'ui form segment');    
              echo form_open('control1/add_user',$attribute); 
            ?>

                <form class="ui form segment">

                  <h2 class="ui header">
                    <i class="browser icon"></i>
                    <div class="content">Add Company</div>
                  </h2>

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
      <!-- ADD COMPANY END -->

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
            company_name: {
            identifier: 'company_name',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter Company Name.'
              }
            ]
          },
          company_username: {
            identifier: 'company_username',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter Username. '
              }
            ]
          }
          
         
        }
      })
    ;

        })
      ;

  </script>