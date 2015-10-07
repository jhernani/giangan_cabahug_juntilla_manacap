<?php 
$view_companies='view_companies';
?>
<div class="breadcrumb-panel">
	<div class="ui breadcrumb">
		<i class="right chevron icon divider"></i>
		<div class="section">User Accounts</div>
		<i class="right chevron icon divider"></i>
		<a class="section" href="<?php echo site_url("site/admin_tab/{$view_companies}"); ?>">Company Linkages</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">Edit Company</div>
	</div>
</div>

<div class="wrapper">


<!-- EDIT ALUMNI START -->  
  <div class="column">

        <h2 class="ui header">
          <i class="browser icon"></i>
          <div class="content">Update Company Details</div>
        </h2>

        <?php 
            foreach ($result->result() as $row)
            {
                $id = $row->company_id;
                $company_name = $row->company_name;
                $email = $row->email;
                $contact = $row->contact;
                $address = $row->address;           
            } 
        ?>

      <div class="ui form form_validation segment" style="display: block;">
        <?php echo form_open('control1/edit_user_data');?> 


    <div class="content">
      <div class="ui form error">

        <div class="two fields">

            <!--    HIDDEN VALUES   -->
            <input name="id" type="hidden" value="<?php echo $id; ?>">
            <input name="edit_type" type="hidden" value="company">
            <!--....................-->
            <div class="field">
              <label>Company name</label>
              <input name="newcompany_name" type="text" value="<?php echo $company_name; ?>" >
            </div>
    
            <div class="field">
              <label>Email Address</label>
              <input name="newemail" type="email" value="<?php echo $email; ?>" >
            </div>
    
            
        </div>

        <div class="two fields">
            <div class="field">
              <label>Conact Number</label>
              <input name="newcontact" type="text" value="<?php echo $contact; ?>" >
            </div>
            <div class="eight wide field">
              <div class="eight wide field">
                  <label>Address</label>
                  <input name="newaddress" type="text" value="<?php echo $address; ?>" >
              </div>
            </div>
        </div>
      </div>

        </br>
        <div class="actions">
          <div class="ui right floated buttons">
            <button class="ui blue button" type="submit" href="#">Save Changes</button>
            <div class="or"></div>
            <a class="ui button" href="<?php echo site_url("site/admin_tab/{$view_companies}"); ?>">Cancel</a>
          </div></br></br>
        </div>

    </div>

        </form>
      </div>

  </div>
<!-- EDIT ALUMNI END -->






</div>




