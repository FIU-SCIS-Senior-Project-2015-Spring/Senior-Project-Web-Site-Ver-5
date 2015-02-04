
<?php $this->load->view("template_header"); ?>

<h2> Virtual Machine Resources page under development </h2>

<?php
    if (isUserLoggedIn($this))
    {
        if (!isProfessor($this))
           echo("<h4> NOTE: Virtual machine request must be done by team, no individual requests allow </h4>");
    }
?>

<?php $this->load->view("template_footer"); ?>