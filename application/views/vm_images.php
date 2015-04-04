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

<?php
echo form_open('projectcontroller/filterImages', array(
                                                  'class' => '',
                                                  'id' => ''
                                                  ));
  ?>

<div class="well" > 
<div class="well" style=" margin-top: 20px; margin-bottom: 10px;">
<div class="subsection" >
    <h4> Filter Image Names </h4>
    
<?php
	echo( "<div>" );

        echo( "<br>" );
        echo form_dropdown( 'id', 
                array( 'all_images' => 'All Images', 
                       'active' => 'ACTIVE',
                       'inactive' => 'INACTIVE'),'id');
        echo("<br>");
        echo("<br>");
        echo form_input(array(
                      'id' => 'image_name',
                      'name' => 'image_name',
                      'type' => 'text',
                      'placeholder' => 'Image Name',
                      'style' => "margin-left: 1px; margin-right: 5px",
                      'title' => 'Image Name'
                      ));
        
	

	echo( "<br>" );
	echo form_submit(array(
           'id' => 'btn',
           'name' => 'search',
           'type' => 'Submit',
           'class' => 'btn btn-info',
           'value' => 'Search Filtered Images'
        ));
        echo( "</div>" );
echo form_close();
        ?>

</div>
</div>    
<?php
        $image = "";
        $status = "";
        echo( "<br>" );
        echo("<table id=\"images\" class=\"table table-bordered\">");
        echo("<tr>");
            echo("<th style=\"text-align:center\"> IMAGE NAME </th>");
            echo("<th style=\"text-align:center\"> IMAGE STATUS </th>");
            echo("<th style=\"text-align:center\"> CHANGE IMAGE STATUS </th>");
            echo("<th style=\"text-align:center\"> DELETE IMAGE </th>");
        echo("</tr>");
        
        foreach($images as $row){
            echo("<tr>");
                        
            $image = $row->image_name;
            $status = $row->status;
            echo("<td style=\"text-align:center\">"); 
                    echo $image ;
            echo("</td>");
            echo("<td style=\"text-align:center\">"); 
                    echo $status;
            echo("</td>");
            echo("<td style=\"text-align:center\">");
                if($status == 'ACTIVE'){
                    echo("<a href=".base_url('./vm-images/status?status='.$status.
                            "&image_name=".urlencode($image)).
                            "> <img id=\"\" src=".base_url('img/green_light.png')." height=\"20\" width=\"20\" > </a>");
                }else{
                    echo("<a href=".base_url('./vm-images/status?status='.$status.
                            "&image_name=".urlencode($image)).
                            "> <img id=\"\" src=".base_url('img/red_light.png')." height=\"20\" width=\"20\" > </a>");
                }
            echo("</td>");
            echo("<td style=\"text-align:center\">"); 
                    $msg = "Are you sure you want to delete image $image ?";
                    echo("<a href=".base_url('./vm-images/delete?image_name='.
                            urlencode($image))." onclick=\"return confirm('$msg')\"> <img id=\"\" src=".
                            base_url('img/deletered.png')." height=\"20\" width=\"20\" > </a>");
            echo("</td>");
            
            echo("</tr>");
        }
        
        echo("</table>");
        
?>  
</div>    
<script language="javascript" type="text/javascript">  
//<![CDATA[  
    var tf1 = setFilterGrid("images");  
//]]>  
</script>   

<?php $this->load->view("template_footer"); ?>