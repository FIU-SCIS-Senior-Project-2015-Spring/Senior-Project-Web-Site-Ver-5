<?php $this->load->view("template_header"); ?>
<!--
<td><input type="text" value="<?php echo $request->OS;?>"/></td>
<h2> Virtual Machine Resources page under development </h2>
-->
<table class="auto" >
    <thead>
      <tr>
         <th>Operating System</th>
         <th>Memory RAM</th>
         <th>Storage</th>
         <th>Number of VM</th>
      </tr>
   </thead>
   <br>
    <tbody>
        <tr>
            <td>
                <select name="role">
                        <?php 
                            $oses = array(
                                "Windows Server 2008",
                                "Ubuntu Server",
                                "Windows Server 2003"
                            );
                            foreach($oses as $os)
                                echo '<option>'.$os.'</option>';
                        ?>
                </select>
            </td>
            <td>
                <select name="role" 
                        <option>2</option>
                        <option>4</option>
                        <option>8</option>
                        <option>12</option>
                        <option>16</option>
                </select>
            </td>
           <td>
                <select name="role">
                        <option>8</option>
                        <option>12</option>
                        <option>16</option>
                        <option>20</option>
                        <option>24</option>
                        <option>30</option>
                </select>
           </td>
           <td>
               <select name="role">
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
<h4>Previous Requests</h4>
<table class="auto table">
    <thead>
        <tr>
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
            <td><?php echo $request->OS;?></td>
            <td><?php echo $request->RAM;?></td>
            <td><?php echo $request->storage;?></td>
            <td><?php echo $request->numb_vm;?></td>
            <td><?php echo $request->status;?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php $this->load->view("template_footer"); ?>

