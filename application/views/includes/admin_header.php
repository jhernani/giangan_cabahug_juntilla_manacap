<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Career Seeker</title>

<?php 
$fname=$this->session->userdata('fname');
$mname=$this->session->userdata('mname');
$lname=$this->session->userdata('lname');
$view_alumni = 'view_alumni';
$view_companies = 'view_companies';
$other_tasks = 'other_tasks';
$add_users = 'add_users';
$add_alumni = 'add_alumni';
$view_reports = 'view_reports';
?>


<!-- Menu -->

<div class="ui inverted top fixed menu" style="height:8%">

  <div style="height:10%; padding-top:.5%; padding-left:.5%;">
       <?php echo form_open('control1/test'); ?>
            <div class="ui inverted action input">
             <input name="search" type="text" placeholder="Find Jobs ...">
              <button class="ui icon black button" type="submit">
                <i class="search icon"></i>
             </button>
            </div>
        </form>
            
                        

  </div>

      <div class="ui inverted right menu">

        <div class="ui dropdown item">
          <i class="icon big inbox"></i>Notifications
          <div class="ui tiny red label">22</div>

          <div class="menu">
            <a class="item" href="<?php echo site_url('pending_jobs'); ?>">Pending Job Posts</a>
            <a class="item" href="<?php echo site_url('view_reports'); ?>">Reports</a>
          </div>
        </div>


        <div class="ui dropdown item" style="margin-right:10px;">
          <img src="<?php echo base_url(); ?>assets/images/profile/frog.JPEG" class="ui mini circular image"/ style="margin-right:10px;">
          <?php echo "$fname $lname"; ?>
          <i class="dropdown icon"></i>

          <div class="menu">
            <a class="item">Account</a>
            <a class="item">Settings</a>
            <a class="item" href="<?php echo site_url('destroy/des_ses'); ?>">Log-out</a>
          </div>
        </div>
      </div>

</div>


</head>
  

<body>

<!-- BODY -->


  <div class="ui visible inverted left vertical sidebar menu">

    <a class="item" href="#">
        <h3><i class="user icon"></i>CaSe - Admin Panel</h3>
    </a>


    <a class="item pull left" href="<?php echo site_url('site/admin_home'); ?>">
      <i class="home icon"></i>
      Dashboard
    </a>
<!--site_url('site/admin_home/{$tab}'); *-->

<div class="item">
  <div class="header">User Accounts</div>
  <div class="menu">
    
      <a class="item" href="<?php echo site_url("site/admin_tab/{$view_alumni}"); ?>">
        Alumni
        <i class="tiny users icon"></i>
      </a>
    
      <a class="item" href="<?php echo site_url("site/admin_tab/{$view_companies}"); ?>">
        Company Linkages
        <i class="tiny suitcase icon"></i>
      </a>
    
      <a class="item" href="<?php echo site_url("site/admin_tab/{$add_users}"); ?>">
        Add Users
        <i class="tiny add user icon"></i>
      </a>

  </div>
</div>


<div class="item">
  <div class="header">Job Posts</div>
  <div class="menu">
    
      <a class="item" href="#">
        Approved
        <i class="tiny check square icon"></i>
      </a>
    
      <a class="item" href="#">
        Pending
        <i class="tiny warning sign icon"></i>
      </a>

      <a class="item" href="#">
        Archived
        <i class="tiny archive icon"></i>
      </a>
  
  </div>
</div>

    <a class="item" href="<?php echo site_url("site/admin_tab/{$view_reports}"); ?>">
      <i class="signal icon"></i>
      Reports
    </a>


    <a class="item" href="<?php echo site_url("site/admin_tab/{$other_tasks}"); ?>">
      <i class="briefcase icon"></i>
      Other Tasks
    </a>





  </div>
  <div class="pusher">
    <div class="ui basic segment">
    <div class="item">
    </br></br></br>
    </div>


