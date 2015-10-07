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

if($this->session->userdata('user_type')=='alumni')
{
$fname=$this->session->userdata('fname');
$mname=$this->session->userdata('mname');
$lname=$this->session->userdata('lname');
}
else
{
  $company_name=$this->session->userdata('company_name');
}

?>

<!--
<script type="text/javascript">
    $(function () {

    // accordion
    $('.ui.accordion')
        .accordion()
    ;
      
    //modal
    $('#exp').click(function(){
    $('#modalExp').modal('show');    
     });

    $('#educ').click(function(){
    $('#modalEduc').modal('show');    
     });

     $('#proj').click(function(){
     $('#modalProj').modal('show');    
     });

    $('#skill').click(function(){
    $('#modalSkill').modal('show');    
     });


    //profile picture hover shit
     $('.special.cards .image').dimmer({
      on: 'hover'
      });

     //dropdown
     $('select.dropdown')
     .dropdown()
      ;


    $('.ui.dropdown')
    .dropdown()
    ;

       //radiobutton
     $('.ui.radio.checkbox')
      .checkbox()
      ;




    });
</script>

-->

<!-- Menu -->

<div class="ui inverted top fixed menu" style="height:7.7%">

  <div style="height:10%; padding-top:.5%; padding-left:.5%;">
    <div class="ui inverted left icon disabled input">
      <input placeholder="Find Jobs..." type="text">
      <i class="search icon"></i>
    </div>
  </div>

      <div class="ui inverted right menu">
      <!--
        <div class="ui dropdown disabled item">
          <i class="icon big inbox"></i>Notifications
          <div class="ui tiny red label">22</div>

          <div class="menu">
            <a class="item" href="<?php echo site_url('pending_jobs'); ?>">Pending Job Posts</a>
            <a class="item" href="<?php echo site_url('view_reports'); ?>">Reports</a>
          </div>
        </div>
        -->

        <div class="ui dropdown item" style="margin-right:10px;">
          <img src="<?php echo base_url(); ?>assets/images/profile/default-avatar.PNG" class="ui mini circular image"/ style="margin-right:10px;">
          <?php 
          if($this->session->userdata('user_type')=='alumni')
          {
          echo "$fname $lname";
          }
          else
          {
            echo "$company_name";
          }
          
           ?>
          <i class="dropdown icon"></i>

          <div class="menu">
            <a class="disabled item">Account</a>
            <a class="disabled item">Settings</a>
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


