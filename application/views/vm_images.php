<?php $this->load->view("template_header"); ?>



<?php
  echo form_open('projectcontroller/addImages', array(
                                                  'class' => '',
                                                  'id' => 'registration_form'
                                                  ));
  ?>
<div class="well">
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
    <h4> Filter Images Names </h4>
    
<?php
	echo( "<div style='margin-left: -10px'>" );
	echo form_checkbox( array(
                                'name' => 'all_images',
                                'id' => 'all_images',
                                'value' => 'all_images',
                                'checked' => FALSE,
                                'style' => 'margin: 10px' ) );
	echo( "All Images" );
	echo( "</div>" );
	echo( "<div style='margin: -10px'>" );
	echo form_checkbox( array( 
                                'name' => 'active',
                                'id' => 'status_active',
                                'value' => 'active',
                                'checked' => FALSE,
                                'style' => 'margin: 10px' ) );
	echo( "Status: ACTIVE" );
	echo( "</div>" );
	echo( "<div style='margin: -10px'>" );
	echo form_checkbox( array( 
                                'name' => 'inactive',
                                'id' => 'status_inactive',
                                'value' => 'inactive',
                                'checked' => FALSE,
                                'style' => 'margin: 10px' ) );
	echo( "Status: INACTIVE" );
	echo( "</div>" );

	echo( "<br>" );
	echo form_submit(array(
           'id' => 'btn',
           'name' => 'search',
           'type' => 'Submit',
           'class' => 'btn btn-info',
           'value' => 'Search Filtered Images'
       ));
        echo form_close();
        ?>
</div>
</div>    
    
<table>
<?php
        echo( "<br>" );
        $image = "";
        $status = "";
         foreach($images as $row){
             $image = $row->image_name;
             $status = $row->status;
             
             echo("<div class=\"well\">");
             echo("<div class=\"text-center\">");
                    
               
               echo('<h4> Image Name: '.$image.' </h4>');
               if($status === 'INACTIVE'){
                    echo('<h4>Image Status: <span class="label label-warning">'."$status".'</span></h4>');
               }
               if($status === 'ACTIVE'){
                    echo('<h4>Image Status: <span class="label label-success">'."$status".'</span></h4>');
               }
                
                echo("</div>");
                echo("</div>");
         }
?>
    </table>
</div>    
    

<?php $this->load->view("template_footer"); ?>