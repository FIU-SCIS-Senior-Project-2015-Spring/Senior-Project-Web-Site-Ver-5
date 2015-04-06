<?php $this->load->view("template_header"); ?>



<?php
  echo form_open('projectcontroller/addImages', array(
                                                  'class' => '',
                                                  'id' => 'registration_form'
                                                  ));
  ?>
<div class="well" style=" margin-top: 20px;">
<div class="text-center">
    <h4> Add New Image Name </h4>
</div>
<?php
    echo("<div>");
    echo form_label('Image Name:');
    echo form_input(array(
                        'id' => 'image_name',
                        'name' => 'image_name',
                        'type' => 'text',
                        'placeholder' => 'Image Name',
                        'required' => '',
                        'title' => 'Image Name'
                        ));
    echo("</div>");
    echo("<div>");
    echo form_submit(array(
        'id' => 'btn',
        'name' => 'min',
        'type' => 'Submit',
        'class' => 'btn btn-info',
        'value' => 'Add Image Name'
    ));
    echo("</div>");

echo form_close();
?>
</div>



<div class="well" > 
 
<br>
    <table class="table table-bordered vm-img-table" id="image_table">
        <thead>
        <tr>
            <th>      
                <input id="image" class="input-medium text-filter" type="text" value="<?php echo $image ?>">
            </th>
            <th>  
               <select class="field-custom dropdown" id="status">
                  <?php echo '<option '.($status==='ALL STATUS'?'selected="selected"':'').' value="ALL STATUS">ALL STATUS</option>'; ?>
                  <?php echo '<option '.($status==='ACTIVE'?'selected="selected"':'').' value="ACTIVE">ACTIVE</option>'; ?>
                  <?php echo '<option '.($status==='INACTIVE'?'selected="selected"':'').'value="INACTIVE">INACTIVE</option>'; ?>
                </select>
            </th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th style="text-align:center"> IMAGE NAME </th>
            <th style="text-align:center"> IMAGE STATUS </th>
            <th style="text-align:center"> CHANGE STATUS </th>
            <th style="text-align:center"> DELETE IMAGE </th>
            <th style="text-align:center"> EDIT IMAGE </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($results as $row):?>
        <tr>
            <td style="text-align:center">
                    <?php echo $row->image_name; ?>
            </td>
            <td style="text-align:center"> 
                    <?php echo $row->status; ?>
            </td>
            <td style="text-align:center">
            <?php
                if($row->status == 'ACTIVE'){
                    echo("<a href=".base_url('./vm-images/status?status='.$row->status.
                            "&image_name=".urlencode($row->image_name)).
                            "> <img id=\"\" src=".base_url('img/green_light.png')." height=\"20\" width=\"20\" > </a>");
                }else{
                    echo("<a href=".base_url('./vm-images/status?status='.$row->status.
                            "&image_name=".urlencode($row->image_name)).
                            "> <img id=\"\" src=".base_url('img/red_light.png')." height=\"20\" width=\"20\" > </a>");
                }
            ?>    
            </td>
            <td style="text-align:center">
            <?php
                    $msg = "Are you sure you want to delete image $row->image_name ?";
                    echo("<a href=".base_url('./vm-images/delete?image_name='.
                            urlencode($row->image_name))." onclick=\"return confirm('$msg')\"> <img id=\"\" src=".
                            base_url('img/deletered.png')." height=\"20\" width=\"20\" > </a>");
            ?>
            </td>
            <td style="text-align:center">
            <?php
                    echo("<a href=".base_url('./vm-images/edit?status='.$row->status.
                            "&image_name=".urlencode($row->image_name)).
                            "> <img id=\"\" src=".base_url('img/write.png')." height=\"20\" width=\"20\" > </a>");
            ?>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
</div>    
<script>
function filterForm(){

    var status = $('#status').val();
    var image = $("#image").val();
    
    var whereto = "./vm-images?";
    
    if(image!=='') whereto+="image="+image+"&";
    if(status!=='') whereto+="status="+status+"&";

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
</script>   

<?php $this->load->view("template_footer"); ?>