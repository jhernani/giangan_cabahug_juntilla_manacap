<?php 
$add_alumni='add_alumni';
?>

<div class="breadcrumb-panel">
	<div class="ui breadcrumb">
		<i class="right chevron icon divider"></i>
		<div class="section">Manage User Accounts</div>
		<i class="right chevron icon divider"></i>
		<div class="active section">View Alumni</div>
	</div>
</div>

<div class="wrapper">


  <div id="demo">
    
    <div class="ui two column doubling grid container">

      <div class="column">

        <h2 class="ui header">
          <i class="browser icon"></i>
            <div class="content">Alumni Accounts
                <a class="item" href="<?php echo site_url("site/admin_tab/{$add_alumni}"); ?>">
                <i class="tiny add user icon"></i>
                </a>
            </div>
        </h2>

<!--
                Status:
                <select class="filter-status">
                    <option></option>
                    <option value="active">Active</option>
                    <option value="disabled">Disabled</option>
                </select>
                <a href="#clear" class="clear-filter" title="clear filter">[clear]</a>
                <span class="row-count"></span>
-->
      </div>

      <div class="column">
                
        <div class="ui icon fluid input">
            <input id="filter" type="text" placeholder="Search ...">
            <i class="search icon"></i>
        </div>

      </div>

    </div></br>

            <table class="table demo metro-blue" data-filter="#filter" data-page-size="5">
                <thead>
                <tr>

                            <th data-toggle="true">ID Number</th>
                            <th data-toggle="true">Last Name</th>
                            <th data-toggle="true">First Name</th>
                            <th data-toggle="true">Course</th>
                            <th data-toggle="true">Status</th>
                            <th data-toggle="phone,tablet"></th>
                            <th data-toggle="phone,tablet"></th>
                </tr>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($result->result_array() as $results){ ?>
                <tr>

                            <td><?php echo $results['username'];?></td>
                            <td><?php echo $results['lname'];?></td>
                            <td><?php echo $results['fname'];?></td>
                            <td><?php echo $results['course'];?></td>
                            <td><?php echo $results['status'];?></td>
                            <td>
                              <?php echo form_open('site/edit_user');?>
                                <input type="hidden" name="alumni_id" value="<?php echo $results['alumni_id'];?>"/>
                                <input type="hidden" name="edit_type" value="alumni">
                                  <button class="ui animated fade button" type="submit">
                                    <div class="visible content">
                                      <i class="setting icon"></i>
                                    </div>
                                    <div class="visible content"></div>
                                    <div class="hidden content">
                                       Edit
                                    </div>
                                  </button>
                              </form>
                            </td>
                            <td>
                                </div>
                                <?php if ($results['status']=="Inactive")
                                {
                                echo form_open('control1/update_status');?>
                                <input type="hidden" name="alumni_id" value="<?php echo $results['alumni_id'];?>"/>
                                <input type="hidden" name="status" value="Active"/>
                                <input type="hidden" name="update_type" value="alumni">
                                <?php
                                echo '<button class="ui green button" style="width:100%;" type="submit"/>Activate</button>

                                </form>';
                                }
                                else
                                {
                                echo form_open('control1/update_status');?>
                                <input type="hidden" name="alumni_id" value="<?php echo $results['alumni_id'];?>"/>
                                <input type="hidden" name="status" value="Inactive"/>
                                <input type="hidden" name="update_type" value="alumni">
                                <?php
                                echo '<button class="ui red button" style="width:100%;" type="submit"/>Deactivate</button>
                                </form>';
                                }?>
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



</div>




