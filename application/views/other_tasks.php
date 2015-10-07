<div class="breadcrumb-panel">
	<div class="ui breadcrumb">
		<i class="right chevron icon divider"></i>
		<div class="active section">Other Tasks</div>
	</div>
</div>

<div class="wrapper">



<div class="ui two column doubling grid container">

<!-- ADD CATEGORY START -->  
  <div class="column">

        <h2 class="ui header">
          <i class="browser icon"></i>
          <div class="content">Add Job Category</div>
        </h2>



      <div class="ui form form_validation segment" style="display: block;">

        <?php echo validation_errors(); 
        echo form_open('control1/add_jobcategory');?> 
            <div class="field">
              <label>Job Category</label>
              <input name="jobcat" type="text" placeholder="Job Category">
            </div>

          <input class="ui blue button" type="submit" value="Submit"/>
        </form>
      </div>

  </div>
<!-- ADD CATEGORY END -->

<!-- ADD SKILL START -->  
  <div class="column">

        <h2 class="ui header">
          <i class="browser icon"></i>
          <div class="content">Add Skill</div>
        </h2>



      <div class="ui form form_validation segment" style="display: block;">
        <?php echo validation_errors(); 
        echo form_open('control1/add_skill');?> 

            <div class="field">
              <label>Skill</label>
              <input name="skill" type="text" placeholder="Skill">
            </div>

          <input class="ui blue button" type="submit" value="Submit"/>
        </form>
      </div>

  </div>
<!-- ADD SKILL END -->



</div>






</div>