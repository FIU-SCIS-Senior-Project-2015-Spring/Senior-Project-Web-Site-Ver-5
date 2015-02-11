<?php $this->load->view("template_header"); ?>
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
    //$html = generateSelect('os', $oses, $requests->OS); /*call statement*/
}
?>
-->
<h1> VMs requests </h1>
<div id="machines">
<div class="machine col-md-12">
<table class="auto table">
    <thead>
        <tr>
            <th>Request No.</th>
            <th>Operating System</th>
            <th>Memory RAM</th>
            <th>Storage</th>
            <th>Number of VM</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requests as $request):?>
        <tr>
            <td><?php echo $request->id;?></td>
            <td>
                <select name = "os" style="width: auto">
                <?php 
                    $oses = array(
                        'Windows Server 2008'=>0,
                        'Ubuntu Server'=>1,
                        'Windows Server 2003'=>2
                    );
                        
                        $os_i = 0; 
                        foreach($oses as $os=>$d){
                            $os_i++;
                            if($request->OS == $os)
                                echo'<option value ='.$os_i.' selected="selected">'.$os.'</option>';
                            else{
                             echo'<option value="'.$os_i.'">'.$os.'</option>';
                            }
                        }
                ?>
                </select>
            </td>
            <td>
                <select name = "ram" style="width: auto">
                <?php 
                    $rams = array(
                        2=>0,
                        4=>1,
                        8=>2,
                        12=>3,
                        16=>4
                    );
                    $i = 0; 
                        foreach($rams as $ram=>$d){
                            $i++;
                            if($request->RAM == $ram)
                                echo'<option value ='.$i.' selected="selected">'.$ram.'</option>';
                            else{
                             echo'<option value="'.$i.'">'.$ram.'</option>';
                            }
                        }
                ?>    
                </select>
            </td>
            <td>
                <select name="hdd" style="width: auto">
                <?php
                        $hdds = array(
                            8=>0,
                            12=>1,
                            16=>2,
                            20=>3,
                            24=>4,
                            30=>5
                        );
                        $i = 0; 
                            foreach($hdds as $hdd=>$d){
                                $i++;
                                if($request->numb_vm == $hdd)
                                    echo'<option value ='.$i.' selected="selected">'.$hdd.'</option>';
                                else{
                                 echo'<option value="'.$i.'">'.$hdd.'</option>';
                                }
                            }
                  ?>
                </select>
            </td>
            <td>
                <select name="qty" style="width: auto">
                    <?php
                        $vms = array(
                            1=>0,
                            2=>1,
                            3=>2,
                            4=>3,
                            5=>4,
                            6=>5,
                            7=>6,
                            8=>7,
                            9=>8
                        );
                        $i = 0; 
                            foreach($vms as $vm=>$d){
                                $i++;
                                if($request->storage == $vm)
                                    echo'<option value ='.$i.' selected="selected">'.$vm.'</option>';
                                else{
                                 echo'<option value="'.$i.'">'.$vm.'</option>';
                                }
                            }
                    ?>
                </select>
            </td>
            <td>
                <select name="status" style="width: auto">
                    <?php 
                    $status = array(
                            'PENDING'=>0,
                            'APPROVED'=>1,
                            'DENIED'=>2
                        );
                        $i = 0; 
                            foreach($status as $st=>$d){
                                $i++;
                                if($request->status == $st)
                                    echo'<option value ='.$i.' selected="selected">'.$st.'</option>';
                                else{
                                 echo'<option value="'.$i.'">'.$st.'</option>';
                                }
                            }
                    ?>
                </select>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</div>
<br>
<!--<button type="button" class="btn btn-primary pull-right">Submit </button>
<div class="form-group">
  <label for="usr">email address:</label>
  <input type="text" class="form-control" id="usr">
</div>-->
<label for="usr">email address:</label>
<input  type="text"/>
<button id="submitRequests" type="button" class="btn btn-default pull-right">Submit</button>

<?php $this->load->view("template_footer"); ?>

<!--
                <select>
                    <?php 
                            $oses = array(
                                "Windows Server 2008"=>1,
                                "Ubuntu Server"=>2,
                                "Windows Server 2003"=>3
                            );
                           $html = generateSelect('oses', $oses, $requests->OS);
                        ?>
                    
                <?php echo $request->OS;?>

    echo '<option value="'.$os.'"' ;
   if(in_array('Windows Server 2008', $oses))
       echo $requests->OS;
   else
       echo '>'.$os.'</option>';
                    
                </select>
-->
