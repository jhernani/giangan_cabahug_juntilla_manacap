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
$img_name=$this->session->userdata('img_name');
$ext=$this->session->userdata('ext');
$fname=$this->session->userdata('fname');
$mname=$this->session->userdata('mname');
$lname=$this->session->userdata('lname');
?>




<!-- Menu -->

<div class="ui inverted top fixed menu" style="height:7.7%">

  <div style="height:10%; padding-top:.5%; padding-left:.5%;">
 
      <a href="<?php echo site_url('site/alumni_search'); ?>">
        <button class="ui icon black company button" type="submit">
           <i class="search tiny icon"></i>&nbsp;Find Jobs
        </button>
      </a>
<!-- 
       <?php echo form_open('site/alumni_search'); ?>
            <div class="ui inverted action input">
             <input id="filter" name="search" type="text" placeholder="Find Jobs ...">
              <button class="ui icon black button" type="submit">
                <i class="search icon"></i>
             </button>
            </div>
        </form>
-->


  </div>

      <div class="ui inverted right menu">

        <div class="ui dropdown item">
          <i class="icon big inbox"></i>Notifications
          <div class="ui tiny red label">22</div>

          <div class="menu">
            <a class="item" href="#">Jobs Matched</a>
            <a class="item" href="#">Status</a>
          </div>
        </div>


        <div class="ui dropdown item" style="margin-right:10px;">
        <?php if($img_name==''){?>
        <img src="<?php echo base_url(); ?>assets/images/profile/default-avatar.PNG" class="ui mini circular image"/ style="margin-right:10px;">
        <?php  } else{?>
        <img src="<?php echo base_url('assets/images/profile/'.$img_name.$ext);?>" class="ui mini circular image"/ style="margin-right:10px;">
        <?php  }?>

        <?php echo "$fname $lname"; ?>
          <i class="dropdown icon"></i>

          <div class="menu">
            <a class="item" href="<?php echo site_url('site/alumni_home'); ?>">Account</a>
            <a class="item">Settings</a>
            <a class="item" href="<?php echo site_url('destroy/des_ses'); ?>">Log-out</a>
          </div>
        </div>
      </div>

</div>


</head>
  

<body>

<!-- BODY -->

  <div class="pusher">
    <div class="ui basic segment">
    <div class="item">
    </br>
    </div>


