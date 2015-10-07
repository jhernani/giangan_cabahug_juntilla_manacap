
<?php 
include('includes/variables.php'); 
$fname=$this->session->userdata('fname');
$mname=$this->session->userdata('mname');
$lname=$this->session->userdata('lname');
?>


  </br></br>

  <div class="ui centered grid">
      <div class="eight wide column">


        <div class="ui floating message transition">
          <i class="close icon"></i>
          <div class="header">
            Hello  <?php echo "$fname $mname $lname"; ?>
          </div>
           <p>Please take time to fill up the form.</p>
        </div>

         <?php 
          $attribute = array('class'=>'ui form segment');        
          echo form_open('control1/edit_alumni_inactive',$attribute); 
        ?>

        <form class="ui form segment">
          <h4><i class="student icon"></i>&nbsp; Alumni Information</h4>
          <div class="ui inverted divider"></div>
          <div class="fields">
            <div class="ten wide field">
              <label>Address</label>
              <input name="address" placeholder="Address" value="<?php echo $address; ?>" type="text">
            </div>
            <input type="hidden" name="add_type" value="alumni">
            <input type="hidden" name="status" value="Active">
            <div class="six wide field">
              <label>Contact</label>
              <input name="contact" placeholder="Contact details" value="<?php echo $contact; ?>" type="text">
            </div>
          </div>

          <div class="fields">
            <div class="eight wide field">
              <label>Date of birth</label>
              <input name="bday" type="date" value="<?php echo $bday; ?>" type="text">
            </div>
            <div class="eight wide field">
              <label>Place of birth</label>
              <input name="birthplace" value="<?php echo $birthplace; ?>" placeholder="Place of birth" type="text">
            </div>
          </div>

          <div class="fields">
            <div class="five wide field">
              <label>Weight (kg)</label>
              <input name="weight" <?php if($weight=='0'){ echo 'placeholder="weight"'; } else { echo "value=".$weight.""; } ?> placeholder="Weight" type="text">
            </div>
            <div class="five wide field">
              <label>Height (ft.)</label>
              <input name="height" <?php if($height=='0'){ echo 'placeholder="Height"'; } else { echo "value=".$height.""; } ?> type="text">
            </div>

            <div class="six wide field">
              <label>Gender</label>
              <select name="gender" class="ui fluid dropdown">
              <option value="<?php echo $gender; ?>" SELECTED><?php echo $gender;?></option>
                        <?php 
                        if($gender=='Male')
                        { 
                            echo '<option value="Female">Female</option>';
                        }
                        else if($gender=='Female')
                        {
                            echo '<option value="Male">Male</option>';
                        }
                        else
                        {
                            echo '<option value="Male">Male</option>';
                            echo '<option value="Female">Female</option>';               
                        }
                        ?>
              </select>
            </div>
          </div>


          <div class="fields">
            <div class="eight wide field">
              <label>Religion</label>
              <input name="religion" value="<?php echo $religion; ?>" placeholder="Religion" type="text">
            </div>
            <div class="eight wide field">
              <label>Civil Status</label>
                 <select name="civil_status" class="ui fluid dropdown">
                    
                    <option value="<?php echo $civil_status; ?>" SELECTED><?php echo $civil_status;?></option>
                        <?php 
                        if($civil_status=='Single')
                        { 
                            echo '<option value="married">Married</option>';
                            echo '<option value="widowed">Widowed</option>';
                            echo '<option value="separated">Separated</option>';
                            echo '<option value="divorced">Divorced</option>'; 
                        }
                        else if($civil_status=='Married')
                        {
                            echo '<option value="single">Single</option>';
                            echo '<option value="widowed">Widowed</option>';
                            echo '<option value="separated">Separated</option>';
                            echo '<option value="divorced">Divorced</option>';                       
                        }
                        else if($civil_status=='Widowed')
                        {
                            echo '<option value="single">Single</option>';
                            echo '<option value="married">Married</option>';
                            echo '<option value="separated">Separated</option>';
                            echo '<option value="divorced">Divorced</option>';                   
                        }
                        else if($civil_status=='Separated')
                        {
                            echo '<option value="single">Single</option>';
                            echo '<option value="married">Married</option>';
                            echo '<option value="widowed">Widowed</option>';
                            echo '<option value="divorced">Divorced</option>';    
                        }
                        else if($civil_status=='Divorced')
                        {
                            echo '<option value="single">Single</option>';
                            echo '<option value="married">Married</option>';
                            echo '<option value="widowed">Widowed</option>';
                            echo '<option value="separated">Separated</option>';
                        }
                        else
                        {
                            echo '<option value="single">Single</option>';
                            echo '<option value="married">Married</option>';
                            echo '<option value="widowed">Widowed</option>';
                            echo '<option value="separated">Separated</option>';
                            echo '<option value="divorced">Divorced</option>';            
                        }
                        ?>

                </select>
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
            inline : true,
            on : 'blur',
            fields: {
              homead: {
                identifier: 'homead',
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
              dob: {
                identifier: 'dob',
                rules: [
                  {
                    type   : 'empty',
                    prompt : 'Please enter your date of birth.'
                  }
                ]
              },
              pob: {
                identifier: 'pob',
                rules: [
                  {
                    type   : 'empty',
                    prompt : 'Please enter your place of birth.'
                  }
                ]
              },
                height: {
                identifier: 'height',
                rules: [
                  {
                    type   : 'empty',
                    prompt : 'Please enter your height.'
                  }
                ]
              },
              weight: {
                identifier: 'weight',
                rules: [
                  {
                    type   : 'empty',
                    prompt : 'Please enter your weight. '
                  }
                ]
              },
              gender: {
                identifier: 'gender',
                rules: [
                  {
                    type   : 'minCount[1]',
                    prompt : 'Please select a gender.'
                  }
                ]
              },
              username: {
                identifier: 'religion',
                rules: [
                  {
                    type   : 'empty',
                    prompt : 'Please enter a relgion.'
                  }
                ]
              },
              password: {
                identifier: 'civil',
                rules: [
                  {
                    type   : 'minCount[1]',
                    prompt : 'Please select your civil status'
                  }
                ]
              },
              terms: {
                identifier: 'terms',
                rules: [
                  {
                    type   : 'checked',
                    prompt : 'You must agree to the terms and conditions'
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

