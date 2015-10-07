<?php include('includes/footable.php'); ?>

  
</br></br>

<div class="ui centered grid">

<!-- FILTER START -->

  <div class="four wide column">



      <div class="ui raised segment">

      <form class="ui form">

<h3>Advanced Filters</h3>
<!--
<a href="#clear" class="clear-filter" title="clear filter">[clear]</a>
<a href="#api" class="filter-api" title="Filter using the Filter API">[filter API]</a>
-->
        <div class="field">
          <div class="filter-status">
            <label>Years of Experience</label>
              <select name="experience" class="ui fluid dropdown">
                <option value=""></option>
                <option value="Less than 1 year">Less than 1 year</option>
                <option value="1 - 3 years">1 - 3 years</option>
                <option value="4 - 6 years">4 - 6 years</option>
                <option value="7 - 10 years">7 - 10 years</option>
                <option value="More than 10 years">More than 10 years</option>
              </select>
          </div>
        </div>

        <div class="field">
            <label>Gender</label>
              <select name="gender" class="ui fluid dropdown" disabled>
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Both">Both</option>
              </select>
        </div>

        <div class="field">
            <label>Skill</label>
            <div class="ui search">
              <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Skills..." disabled>
                <i class="search icon"></i>
              </div>
              <div class="results"></div>
            </div>
        </div>
          
        <div class="field">
            <label>Age Range</label>
            <div class="two fields">
              <div class="field">
                <input type="number" min="18" max="60" placeholder="From" disabled>
              </div>
              <div class="field">
               <input type="number" min="18" max="60" placeholder="To" disabled>
              </div>
            </div>
        </div>

       <div class="field">
          <label>Salary Range</label>
            <div class="two fields">
              <div class="field">
                <input type="number" min="5000" max="500000" placeholder="Minimum" disabled>
              </div>
              <div class="field">
               <input type="number" min="5000" max="500000" placeholder="Maximum" disabled>
              </div>
            </div>
        </div>


      </form>
      </div>
      </div>

<!-- FILTER END -->

<!-- SEARCH RESULTS START -->

      <div class="nine wide column">

      <div class="ui floating left aligned message">

  <div id="demo">

      <div class="column">
                
        <div class="ui action fluid input">
            <input id="filter" name="search" type="text" placeholder="Advanced Search ...">
                <button class="ui blue labeled icon button">
                  <i class="search icon"></i>
                  Search
                </button>
        </div>

      </div></br>

            <table class="table demo metro-blue" data-filter="#filter" data-page-size="5">

                <tbody>
                  <?php foreach($search_result as $results){ ?>
                <tr>

                            <td>

      <div class="ui items">

        <div class="item">


          <div class="ui small image">
            <?php echo form_open('site/alumni_view_job_info');?>  
              <div class="ui card">
                <div class="ui small image">
                  <img src="<?php echo base_url('assets/images/profile/'.$results['img_name'].$results['ext']);?>">
                </div>
                                      
                    <input type="hidden" name="id" value="<?php echo $results['id'];?>"/>
                      <button class="ui green animated fade bottom attached fluid tiny button" type="submit">
                          <div class="visible content">
                            Apply Now!
                          </div>
                          <div class="hidden content">
                             <?php echo $results['company_name'];?>
                          </div>
                      </button>
              </form>
            </div>
                </br>
              </div>
              <div class="middle aligned content">
                <div class="header">
                  <?php echo $results['jobtitle'];?>
                </div>
                <div class="description">
                  <p><?php echo $results['job_desc'];?></p>
                  <div class="extra">
                  <a class="ui tag small blue label">
                 Skills: <?php echo $results['skills'];?>
                  </a>&nbsp;&nbsp;&nbsp;
                  <a class="ui tag small blue label">
                 Experience: <?php echo $results['experience'];?>
                  </a></br>

                  <a class="ui tag small blue label">
                 Age: <?php echo $results['age'];?> years old
                  </a>&nbsp;&nbsp;&nbsp;
                  <a class="ui tag small blue label">
                 Gender: <?php echo $results['gender'];?>
                  </a>&nbsp;&nbsp;&nbsp;
                  <a class="ui tag small blue label">
                 Salary: Php <?php echo $results['salary'];?>
                  </a>
                </div>
                </div>
              </div>
            </div>
        </div>

      </div>

                            </td>
                           
                </tr>
                <?php }?>
                </tbody>
                <tfoot class="">
                <tr>
                    <td colspan="7">
                        <div class="pagination pagination-centered"></div>
                    </td>
                </tr>
                </tfoot>
            </table>
       
  </div>


<!-- SEARCH RESULTS END -->


</div>


