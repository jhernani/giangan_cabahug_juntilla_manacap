
<?php 
include('includes/variables.php'); 
$fname=$this->session->userdata('company_name');
?>

  </br></br>

  <div class="ui centered grid">
    <div class="eight wide column">

          <div class="ui floating message transition">
            <i class="close icon"></i>
            <div class="header">
              Welcome <?php echo "$company_name"; ?>!
            </div>
            <p>Please take time to fill up the form.</p>
          </div>

        <?php 
          $attribute = array('class'=>'ui form segment');        
          echo form_open('control1/edit_company_inactive',$attribute); 
        ?>

          <form class="ui form segment">
            <h4><i class="suitcase icon"></i>&nbsp;Company Information</h4>
              <div class="ui inverted divider"></div>

            <div class="fields">
              <div class="sixteen wide field">
                <label>Company Address</label>
                <input value="<?php echo $address; ?>" placeholder="Company Address" name="address" type="text">
              </div>
            </div>

            <input type="hidden" name="add_type" value="company">
            <input type="hidden" name="status" value="Active">

            <div class="fields">
              <div class="eight wide field">
                <label>Contact Number</label>
                <input value="<?php echo $contact; ?>" placeholder="Contact Number" name="contact" type="text">
              </div>
              <div class="eight wide field">
                <label>Email Address</label>
                <input value="<?php echo $email; ?>" placeholder="Email" name="email" type="text">
              </div>
              <div class="eight wide field">
                <label>Website</label>
                <input value="<?php echo $website; ?>" placeholder="Website" name="website" type="text">
              </div>
            </div>


            <div class="fields">
              <div class="sixteen wide field">
            <div class="field">
              <label>Company description</label>
              <textarea rows="2" name="company_desc"><?php echo $company_desc; ?></textarea>
            </div>
              </div>
            </div>


            <div class="ui green right labeled icon submit button"><i class="right arrow icon"></i>Proceed to next step</div>
            <div class="ui error message"></div>
          </form>

    </div>
  </div>

 <script>
  $(document)
    .ready(function() {

           //form validation

          $('.ui.form')
            .form({
              fields: {
                address: {
                  identifier: 'address',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'Please enter your home address.'
                    }
                  ]
                },
                contact: {
                  identifier: 'contact',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'Please enter your contact details.'
                    }
                  ]
                },
                email: {
                  identifier: 'email',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'Please enter your date of birth.'
                    }
                  ]
                },
                website: {
                  identifier: 'website',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'Please enter your place of birth.'
                    }
                  ]
                }

              }
            })
          ;

          //welcome message
          $('.message .close')
            .on('click', function() {
              $(this)
                .closest('.message')
                .transition('fade')
              ;
            })
          ;

    })
  ;

  </script>