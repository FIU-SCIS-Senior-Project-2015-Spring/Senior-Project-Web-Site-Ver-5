<?php $this->load->view("template_header"); ?>
<script src="<?php echo base_url() ?>js/jquery.redirect.js"></script>
<!-- added scripts for JQuery Accordion -->
<script src="<?php echo base_url() ?>js/jquery-accordion.js"></script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<h3>User Management</h3>



<br>
<button id="submitRequests" type="button" class="btn btn-primary saveBtn" disabled="disabled" style="background-color:gray">Save</button>
<button id="activateRequests" type="button" class="btn btn-primary actBtn" disabled="disabled" style="background-color:gray;margin-left:1em">Activate</button>
<button id="deactivateRequests" type="button" class="btn btn-primary deactBtn" disabled="disabled" style="background-color:gray;margin-left:1em">Deactivate</button>
<button id="deleteRequests" type="button" class="btn btn-primary delBtn" disabled="disabled" style="background-color:gray;margin-left:1em">Delete</button>
<br> </br>
<div id="machines">
<div class="machine col-md-12">

<table class="table table-bordered" id="machines_table"  >
    <thead>
		<tr></tr>
        <tr>
            <!-- Filters -->
            <th></th>
            <th></th>
            <th>
                <input id="fn" class="input-small text-filter fn" type="text" value="<?php echo $fn ?>">
            </th>
            <th>
                <input id="ln" class="input-small text-filter ln" type="text" value="<?php echo $ln ?>">
            </th>
            <th>
                <input id="email" class="input-medium text-filter email" style="width:125px" type="text" value="<?php echo $email ?>">
            </th>
            <th>
                <select  class="field-custom dropdown role" id="role">
                  <?php echo '<option '.($role==='ALL ROLES'?'selected="selected"':'').' value="ALL ROLES">ALL ROLES</option>'; ?>
                  <?php echo '<option '.($role==='STUDENT'?'selected="selected"':'').' value="STUDENT">STUDENT</option>'; ?>
                  <?php echo '<option '.($role==='PROFESSOR'?'selected="selected"':'').'value="PROFESSOR">PROFESSOR</option>'; ?>
                  <?php echo '<option '.($role==='HEAD'?'selected="selected"':'').' value="HEAD">HEAD</option>'; ?>
                  <option style="display:none;" value="">______________________</option>'; <!--For spacing purposes-->
                </select>
            </th>
            <th>
                <select class="field-custom dropdown status" id="status">
                  <?php echo '<option '.($status==='ALL STATUS'?'selected="selected"':'').' value="ALL STATUS">ALL STATUS</option>'; ?>
                  <?php echo '<option '.($status==='INACTIVE'?'selected="selected"':'').' value="INACTIVE">INACTIVE</option>'; ?>
                  <?php echo '<option '.($status==='PENDING'?'selected="selected"':'').'value="PENDING">PENDING</option>'; ?>
                  <?php echo '<option '.($status==='ACTIVE'?'selected="selected"':'').' value="ACTIVE">ACTIVE</option>'; ?>
                  <option style="display:none;" value="">____________________</option>; <!--For spacing purposes-->
                </select>
            </th>
			<th>
				<select class="field-custom dropdown linkedin" id="linkedIn">
				  <?php echo '<option '.($linkedIn==='ALL'?'selected="selected"':'').' value="ALL">ALL</option>'; ?>
                  <?php echo '<option '.($linkedIn==='YES'?'selected="selected"':'').' value="YES">YES</option>'; ?>
                  <?php echo '<option '.($linkedIn==='NO'?'selected="selected"':'').' value="NO">NO</option>'; ?>
                  <?php echo '<option '.($linkedIn==='No Picture'?'selected="selected"':'').' value="No Picture">No Picture</option>'; ?>
                  <?php echo '<option '.($linkedIn==='No LinkedIn'?'selected="selected"':'').' value="No LinkedIn">No LinkedIn</option>'; ?>
                  <?php echo '<option '.($linkedIn==='No Experience'?'selected="selected"':'').' value="No Experience">No Experience</option>'; ?>
                  <?php echo '<option '.($linkedIn==='No Skills'?'selected="selected"':'').' value="No Skills">No Skills</option>'; ?>
                </select>
			</th>
            <th>
				<select class="field-custom dropdown rank" id="rank">
				  <?php echo '<option '.($rank==='ALL'?'selected="selected"':'').' value="ALL">ALL</option>'; ?>
                  <?php echo '<option '.($rank==='YES'?'selected="selected"':'').' value="YES">YES</option>'; ?>
                  <?php echo '<option '.($rank==='NO'?'selected="selected"':'').' value="NO">NO</option>'; ?>
                  <option style="display:none;" value="">___________</option>; <!--For spacing purposes-->
			</th>
			<th></th>
            <!-- end filters -->
        </tr>
        <tr>
            <th style="display:none;">Id No.</th>
            <th> <input name="selectall" type="checkbox" id="selectall" class="selectall" /> </th>
            <th>Picture</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
			<th>LinkedIn</th>
			<th>Ranks</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requests as $request):?>
        <tr class="rows" id="userRow_<?php echo $request->id ?>" name="userCheck" onClick="specialCase(<?php echo $request->id ?>)">
            <td style="display:none;">
                <select id="idRow_<?php echo $request->id ?>" class="field-custom idRow" name="id">
                    <?php echo '<option>'.$request->id.'</option>'?>
                </select>
            </td>
            <td><?php echo " <input class=\"checkbox\" type=\"checkbox\" name=\"userRows\" id=\"userCheck_".$request->id."\" /> " ?> </td>
            <td>
                <div>
                    <a onclick="return emulateUser(<?php echo '\''.$request->email.'\',\''.$request->hash_pwd.'\',\''.$request->role.'\','.$request->id ?>);" href="" data-toggle="tooltip" title="Act as User">
                        <img onError="this.onerror=null;this.src='img/no-photo.jpeg';" src="<?php if($request->picture) echo $request->picture; else echo base_url( getImage($request->id) ); ?>" alt="" class="img-polaroid" height="50" width="50">
                    </a>
                </div>
            </td>
            <td>
                <input id="col_1" name="col_1" class="input-small mg-top-20 inputText" type="text" value="<?php echo $request->first_name ?>">
            </td>
            <td>
                <input id="col_2" name="col_2" class="input-small mg-top-20 inputText" type="text" value="<?php echo $request->last_name ?>">
            </td>
            <td>
                <input id="col_3" name="col_3" class="input-medium mg-top-20 inputText" style="width:125px" type="text" value="<?php echo $request->email ?>">
            </td>
            <td>
                <select name="col_4" class="field-custom mg-top-20 inputText" id="col_4">
                    <?php 
                        $roles = array('HEAD','STUDENT','PROFESSOR'
                            );
                                foreach($roles as $st){
                                    if($request->role == $st){
                                        echo'<option value ='.$st.' selected="selected">'.$st.'</option>';
                                    }else{
                                     echo'<option value="'.$st.'">'.$st.'</option>';
                                    }
                                }
                    ?>
                </select>
            </td>
            <td>
                <select name="col_5" class="field-custom mg-top-20 inputText" id="col_5" >
                  <?php 
                        $sta = array('PENDING','ACTIVE','INACTIVE'
                            );
                                foreach($sta as $st){
                                    if($request->status == $st){
                                        echo'<option value ='.$st.' selected="selected">'.$st.'</option>';
                                    }else{
                                     echo'<option value="'.$st.'">'.$st.'</option>';
                                    }
                                }
                    ?>
                </select>
            </td>
			<td> 
				<div name="col_6" class="mg-top-20" >
				<?php
					//if ($request->headline_linkedIn == NULL){echo "NO";} else {echo "YES";}
								$linkedIn = true;
								$output = "Missing:\n";
								
								if(!($request->picture) || $request->picture = ''){
                                    //$output .= "  Picture <br>\n" ;
									$output .= "  Picture\n" ;
									$linkedIn = false;
                                }
                                if(!($request->headline_linkedIn)){
                                    //$output .= "  LinkedIn <br>\n" ;
                                    $output .= "  LinkedIn\n" ;
									$linkedIn = false;
                                }
								if(!($request->experience)){
                                    //$output .= "  Experience <br>\n" ;
                                    $output .= "  Experience\n" ;
									$linkedIn = false;
                                }
								if(!($request->skill)){
                                    $output .= "  Skills" ;
									$linkedIn = false;
                                }
								if($linkedIn == false){
									echo "<a toggle=\"tooltip\" title=\"".$output."\">NO<br></a>";
									//echo $output;
								}
								else
									echo "YES";
				?>
				</div>
				
			</td>
			<td>
				<div name="col_7" class="mg-top-20" > 
				<?php
					$min = $this->spw_match_model->getMinimum();
					if($request->rank >= $min)
							echo 'YES';
					elseif($request->rank < $min){
							$need = "Needs " . ($min - $request->rank) . " more to rank";
							//echo 'NO <br>Need ' . ($min-$request->rank) . " more";
							echo "<a toggle=\"tooltip\" title=\"".$need."\">NO</a>";
					}
					else
							echo "N/A";
					
				?>
				</div>
			</td>
            <td>
                <div class="mg-top-20" style="width:52px">
				<?php	
					//Light Icons
					if($request->status == "ACTIVE"){
						echo ("<div id=\"light\" style=\"float:left\">
							<span id=\"red\" title=\"Deactivate\" class=\"redBtn\" ></span>
							<span id=\"yellow\" title=\"Make Pending\" class=\"yellowBtn\" ></span>
							<span id=\"green\" title=\"Activate\" class=\"active greenBtn\" ></span>
						</div>");
					}
					elseif($request->status == "INACTIVE"){
						echo ("<div id=\"light\" style=\"float:left\">
							<span id=\"red\" title=\"Deactivate\" class=\"active redBtn\" ></span>
							<span id=\"yellow\" title=\"Make Pending\" class=\"yellowBtn\" ></span>
							<span id=\"green\" title=\"Activate\" class=\"greenBtn\" ></span>
						</div>");
					}
					else{ //Status is PENDING
						echo ("<div id=\"light\" style=\"float:left\">
							<span id=\"red\" title=\"Deactivate\" class=\"redBtn\" ></span>
							<span id=\"yellow\" title=\"Make Pending\" class=\"active yellowBtn\" ></span>
							<span id=\"green\" title=\"Activate\" class=\"greenBtn\" ></span>
						</div>");
					}
					
					$msg = "Are you sure you want to delete user $request->first_name $request->last_name ?";
					$url = "id=$request->id&fn=$fn&ln=$ln&email=$email&role=$role&status=$status&linkedIn=$linkedIn&rank=$rank";
					
					//Delete Icon
					echo("<a data-toggle=\"tooltip\" title=\"Delete User\" class=\"deleteUser\" href=".base_url('./userManagement?'.$url).
							" onclick=\"return confirm('$msg')\" style=\"margin-left:5px\"> <img id=\"\" src=".
							base_url('img/deletered.png')." height=\"20\" width=\"20\" > </a>");
					//Save Icon
					echo("<button data-toggle=\"tooltip\" title=\"Save User\" class=\"saveUser\" 
							disabled=\"disabled\" style=\"border:0px; background-color:transparent; float:right;\"> <img id=\"\" src=". 
							base_url('img/savegray.png')." class=\"saveImg\" height=\"20\" width=\"20\" > </button>");
				?>
                </div>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    <!-- Being filter for the footer of the table -->
        <thead>
            <tr>
                <th style="display:none;">Id No.</th>
                <th> <input name="selectall" type="checkbox" id="selectall" class="selectall" /> </th>
                <th>Picture</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>LinkedIn</th>
                <th>Ranks</th>
                <th>Actions</th>
            </tr>
            <tr></tr>
            <tr>
                <!-- Filters -->
                <th></th>
                <th></th>
                <th>
                    <input id="fn2" class="input-small text-filter fn" type="text" value="<?php echo $fn ?>">
                </th>
                <th>
                    <input id="ln2" class="input-small text-filter ln" type="text" value="<?php echo $ln ?>">
                </th>
                <th>
                    <input id="email2" class="input-medium text-filter email" style="width:125px" type="text" value="<?php echo $email ?>">
                </th>
                <th>
                    <select class="field-custom dropdown role" id="role2">
                      <?php echo '<option '.($role==='ALL ROLES'?'selected="selected"':'').' value="ALL ROLES">ALL ROLES</option>'; ?>
                      <?php echo '<option '.($role==='STUDENT'?'selected="selected"':'').' value="STUDENT">STUDENT</option>'; ?>
                      <?php echo '<option '.($role==='PROFESSOR'?'selected="selected"':'').'value="PROFESSOR">PROFESSOR</option>'; ?>
                      <?php echo '<option '.($role==='HEAD'?'selected="selected"':'').' value="HEAD">HEAD</option>'; ?>
                    </select>
                </th>
                <th>
                    <select class="field-custom dropdown status" id="status2">
                      <?php echo '<option '.($status==='ALL STATUS'?'selected="selected"':'').' value="ALL STATUS">ALL STATUS</option>'; ?>
                      <?php echo '<option '.($status==='INACTIVE'?'selected="selected"':'').' value="INACTIVE">INACTIVE</option>'; ?>
                      <?php echo '<option '.($status==='PENDING'?'selected="selected"':'').'value="PENDING">PENDING</option>'; ?>
                      <?php echo '<option '.($status==='ACTIVE'?'selected="selected"':'').' value="ACTIVE">ACTIVE</option>'; ?>
                    </select>
                </th>
                <th>
                    <select  class="field-custom dropdown linkedin" id="linkedIn2">
                      <?php echo '<option '.($linkedIn==='ALL'?'selected="selected"':'').' value="ALL">ALL</option>'; ?>
                      <?php echo '<option '.($linkedIn==='YES'?'selected="selected"':'').' value="YES">YES</option>'; ?>
                      <?php echo '<option '.($linkedIn==='NO'?'selected="selected"':'').' value="NO">NO</option>'; ?>
                      <?php echo '<option '.($linkedIn==='No Picture'?'selected="selected"':'').' value="No Picture">No Picture</option>'; ?>
                      <?php echo '<option '.($linkedIn==='No LinkedIn'?'selected="selected"':'').' value="No LinkedIn">No LinkedIn</option>'; ?>
                      <?php echo '<option '.($linkedIn==='No Experience'?'selected="selected"':'').' value="No Experience">No Experience</option>'; ?>
                      <?php echo '<option '.($linkedIn==='No Skills'?'selected="selected"':'').' value="No Skills">No Skills</option>'; ?>
                    </select>
                </th>
                <th>
                    <select class="field-custom dropdown rank" id="rank2">
                      <?php echo '<option '.($rank==='ALL'?'selected="selected"':'').' value="ALL">ALL</option>'; ?>
                      <?php echo '<option '.($rank==='YES'?'selected="selected"':'').' value="YES">YES</option>'; ?>
                      <?php echo '<option '.($rank==='NO'?'selected="selected"':'').' value="NO">NO</option>'; ?>
                </th>
                <th></th>
                <!-- end filters -->
            </tr>
        </thead>
</table>
</div>
<button id="submitRequests" type="button" class="btn btn-primary saveBtn" disabled="disabled" style="background-color:gray">Save</button>
<button id="activateRequests" type="button" class="btn btn-primary actBtn" disabled="disabled" style="background-color:gray;margin-left:1em">Activate</button>
<button id="deactivateRequests" type="button" class="btn btn-primary deactBtn" disabled="disabled" style="background-color:gray;margin-left:1em">Deactivate</button>
<button id="deleteRequests" type="button" class="btn btn-primary delBtn" disabled="disabled" style="background-color:gray;margin-left:1em">Delete</button>
</div>
<br></br>
<!-- Email Template (needs development)
<div class="well">
	<div id="accordion">
	<h3>Email Notification</h3>
		<?php
		/*		
		  $query_msg_notif = $this->db->query( 'SELECT intro FROM email_template WHERE id = "NOTIFICATION"' );
		  foreach( $query_msg_notif->result_array( ) as $row )
		  {
			$msg_stud = $row[ 'intro' ];
		  }

		  //$unique_link = $this->input->post( 'unique_link' );
		  $message =' <html>
		  <head><title></title></head>
		  <body>
		  <h4>Dear User </h4>
		  <p>It seems that you are still in need to complete your initial tasks.</p>
		  <p>Please make sure you have your linked in profile synchronized and your minimum ranking completed.</p>
		  
		  </body>
		  </html>';
		?>
		<div><p>
		<p>This is a display for the email template for notifications to users.</p>
		<?php
		  //echo form_open( 'admin/change_invitation/NOTIFICATION', array( 'class' => 'form-inline', 'id' => 'notification_email' ) );
		  echo( "<div style='padding-bottom: 10px;'>" );
		  echo form_textarea( array(
									'id' => 'notification_text',
									'name' => 'notification_text',
									'value' => $msg_stud,
									'style' => "margin-left: 1px; margin-right: 7px; width: 600px;",
									'title' => 'Notification' ) );
		  echo( "</div>" );
		  echo( "<div>" );
		 
		  echo("<button id=\"email-btn\" name=\"email btn\" class=\"btn emailBtn\" disabled=\"disabled\" style=\"background-color:gray\">Send Email</button>");
		  echo( "</div>" );
		  //echo form_close( );
		  
		  //$fname = $_POST['fname'];
		  //$lname = $_POST['lname'];
		  //$email = $_POST['email'];
		  
		  //mail($email, "Dear ".$fname." ".$lname, "THANKS!");
		  */
		?>
		</p></div> 
	</div>
</div>
-->
<script type="text/javascript">
//Local variables to check for form change in the table
var hasChange = false;
var clickedUserSave = false;
var confirmMsg = '';
//These are used to collect new changes when user icon is clicked
var old_col_1;
var old_col_2;
var old_col_3;
var old_col_4;
var old_col_5;

function filterForm(){
   
    var fn = $("#fn").val();
    var ln = $('#ln').val();
    var email = $('#email').val();
    var status = $('#status').val();
    var role = $("#role").val();
	var linkedIn = $('#linkedIn').val();
	var rank = $('#rank').val();
    
    var whereto = "./userManagement?";
    
    if(role!=='') whereto+="role="+role+"&";
    if(status!=='') whereto+="status="+status+"&";
	if(linkedIn!=='') whereto+="linkedIn="+linkedIn+"&";
	if(rank!=='') whereto+="rank="+rank+"&";
    if(fn!=='') whereto+="fn="+fn+"&";
    if(ln!=='') whereto+="ln="+ln+"&";
    if(email!=='') whereto+="email="+email+"&";

    var lastChar = whereto.charAt(whereto.length-1);
    console.log("last char: "+lastChar);
    if(lastChar==='&'){
        console.log("in here");
        whereto = whereto.substring(0,whereto.length-1);
    }
    console.log(whereto);
    window.location.href = whereto;
}

$(document).ready(function() {
    console.log( "ready!" );
	//Check for how check boxes look
	$('.checkbox').trigger('change');
});

//Here begins the code that copies both text filters
//-----START Copy Filter-----
//first name
$("#fn").keyup(function(e){var val = $(this).val(); $("#fn2").val(val);});
$("#fn2").keyup(function(e){var val = $(this).val(); $("#fn").val(val);});
//last name
$("#ln").keyup(function(e){var val = $(this).val(); $("#ln2").val(val);});
$("#ln2").keyup(function(e){var val = $(this).val(); $("#ln").val(val);});
//email
$("#email").keyup(function(e){var val = $(this).val(); $("#email2").val(val);});
$("#email2").keyup(function(e){var val = $(this).val(); $("#email").val(val);});
//role
$("#role").change(function(e){var val = $(this).val(); $("#role2").val(val);});
$("#role2").change(function(e){var val = $(this).val(); $("#role").val(val);});
//status
$("#status").change(function(e){var val = $(this).val(); $("#status2").val(val);});
$("#status2").change(function(e){var val = $(this).val(); $("#status").val(val);});
//linkedin
$("#linkedIn").change(function(e){var val = $(this).val(); $("#linkedIn2").val(val);});
$("#linkedIn2").change(function(e){var val = $(this).val(); $("#linkedIn").val(val);});
//rank
$("#rank").change(function(e){var val = $(this).val(); $("#rank2").val(val);});
$("#rank2").change(function(e){var val = $(this).val(); $("#rank").val(val);});
//------END Copy Filter------

$('.text-filter').keyup(function(e){
    if(e.keyCode == 13)
    {
        filterForm();
    }
});

$(".dropdown" ).change(function() {
    filterForm();
});

$('.saveBtn').click(function(){
	confirmMsg = 'You are about to save checked users.\nIf you continue and there are unsaved changes unchecked, you will lose those changes.';
	console.log("Clicked save");
	if(window.confirm(confirmMsg)){
		var data = getTableContent();
		var validInput = isValidInput(data);
		console.log("machines: ");
		console.log(data);

		if(validInput){
			clickedUserSave = true;
			uploadMachines(data);
		}
	}
	
});

$('.saveUser').click(function(){
    console.log("Clicked save icon");
	var data = [];
    var table = $('#machines_table tbody tr');
	var id = $(this).closest('tr').find('[name="id"]').val();
	var col_1 = ($(this).closest('tr').find('[name=col_1]').val());
	var col_2 = ($(this).closest('tr').find('[name=col_2]').val());
	var col_3 = ($(this).closest('tr').find('[name=col_3]').val());
	var col_4 = ($(this).closest('tr').find('[name=col_4]').val());
	var col_5 = ($(this).closest('tr').find('[name=col_5]').val());
			
	var obj = {
		"id":id,
		"col_1":col_1,
		"col_2":col_2,
		"col_3":col_3,
		"col_4":col_4,
		"col_5":col_5
	};
	data.push(obj);
    var validInput = isValidInput(data);
    console.log("machines: ");
    console.log(data);

    if(validInput){
		//Display changes when successful
		$(this).closest('tr').css('background', '');
		$(this).closest('tr').find('[type=checkbox]').prop('checked', false);
		$(this).closest('tr').find('[class=saveUser]').attr('disabled', true);
		$(this).closest('tr').find('[class=saveImg]').attr('src', 'img/savegray.png');
				
		//Collect the new values of current row
		var old_col_1 = ($(this).closest('tr').find('[name=col_1]'));
		var old_col_2 = ($(this).closest('tr').find('[name=col_2]'));
		var old_col_3 = ($(this).closest('tr').find('[name=col_3]'));
		var old_col_4 = ($(this).closest('tr').find('[name=col_4]'));
		var old_col_5 = ($(this).closest('tr').find('[name=col_5]'));
		
		//Save current values of elements
		old_col_1.data('oldFn', old_col_1.val());
		old_col_2.data('oldLn', old_col_2.val());
		old_col_3.data('oldEmail', old_col_3.val());
		old_col_4.data('oldRole', old_col_4.val());
		old_col_5.data('oldStatus', old_col_5.val());
		
		//Check for any other changes
		hasChange = false;
		$("tr").each(function() {
			if($(this).css("background-color") == "rgb(255, 255, 224)"){
				hasChange = true;
			}
		});
		
		//Check for how check boxes look
		$('.checkbox').trigger('change');
		
		//Attempt upload
        uploadUser(data);
    }
});

function uploadUser(machineList){
    var url = "./userManagement";
    console.log(url);
    console.log(JSON.stringify(machineList));
    $.ajax({
        type: "POST",
        url: url,
        data: JSON.stringify(machineList),
        dataType: "json",
        success: function(response){
            console.log("response");
            console.log(response);
            if(response.success){
                //show message when successful
                console.log("Upload Success!");
            }else{
                //show message when not success
                alert("Upload Failed");
            }
        }
    });
    
}

$('.actBtn').click(function(){
	confirmMsg = 'You are about to activate checked users.\nIf you continue and there are unsaved changes unchecked, you will lose those changes.';
	console.log("Clicked activate");
	if(window.confirm(confirmMsg)){
		$('.checkbox').each(function() {
			if(this.checked){
				$(this).closest('tr').find('[name=col_5]').val('ACTIVE');
			}
		});
		var data = getTableContent();
		var validInput = isValidInput(data);
		console.log("machines: ");
		console.log(data);

		if(validInput){
			clickedUserSave = true;
			uploadMachines(data);
		}
	}
});

$('.deactBtn').click(function(){
	confirmMsg = 'You are about to deactivate checked users.\nIf you continue and there are unsaved changes unchecked, you will lose those changes.';
	console.log("Clicked deactivate");
	if(window.confirm(confirmMsg)){
		$('.checkbox').each(function() {
			if(this.checked){
				$(this).closest('tr').find('[name=col_5]').val('INACTIVE');
			}
		});
		var data = getTableContent();
		var validInput = isValidInput(data);
		console.log("machines: ");
		console.log(data);

		if(validInput){
			clickedUserSave = true;
			uploadMachines(data);
		}
	}
});

$('.delBtn').click(function(){
	//alert("Delete button clicked! \n\n Work still in progress!");
	confirmMsg = 'You are about to delete checked users.\nIf you continue and there are unsaved changes unchecked, you will lose those changes.';
	confirmMsg += '\n\nAre you sure you want to delete users?';
	console.log("Clicked delete");
	if(window.confirm(confirmMsg)){
		$('.checkbox').each(function() {
			if(this.checked){
				// var user_id = $(this).closest('tr').find('[name="id"]').val();
				// $this->spw_user_model->delete_user(user_id)
			}
		});
		var data = getTableContent();
		var validInput = isValidInput(data);
		console.log("machines: ");
		console.log(data);

		if(validInput){
			clickedUserSave = true;
			deleteRequests(data);
		}
	}
});

//This took a while but it was done, it deletes checked users
//Note that this can display an error but still deletes users.
function deleteRequests(machineList){
	var msg = "";
    var url = "";
    console.log(url);
    console.log(JSON.stringify(machineList));
	$('.checkbox').each(function() {
		if(this.checked){
			var id = $(this).closest('tr').find('[name="id"]').val();
			var col_1 = ($(this).closest('tr').find('[name=col_1]').val()); //first_name
			var col_2 = ($(this).closest('tr').find('[name=col_2]').val()); //last_name
			var col_3 = ($(this).closest('tr').find('[name=col_3]').val()); //email
			var col_4 = ($(this).closest('tr').find('[name=col_4]').val()); //role
			var col_5 = ($(this).closest('tr').find('[name=col_5]').val()); //status
			var col_6 = ($(this).closest('tr').find('[name=col_6]').val());	//linkedIn
			var col_7 = ($(this).closest('tr').find('[name=col_7]').val()); //rank
			url = "./userManagement?id="+id+"&fn="+col_1+"&ln="+col_2+"&email="+col_3+"&role="+col_4+"&status="+col_5+"&linkedIn="+col_6+"&rank="+col_7;
			console.log(url);
			$.ajax({
				type: "POST",
				url: url,
				//data: JSON.stringify(machineList),
				dataType: "json",
				success: function(response){
					console.log("response");
					console.log(response);
					if(response.success){
						//show success message
						console.log("Success on deleting users");
					}else{
						//show message when not success
						alert("User deletion failed");
						
					}
				}
			});
			
		}
	});	
	location.reload();
}
/* Used for email template (needs to check Ajax)
$(document).ready(function() {
	$('.emailBtn').on('click', function() {
		alert("Email button clicked!");
		var fname;
		var lname;
		var email;
		var varData; //used to get the variables
		$('.checkbox').each(function() {
			if(this.checked){
				fname = ($(this).closest('tr').find('[name=col_1]').val());	//First name
				lname = ($(this).closest('tr').find('[name=col_2]').val()); //Last name
				email = ($(this).closest('tr').find('[name=col_3]').val()); //email
				varData = 'fname='+fname+'lname='+lname+'&email='+email;
				console.log(varData);
				//$.post('email.php', { email: $(this).closest('tr').find('[name=col_3]').val() });
				$.ajax({
					type: "POST",
					url: 'email.php',
					data: varData,
					dataType: "text",
					success: function(response){
						console.log("response");
						console.log(response);
						if(response.success){
							//show success message
							alert("Email was a success");
						}else{
							//show message when not success
							alert("Email sending failed");
							
						}
					}
				});
			}
		});	
	});
});
*/
//Warn user before leaving if there are changes
$(window).bind("beforeunload", function (e) {
	var confirmMsg = 'You have unsaved changes \nIf you leave before saving, you will lose changes made.';
	if(!(clickedUserSave)){
		if(hasChange){
			//window.confirm = confirmMsg;
			//return confirmMsg;
			(e || window.event).returnValue = confirmMsg; //Gecko + IE
			return confirmMsg; //Gecko + Webkit, Safari, Chrome etc.
		}else{
			return undefined;
		}
	}
});

//Red light
$('.redBtn').on('click', function() {
	//Light red on, light off others
	$(this).addClass('active');
			$(this)
				.next()
				.removeClass('active')
				.next()
				.removeClass('active');
	$(this).closest('tr').find('[name=col_5]').val('INACTIVE');
	$(this).closest('tr').find('[class=saveUser]').trigger('click');
});

//Yellow light
$('.yellowBtn').on('click', function() {
	//Light yellow on, turn of others
	$(this).addClass('active');
			$(this)
				.next()
				.removeClass('active')
				.parent()
				.find('span:first')
				.removeClass('active');
	$(this).closest('tr').find('[name=col_5]').val('PENDING');
	$(this).closest('tr').find('[class=saveUser]').trigger('click');
});

//Green light
$('.greenBtn').on('click', function() {
	//Light green on, turn off others
	$(this).addClass('active');
			$(this)
				.parent()
				.find('span:first')
				.removeClass('active')
				.next()
				.removeClass('active');
	$(this).closest('tr').find('[name=col_5]').val('ACTIVE');
	$(this).closest('tr').find('[class=saveUser]').trigger('click');
});

//Test to check for changed fields
$(".inputText").each(function() {
    //Collect the values of each column
    var old_col_1 = ($(this).closest('tr').find('[name=col_1]'));
    var old_col_2 = ($(this).closest('tr').find('[name=col_2]'));
    var old_col_3 = ($(this).closest('tr').find('[name=col_3]'));
    var old_col_4 = ($(this).closest('tr').find('[name=col_4]'));
    var old_col_5 = ($(this).closest('tr').find('[name=col_5]'));
    
    // Save current values of elements
    old_col_1.data('oldFn', old_col_1.val());
    old_col_2.data('oldLn', old_col_2.val());
    old_col_3.data('oldEmail', old_col_3.val());
    old_col_4.data('oldRole', old_col_4.val());
    old_col_5.data('oldStatus', old_col_5.val());

    // Look for changes in the value
    $(this).bind("propertychange change click keyup input paste", function(event){
		hasChange = false;

        var col_1 = ($(this).closest('tr').find('[name=col_1]').val());
        var col_2 = ($(this).closest('tr').find('[name=col_2]').val());
        var col_3 = ($(this).closest('tr').find('[name=col_3]').val());
        var col_4 = ($(this).closest('tr').find('[name=col_4]').val());
        var col_5 = ($(this).closest('tr').find('[name=col_5]').val());
      
      // For testing purposes, use Inspect Element and look at console
      //  console.log(old_col_1.data('oldFn'));
      //  console.log(col_1, col_2, col_3, col_4, col_5);

      // If value has changed...
      if (old_col_1.data('oldFn') != (col_1) || old_col_2.data('oldLn') != (col_2) || old_col_3.data('oldEmail') != (col_3) 
            || old_col_4.data('oldRole') != (col_4) || old_col_5.data('oldStatus') != (col_5) ) {
           	
            $(this).closest('tr').css('background', 'lightyellow');
            $(this).closest('tr').find('[type=checkbox]').prop('checked', true);
			$(this).closest('tr').find('[class=saveUser]').attr('disabled', false);
			$(this).closest('tr').find('[class=saveImg]').attr('src', 'img/saveblue.png');
	  }else{
            $(this).closest('tr').css('background', '');
            $(this).closest('tr').find('[type=checkbox]').prop('checked', false);
			$(this).closest('tr').find('[class=saveUser]').attr('disabled', true);
			$(this).closest('tr').find('[class=saveImg]').attr('src', 'img/savegray.png');
	  }
	  
	  //Check for any changes in table here
	  $("tr").each(function() {
			if($(this).css("background-color") == "rgb(255, 255, 224)"){
				hasChange = true;
			}
	  });
	  
	  //Check for how check boxes look
      $('.checkbox').trigger('change');
	  
    });
 });

//Function for the master/parent checkbox
$('.selectall').on('click', function(event) {
	if(this.checked || this.indeterminate) {
		$('.checkbox').each(function() {
			this.checked = true;
		});
		$('.selectall').each(function() {
				this.checked = true;
				this.indeterminate = false;
		});
        //All buttons enable
        $('.saveBtn').each(function() {
                this.disabled = false;
                $(this).css('background', '');
		});
		$('.actBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		$('.deactBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		$('.delBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		$('.emailBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		
	}else{
		$('.checkbox').each(function() {
			this.checked = false;                     
		});
		$('.selectall').each(function() {
                this.checked = false;
                this.indeterminate = false;
	    });   
        //All buttons disable
        $('.saveBtn').each(function() {
                this.disabled = true;
                $(this).css('background', 'gray');
		});
		$('.actBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
		$('.deactBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
		$('.delBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
		$('.emailBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
	}
});

//Check for child check	boxes  that change and reflect it on the parent checkbox
$('.checkbox').change(function(event) {
	var checkExists = false;
	var allChecks = false;
	$('.checkbox').each(function() {
		//If there is at least one checkbox checked...
		if(this.checked){
			checkExists = true;
		}
	});
	
	//Check if all checkboxes are checked
	if ($('.checkbox:checked').length == $('.checkbox').length) {
       	allChecks = true;
    }
	
	if(checkExists){
		//All buttons enable
        $('.saveBtn').each(function() {
                this.disabled = false;
                $(this).css('background', '');
		});
		$('.actBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		$('.deactBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		$('.delBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		$('.emailBtn').each(function() {
			this.disabled = false;
			$(this).css('background', '');
		});
		//If all checkboxes are checked...
		if(allChecks){
			$('.selectall').each(function() {
				this.checked = true;
				this.indeterminate = false;
			});
		}else{
			$('.selectall').each(function() {
				this.checked = true;
				this.indeterminate = true;
			});
		}
	}
	else{
		$('.selectall').each(function() {
			this.checked = false;
			this.indeterminate = false;
		});
		//All buttons disable
        $('.saveBtn').each(function() {
                this.disabled = true;
                $(this).css('background', 'gray');
		});
		$('.actBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
		$('.deactBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
		$('.delBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
		$('.emailBtn').each(function() {
			this.disabled = true;
			$(this).css('background', 'gray');
		});
	}
});

function emulateUser(email_address,password,role,id){
    console.log("Redirecting!!!");
    $.redirect("./admin/impersonate", { "email_address": email_address, "password": password, "role":role, "id":id });
    return false;
}

function uploadMachines(machineList){
    var url = "./userManagement";
    console.log(url);
    console.log(JSON.stringify(machineList));
    $.ajax({
        type: "POST",
        url: url,
        data: JSON.stringify(machineList),
        dataType: "json",
        success: function(response){
            console.log("response");
            console.log(response);
            if(response.success){
                //do page reload when success
                location.reload();
            }else{
                //show meassage when not success
                alert("Upload Failed");
            }
        }
    });
    
}

//Old version of this code, will save all users on the table
/*function getTableContent() {
    var data = [];
    var table = $('#machines_table tbody tr');
    for(var i = 0 ; i< table.length;i++){
        var row = table.eq(i);
        var id = row.find('[name="id"]').val();
        var col_1 = row.find('[name="col_1"]').val();
        var col_2 = row.find('[name="col_2"]').val();
        var col_3 = row.find('[name="col_3"]').val();
        var col_4 = row.find('[name="col_4"]').val();
        var col_5 = row.find('[name="col_5"]').val();
		
        var obj = {
            "id":id,
            "col_1":col_1,
            "col_2":col_2,
            "col_3":col_3,
            "col_4":col_4,
            "col_5":col_5
        };
        data.push(obj);
    }
    return data;
}*/

//This newer version will save users with checked check boxes on the table
function getTableContent() {
    var data = [];
    var table = $('#machines_table tbody tr');
	var i = 0;
	$('.checkbox').each(function() {
		if(this.checked){
			var row = table.eq(i);
			var id = row.find('[name="id"]').val();
			var col_1 = row.find('[name="col_1"]').val();
			var col_2 = row.find('[name="col_2"]').val();
			var col_3 = row.find('[name="col_3"]').val();
			var col_4 = row.find('[name="col_4"]').val();
			var col_5 = row.find('[name="col_5"]').val();
			
			var obj = {
				"id":id,
				"col_1":col_1,
				"col_2":col_2,
				"col_3":col_3,
				"col_4":col_4,
				"col_5":col_5
			};
			data.push(obj);
		}
		i++;
	});
    return data;
}

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n) && n > 0;
}
function isValidInput(arr){
    for(var i in arr){
        var col_1 = arr[i].col_1;
        var col_2 = arr[i].col_2;
        var col_3 = arr[i].col_3;
        if(isNumber(col_1) || col_1 == ''){
            alert("First Name value: "+ col_1 +" must not be empty or numeric");
            return false;
        }
        if(isNumber(col_2) || col_2 == ''){
            alert("Last Name value: "+ col_2 +" must not be empty or numeric");
            return false;
        }
        if(!isEmail(col_3)){
            alert("Email value: "+ col_3 +" is not correct or empty");
            return false;
        }
    }
    return true;
}

</script>
<?php $this->load->view("template_footer"); ?>