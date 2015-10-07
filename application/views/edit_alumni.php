
<div class="breadcrumb-panel">
	<div class="ui breadcrumb">
		<i class="right chevron icon divider"></i>
		<div class="section">User Accounts</div>
		<i class="right chevron icon divider"></i>
		<a class="section" href="<?php echo site_url('site/admin_tab/view_alumni'); ?>">Alumni Accounts</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">Edit Alumni</div>
	</div>
</div>

<div class="wrapper">

<?php 
$view_alumni='view_alumni';
?>
<!-- EDIT ALUMNI START -->  
  <div class="column">

        <h2 class="ui header">
          <i class="browser icon"></i>
          <div class="content">Update Alumni Details</div>
        </h2>


<?php        
foreach ($result->result() as $row)
{
   
    $id = $row->alumni_id;
    $fname = $row->fname;
    $mname = $row->mname;
    $lname = $row->lname;
    $course = $row->course;            
} 
?>
      <div class="ui form form_validation segment" style="display: block;">
        <?php echo form_open('control1/edit_user_data');?> 


    <div class="content">
      <div class="ui form error">

        <div class="two fields">

            <div class="field">
              <label>First Name</label>
              <input name="newfname" type="text" value="<?php echo $fname; ?>" >
            </div>

            <!--    HIDDEN VALUES   -->
            <input name="id" type="hidden" value="<?php echo $id; ?>" >
            <input name="edit_type" type="hidden" value="alumni">
            <!--....................-->
            
            <div class="field">
              <label>Middle Name</label>
              <input name="newmname" type="text" value="<?php echo $mname; ?>" >
            </div>
    
        </div>

        <div class="two fields">
            
            <div class="field">
              <label>Last Name</label>
              <input name="newlname" type="text" value="<?php echo $lname; ?>">
            </div>

       

            <div class="eight wide field">
              <label>Course</label>
              <select name="newcourse" class="ui dropdown">
                <option value="<?php echo $course; ?>" SELECTED><?php echo $course;?></option>
                <?php 
                if($course=='BS-ICT')
                {
                    echo '<option value="BS-IT">BS-IT</option>';
                    echo '<option value="BS-CS">BS-CS</option>';
                }else if($course=='BS-IT')
                    {
                       echo '<option value="BS-ICT">BS-ICT</option>';
                       echo '<option value="BS-CS">BS-CS</option>'; 
                    }else if($course=='BS-CS')
                        {
                            echo '<option value="BS-ICT">BS-ICT</option>';
                            echo '<option value="BS-IT">BS-IT</option>';
                        }else
                            {
                                echo '<option value="BS-ICT">BS-ICT</option>';
                                echo '<option value="BS-IT">BS-IT</option>';
                                echo '<option value="BS-IT">BS-CS</option>';
                            }
                ?>
              </select>
            </div>
        </div>

      </div>

        </br>
        <div class="actions">
          <div class="ui right floated buttons">
            <button class="ui blue button" type="submit" href="#">Save Changes</button>
            <div class="or"></div>
            <a class="ui button" href="<?php echo site_url("site/admin_tab/{$view_alumni}"); ?>">Cancel</a>
          </div></br></br>
        </div>

    </div>

        </form>
      </div>

  </div>
<!-- EDIT ALUMNI END -->



</div>




