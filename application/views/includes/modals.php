
<!-- LogIn Modal Start-->

<div id="LogInModal" class="ui small modal">
  <i class="close icon"></i>
  <div class="header">
          Log-in to your account
  </div>

      <div class="ui small form">

       <?php echo form_open('control1/validate_credentials'); ?> 
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="username" placeholder="ID Number">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
          </div>
          <input type="submit" class="ui fluid large teal submit button" value="Login"/>
        </div>   
        </form>

      </div>
</div>

<!-- LogIn Modal End -->




<!-- Add Exp Modal Start -->

<div id="addExpModal" class="ui small modal">
    <i class="close icon"></i>
    <div class="header">
      Work Experience
    </div>

    <div class="content">
      <div class="ui form">

       <?php echo form_open('control1/add_experience'); ?> 
        <div class="two fields">
          <div class="field">
              <label>Job Title</label>
              <input type="text" name="job_title" placeholder="Job Title" required>
          </div>

          <div class="field">
            <label>Company</label>
            <input type="text" name="company_name" placeholder="Company" required>
          </div>
        </div>

        <div class="two fields">
          <div class="field">
          <label>Date Started</label>
          <input type="date" name="start_date" value="" required>
          </div>
          <div class="field">
          <label>Date Ended</label>
          <input type="date" name="end_date" value="">
          </div>
        </div>

        <div class="field">
          <label>Company Address</label>
          <input type="text" name="company_address" placeholder="Company Address" required>
        </div>

      </div>
    </div></br>

        <div class="actions">
          <button class="ui right floated green compact submit button" type="submit">
            Add Work Experience</button></br></br>
        </div>
      </form>
  </div>

</div>
<!-- Add Exp Modal End -->


<!-- Add Education Modal Start -->

<div id="addEducModal" class="ui small modal">
    <i class="close icon"></i>
    <div class="header">
      Education
    </div>

    <div class="content">
      <div class="ui form">
 <?php echo form_open('control1/add_education'); ?> 
        <div class="two fields">
          <div class="field">
              <label>School</label>
              <input type="text" name="school" placeholder="School" required>
          </div>


          <div class="field">
            <label>Select Degree</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="degree" required>
              <div class="default text">Degree</div>
              <i class="dropdown icon"></i>
              <div class="menu ui transition hidden">
                <div class="item" data-value="Tertiary Level">Tertiary Level</div>
                <div class="item" data-value="Secondary Level">Secondary Level</div>
                <div class="item" data-value="Primary Level">Primary Level</div>
              </div>
            </div>
          </div>


        </div>

        <div class="two fields">
          <div class="field">
          <label>Date Started</label>
          <input type="date" name="start_date" value="" required>
          </div>
          <div class="field">
          <label>Date Ended</label>
          <input type="date" name="end_date" value="">
          </div>
        </div>


        <div class="field">
          <label>Field of Study</label>
          <input type="text" name="field_of_study" required>
        </div>


      </div>
    </div></br>

        <div class="actions">
          <button class="ui right floated green compact submit button" type="submit">
            Add Education</button></br></br>
        </div>
      </form>
  </div>

</div>
<!-- Add Education Modal End -->

<!-- Add Project Modal Start -->
<div id="addProjModal" class="ui small modal">
    <i class="close icon"></i>
    <div class="header">
      Project
    </div>

    <div class="content">
      <div class="ui form">
 <?php echo form_open('control1/add_projects'); ?> 
        <div class="two fields">
          <div class="field">
              <label>Project</label>
              <input type="text" name="project_name" placeholder="Project Name" required>
          </div>

          <div class="field">
            <label>Position</label>
            <input type="text" name="position" placeholder="Ex. Project Leader" required>
          </div>
        </div>

        <div class="two fields">
          <div class="field">
          <label>Date Started</label>
          <input type="date" name="start_date" value="" required>
          </div>
          <div class="field">
          <label>Date Ended</label>
          <input type="date" name="end_date" value="" required>
          </div>
        </div>

        <div class="field">
          <label>Project Description</label>
          <textarea type="text" name="proj_desc" placeholder="Project Description" rows="4" required></textarea>
        </div>

      </div>
    </div></br>

        <div class="actions">
          <button class="ui right floated green compact submit button" type="submit">
            Add Project</button></br></br>
        </div>
      </form>
  </div>

</div>
<!-- Add Project Modal End -->

<!-- Add Organizatio Modal Start -->
<div id="addOrgModal" class="ui small modal">
    <i class="close icon"></i>
    <div class="header">
      Organization
    </div>

    <div class="content">
      <div class="ui form">
 <?php echo form_open('control1/add_organizations'); ?> 
        <div class="two fields">
          <div class="field">
              <label>Organization</label>
              <input type="text" name="org_name" placeholder="Organization Name">
          </div>

          <div class="field">
            <label>Position</label>
            <input type="text" name="org_position" placeholder="Ex. President">
          </div>
        </div>

        <div class="two fields">
          <div class="field">
          <label>Date Started</label>
          <input type="date" name="start_date" value="">
          </div>
          <div class="field">
          <label>Date Ended</label>
          <input type="date" name="end_date" value="">
          </div>
        </div>

        <div class="field">
          <label>Organization Description</label>
          <textarea type="text" name="org_desc" placeholder="Organization Description" rows="4"></textarea>
        </div>

      </div>
    </div></br>

        <div class="actions">
          <button class="ui right floated green compact submit button" type="submit">
            Add Organization</button></br></br>
        </div>
      </form>
  </div>

</div>
<!-- Add Project Modal End -->


<!-- Add Organizatio Modal Start -->
<div id="addAwardsModal" class="ui small modal">
    <i class="close icon"></i>
    <div class="header">
      Awards & Trainings
    </div>

    <div class="content">
      <div class="ui form">
   <?php echo form_open('control1/add_awards'); ?> 
        <div class="field">
            <label>Title</label>
            <input type="text" name="award_title" placeholder="Title">
        </div>

        <div class="two fields">
           <div class="field">
            <label>Award Issuer</label>
            <input type="text" name="award_issuer" placeholder="Ex. Dynamic Communication Society">
          </div>

          <div class="field">
          <label>Date</label>
          <input type="date" name="award_date" value="">
          </div>
        </div>

        <div class="field">
          <label>Award Description</label>
          <textarea type="text" name="award_desc" placeholder="Award Description" rows="4"></textarea>
        </div>

      </div>
    </div></br>

        <div class="actions">
          <button class="ui right floated green compact submit button" type="submit">
            Add Award or Tranings</button></br></br>
        </div>
</form>
  </div>

</div>
<!-- Add Project Modal End -->


<!-- Activate Modal -->
<!--
<div id="ActivateModal" class="ui small test modal">
    <div class="header">
      Activate Account
    </div>
    <div class="content">
      <p>Are you sure you want to activate account?</p>
    </div>

        </br>
        <div class="actions">
          <div class="ui right floated buttons">
            <a class="ui positive button" href="#">YES</a>
            <div class="or"></div>
            <a class="ui negative grey button">NO</a>
          </div></br></br>
        </div>

  </div>
-->



<!-- Deactivate Modal -->
<!--
<div id="DeactivateModal" class="ui small test modal">
    <div class="header">
      Deactivate Account
    </div>
    <div class="content">
      <p>Are you sure you want to deactivate account?</p>
    </div>

        </br>
        <div class="actions">
          <div class="ui right floated buttons">
            <a class="ui red button" href="#">YES</a>
            <div class="or"></div>
            <a class="ui button">NO</a>
          </div></br></br>
        </div>

</div>
-->




