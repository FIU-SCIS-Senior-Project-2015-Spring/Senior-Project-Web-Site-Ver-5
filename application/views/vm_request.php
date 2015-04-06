
<?php $this->load->view("template_header"); ?>

<h3> Virtual Machine Request </h3>
<br>
<?php
    if (!isProfessor($this))
       echo("<h5> NOTE: Virtual machine request must be done by team, no individual request allow </h5>");
?>
<br>
<?php echo form_open('vm_request'); ?>
<div id="machines">
<div class="machine col-md-12">
    <table class="auto" id="machines_table" >
    <thead>
      <tr>
         <th>Image Name</th>
         <th>Memory RAM (gb)</th>
         <th>Storage (gb)</th>
         <th>Number of VM</th>
      </tr>
   </thead>
   <br>
    <tbody>
        <tr>
            <td>
                <select name="os">
                        <?php 
                            
                            foreach($active_images as $os)
                                echo '<option>'.$os->image_name.'</option>';
                        ?>
                </select>
            </td>
            <td>
                <select name="ram"> 
                        <option>1</option>
                        <option>2</option>
                        <option>4</option>
                        <option>8</option>
                        <option>12</option>
                        <option>16</option>
                        <option>32</option>
                </select>
            </td>
           <td>
                <select name="hdd">
                        <option>8</option>
                        <option>12</option>
                        <option>16</option>
                        <option>20</option>
                        <option>24</option>
                        <option>30</option>
                        <option>50</option>
                        <option>70</option>
                        <option>100</option>
                </select>
           </td>
           <td>
               <select name="qty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                </select>
           </td>
        </tr>
    </tbody>
</table>
</div>
</div>
<br>
<button id="addRequest" type="button" class="btn btn-info">Add Virtual Machine</button>
<button id="submitRequests" type="button" class="btn btn-primary pull-right">Submit</button>

<h4>Previous Requests</h4>
<table class="auto table">
    <thead>
        <tr>
            <th>Image Name</th>
            <th>Memory RAM</th>
            <th>Storage</th>
            <th>Number of VM</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requests as $request):?>
        <tr>
            <td><?php echo $request->OS;?></td>
            <td><?php echo $request->RAM;?></td>
            <td><?php echo $request->storage;?></td>
            <td><?php echo $request->numb_vm;?></td>
            <td><?php echo $request->status;?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<script>
$('#addRequest').click(function(){
    console.log("Clicked add request");
    var machines = $("#machines");
    var lastMachine = $("#machines .machine:last-child");
    machines.append($('<br>'));
    machines.append(lastMachine.clone());
});

$('#submitRequests').click(function(){
    console.log("Clicked submit");
    var data = getTableContent();
    console.log("machines: ");
    console.log(data);
    uploadMachines(data);
});
function uploadMachines(machineList){
    $.ajax({
        type: "POST",
        url: "./vm-request",
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
        var os = row.find('[name="os"]').val();
        var ram = row.find('[name="ram"]').val();
        var hdd = row.find('[name="hdd"]').val();
        var qty = row.find('[name="qty"]').val();
        var obj = {
            "os":os,
            "ram":ram,
            "hdd":hdd,
            "qty":qty
        };
        data.push(obj);
    }
    return data;
}
</script>
<?php echo form_close(); ?>
<?php $this->load->view("template_footer"); ?>