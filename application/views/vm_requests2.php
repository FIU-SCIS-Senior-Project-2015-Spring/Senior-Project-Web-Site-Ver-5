<?php $this->load->view("template_header"); ?>
<h3>Virtual Machine Request Page</h3>

<?php
    $oses = array();
    foreach($active_images as $r){
    $oses[] = $r->image_name;}
?>
<br>

<div id="machines">
<div class="machine col-md-12">

<table class="table table-bordered" id="machines_table">
    <thead>
        <tr>
            <th>
                <input id="image" class="input-medium text-filter" type="text" value="<?php echo $image ?>">
            </th>
            <th>
                <select class="field-custom dropdown" id="ram">
                   <?php 
                    $rams = array(
                        'ALL RAM',1,2,4,8,12,16,32
                    );
                        foreach($rams as $r){
                            if($ram == $r){
                                echo'<option selected="selected">'.$r.'</option>';
                            }else{
                             echo'<option>'.$r.'</option>';
                            }
                        }
                ?> 
                </select>
            </th>
            <th>
                <select class="field-custom dropdown" id="storage">
   
                <?php
                        $hdds = array(
                            'ALL STORAGE',8,12,16,20,24,30,50,70,100
                        );
                        
                            foreach($hdds as $hdd){
                                if($storage == $hdd)
                                    echo'<option selected="selected">'.$hdd.'</option>';
                                else{
                                 echo'<option>'.$hdd.'</option>';
                                }
                            }
                  ?>
                </select>
            </th>
            <th>
                <select class="field-custom dropdown" id="qty">
                    <?php
                        $gtys = array(
                            'ALL VMs',1,2,3,4,5,6,7,8,9
                        );
                        
                            foreach($gtys as $r){
                               if($qty == $r)
                                    echo'<option selected="selected">'.$r.'</option>';
                                else{
                                 echo'<option>'.$r.'</option>';
                                }
                            }
                    ?>
                </select>
            </th>
            <th>
                <select class="field-custom dropdown" id="status">
                  <?php echo '<option '.($status==='ALL STATUS'?'selected="selected"':'').' value="ALL STATUS">ALL STATUS</option>'; ?>
                  <?php echo '<option '.($status==='APPROVED'?'selected="selected"':'').' value="APPROVED">APPROVED</option>'; ?>
                  <?php echo '<option '.($status==='PENDING'?'selected="selected"':'').'value="PENDING">PENDING</option>'; ?>
                  <?php echo '<option '.($status==='DENIED'?'selected="selected"':'').' value="DENIED">DENIED</option>'; ?>
                </select>
            </th>
            <th>
                <input id="name" class="input-small text-filter" type="text" value="<?php echo $name ?>">
            </th>
            <th>
                <input id="term" class="input-small text-filter" type="text" value="<?php echo $term ?>">
            </th>
        </tr>


        <tr>
            <th style="display:none;">Request No.</th>
            <th>Image Name</th>
            <th>Memory RAM (gb)</th>
            <th>Storage (gb)</th>
            <th>Number of VM</th>
            <th>Status</th>
            <th>Full Name</th>
            <th>Term</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requests as $request):?>
        <tr>
            <td style="display:none;">
                <select class="field-custom" name="key">
                <?php 
                   echo '<option>'.$request->id.'</option>'
                ?>
                </select>
            </td>
            <td>
                <select class="field-custom" name="os">
                <?php 
                        foreach($oses as $os){
                            if($request->OS === $os)
                                echo'<option selected="selected">'.$os.'</option>';
                            else{
                             echo'<option>'.$os.'</option>';
                            }
                        }
                ?>
                </select>
            </td>
            <td>
                <select class="field-custom" name="ram">
                <?php 
                    $rams = array(
                        1,
                        2,
                        4,
                        8,
                        12,
                        16,
                        32
                    );
                    
                        foreach($rams as $ram){
                            if($request->RAM == $ram)
                                echo'<option selected="selected">'.$ram.'</option>';
                            else{
                             echo'<option>'.$ram.'</option>';
                            }
                        }
                ?>    
                </select>
            </td>
            <td>
                <select class="field-custom" name="hdd">
                <?php
                        $hdds = array(
                            8,
                            12,
                            16,
                            20,
                            24,
                            30,
                            50,
                            70,
                            100
                        );
                        
                            foreach($hdds as $hdd){
                                if($request->storage == $hdd)
                                    echo'<option selected="selected">'.$hdd.'</option>';
                                else{
                                 echo'<option>'.$hdd.'</option>';
                                }
                            }
                  ?>
                </select>
            </td>
            <td>
                <select class="field-custom" name="qty">
                    <?php
                        $gtys = array(
                            1,
                            2,
                            3,
                            4,
                            5,
                            6,
                            7,
                            8,
                            9
                        );
                        
                            foreach($gtys as $qty){
                                if($request->numb_vm == $qty)
                                    echo'<option selected="selected">'.$qty.'</option>';
                                else{
                                 echo'<option>'.$qty.'</option>';
                                }
                            }
                    ?>
                </select>
            </td>
            <td>
                <select class="field-custom" name="status">
                    <?php 
                    $status = array(
                            'PENDING',
                            'APPROVED',
                            'DENIED'
                        );
                        
                            foreach($status as $st){
                                if($request->status == $st)
                                    echo'<option value ='.$st.' selected="selected">'.$st.'</option>';
                                else{
                                 echo'<option value="'.$st.'">'.$st.'</option>';
                                }
                            }
                    ?>
                </select>
            </td>
            <!-- COLUMN #6 & #7 -->
            <td>
                <?php echo $request->student_name ?>
            </td>
            <td>
                <?php echo $request->term ?>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<label for="usr">Default email of <?php echo $name_default ?></label>
<input  type="text" id="email_address" value=<?php echo $email_address ?> class="form-control"/>
<button id="submitRequests" type="button" class="btn btn-primary pull-right">Submit</button>
</div>
<br>
<script>
function filterForm(){
   
    var ram = $('#ram').val();
    var storage = $('#storage').val();
    var qty = $('#qty').val();
    var status = $('#status').val();
    var image = $("#image").val();
    var name = $("#name").val();
    var term = $("#term").val();
    
    var whereto = "./vm-requests?";
    
    if(image!=='') whereto+="image="+image+"&";
    if(status!=='') whereto+="status="+status+"&";
    if(ram!=='') whereto+="ram="+ram+"&";
    if(storage!=='') whereto+="storage="+storage+"&";
    if(qty!=='') whereto+="qty="+qty+"&";
    if(name!=='') whereto+="name="+name+"&";
    if(term!=='') whereto+="term="+term+"&";
//    if(term!=='') whereto+="term="+term+"&";
    var lastChar = whereto.charAt(whereto.length-1);
    console.log("last char: "+lastChar);
    if(lastChar==='&'){
        console.log("in here");
        whereto = whereto.substring(0,whereto.length-1);
    }
    console.log(whereto);
    window.location.href = whereto;
}

$('.text-filter').keyup(function(e){
    if(e.keyCode == 13)
    {
        filterForm();
    }
});

$(".dropdown" ).change(function() {
    filterForm();
});

$('#submitRequests').click(function(){
    console.log("Clicked submit");
    var data = getTableContent();
    console.log("machines: ");
    console.log(data);
    var john_email = $("#email_address").val();
    if(isEmail(john_email)){
        uploadMachines(data,john_email);
    }
    else 
        alert("Incorrect email");
});

function uploadMachines(machineList,email){
    var url = "./vm-requests?email_address="+email;
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

function getTableContent() {
    var data = [];
    var table = $('#machines_table tbody tr');
    for(var i = 0 ; i< table.length;i++){
        var row = table.eq(i);
        var key = row.find('[name="key"]').val();
        var os = row.find('[name="os"]').val();
        var ram = row.find('[name="ram"]').val();
        var hdd = row.find('[name="hdd"]').val();
        var qty = row.find('[name="qty"]').val();
        var status = row.find('[name="status"]').val();
        var obj = {
            "key":key,
            "os":os,
            "ram":ram,
            "hdd":hdd,
            "qty":qty,
            "status":status
        };
        data.push(obj);
    }
    return data;
}

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
<?php $this->load->view("template_footer"); ?>




<!--
<?php 
    function generateSelect($name = '', $options = array(), $default = '') {
    $html = '<select name="'.$name.'">';
    foreach ($options as $option => $value) {
        if ($option == $default) {
            $html .= '<option value='.$value.' selected="selected">'.$option.'</option>';
        } else {
            $html .= '<option value='.$value.'>'.$option.'</option>';
        }
    }

    $html .= '</select>';
    return $html;
    $html = generateSelect('os', $oses, $request->OS); /*call statement*/
}
?>
-->
