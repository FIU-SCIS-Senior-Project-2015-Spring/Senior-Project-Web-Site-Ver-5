<?php $this->load->view("template_header"); ?>
<?php
    /*user clicks on Set Image Status button*/
    if(isset($change_status) && $change_status){
        
    echo("<div class=\"well\">");
    echo("<div class=\"text-center\">");
    
        echo form_open('projectcontroller/changeImageStatus', array(
                                                                    'class' => '',
                                                                    'id' => ''
                                                                    ));
                $data = array( 
                    'image_name' => $image_name
                    );
                echo form_hidden($data);
                echo('<h4> Image Name: '.$image_name.' </h4>');
                if($status === 'INACTIVE'){
                    echo('<h4>Image Status: <span class="label label-warning">'."$status".'</span></h4>');
                }
                if($status === 'ACTIVE'){
                     echo('<h4>Image Status: <span class="label label-success">'."$status".'</span></h4>');
                }
                    echo form_dropdown('status', 
                            array( 
                                'active' => 'ACTIVE', 
                                'inactive' => 'INACTIVE' ));
                echo( "<br>" );
                echo( "<br>" );
                echo form_submit(array(
                             'id' => 'btn',
                             'name' => 'accounts',
                             'type' => 'Submit',
                             'class' => 'btn btn-info',
                             'value' => 'Change Image Status'
                             ));
        echo form_close( );
    
    echo("</div>");
    echo("</div>");
    }
    else if(isset($delete_image) && $delete_image){
        echo ("delete the image");
    }
     
    
?>
<?php $this->load->view("template_footer"); ?>