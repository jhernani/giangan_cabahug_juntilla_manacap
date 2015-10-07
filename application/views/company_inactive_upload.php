
<?php $view_company='';?>
</br>

  <div class="ui centered grid">
    <div class="eight wide column">


      <form class="ui form segment">

        <div class="ui centered card">
          <div class="image">

         <img src="<?php echo base_url(); ?>assets/images/profile/default-avatar.PNG">

          </div>
        </div>

        <center>
          <button class="ui blue compact labeled icon button">
            <i class="upload icon"></i>
            Upload
          </button>
          <a href="<?php echo site_url('site/company_index'); ?>" class="ui blue compact right labeled icon button">
            <i class="right arrow icon"></i>
            Skip this step
          </a>
          </br></br>
          <i>You can skip this step if you don't want to upload a picture for now.</i>
        </center>
      </form>

    </div>
  </div>
