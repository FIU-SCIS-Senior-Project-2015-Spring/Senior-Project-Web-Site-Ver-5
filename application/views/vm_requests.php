<?php $this->load->view("template_header"); ?>

<h1> VMs requests </h1>
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
            <td>
                <select>
                <?php echo $request->OS;?>
                </select>
            </td>
            <td><?php echo $request->RAM;?></td>
            <td><?php echo $request->storage;?></td>
            <td><?php echo $request->numb_vm;?></td>
            <td><?php echo $request->status;?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php $this->load->view("template_footer"); ?>

