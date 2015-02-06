
<?php $this->load->view("template_header"); ?>

<h2> Virtual Machine Resources page under development </h2>

<?php
    if (!isProfessor($this))
       echo("<h4> NOTE: Virtual machine request must be done by team, no individual requests allow </h4>");
?>



<div id="machines">
    <div class="machine col-md-12">
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
        
        <select name="role">
            <option>2</option>
            <option>4</option>
            <option>8</option>
            <option>12</option>
            <option>16</option>
        </select>
        
        <select name="role">
            <option>8</option>
            <option>12</option>
            <option>16</option>
            <option>20</option>
            <option>24</option>
            <option>30</option>
        </select>
        
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
    </div>
</div>
<br>

<button id="addRequest" type="button" class="btn btn-default">Add Another Request</button>
<button id="submit" type="button" class="btn btn-default">SUBMIT</button>

<script>
$('#addRequest').click(function(){
    console.log("Clicked add request");
    var machines = $("#machines");
    var lastMachine = $("#machines .machine:last-child");
    machines.append($('<br>'));
    machines.append(lastMachine.clone());
});
</script>
<?php $this->load->view("template_footer"); ?>