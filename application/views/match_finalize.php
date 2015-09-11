<!DOCTYPE html>



<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	
        <meta charset="UTF-8">
        <title></title>
	
		<script src ="../js/jquery-1.9.1.js"></script>
		<script src ="../js/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">


		<script>
		
					
		$(document).ready(function()
		{
				
		 
		/*$('#studentPop').click(function()
				{
				
				$("#popover").toggle();
					$("#popover2").toggle();
					$("#umsi").toggleClass("hidden");
					$("#umss").toggleClass("hidden");
					
					
				
				});*/
		 
		 
		
			

			 $( "div.pd3" ).hover(
			function() {
			$( this ).addClass( "sel" );
			}, function() {
			$( this ).removeClass( "sel" );
				});
				
			 
				/**/
				 $( "div.pd" ).hover(
			function() {
			$( this ).addClass( "sel" );
			}, function() {
			$( this ).removeClass( "sel" );
				});
				
					 $( "div.pd2" ).hover(
			function() {
			$( this ).addClass( "sel" );
			}, function() {
			$( this ).removeClass( "sel" );
			});
				
				//popover 1
				$('[data-toggle="unMatchedSkill"]').popover({
				trigger: 'click',
				html:true,  
				content: function() {
    return $(this).next(".uMs").html();
}
			});
			//popover 3 -skills in 
				$('[data-toggle="unMatchedInterest"]').popover({
				trigger: 'click',
				html:true,  
				content: function() {
				//alert($(this).attr("id"));
				return $(this).next(".uMi").html();
}
			});
			
			
			$('[data-toggle="fillProjStud"]').popover({
				trigger: 'click',
				html:true,  
				content: function() {
				return $(this).next(".fps").html();
}
			});
			//Filled project skills
			$('[data-toggle="fillProjSkill"]').popover({
				trigger: 'click',
				html:true, 
				content: function()
				{
					
					//return $(this).next(".studentData").html();
					return $(this).next(".sd").html();
				}
			});
				
			
			
			
			$('[data-toggle="fillProjStats"]').popover({
				trigger: 'click',
				html:true, 
				content: function()
				{	
					return $(this).next(".fpst").html();
				}
			});/**/
				$('[data-toggle="unfilledProjStats"]').popover({
				trigger: 'click',
				html:true, 
				content: function()
				{	//return "Raul";
					return $(this).next(".uPS").html();
				}
			});
			
			$('[data-toggle="unfilledProjSkill"]').popover({
				trigger: 'click',
				html:true, 
				content: function()
				{	//return "Raul";
					return $(this).next(".uPSk").html();
				}
			});
			
			$('[data-toggle="unfilledProjStud"]').popover({
				trigger: 'click',
				html:true, 
				content: function()
				{	//return "Raul";
					return $(this).next(".uPSt").html();
				}
			});
			

			//	$("#draggable").draggable();
			
		});
	
		</script>
    </head>
    <body>
        
        <style>
		
		.popover-title {
		color: blue;
		
		}
		
	
		#test
		{
			height: auto;
			width:auto;
			background-color: pink;
			display:none;
		}
		div.ss{
			display: none;
		}
		.uMs{
			display: none;
		}		
		.uMi{
			display: none;
		}	
		
		div.unMatchedstudentData{
                display: none;
            }
			div.sd{
				display: none;
			}
		
		.popover-content {
		background-color: #FFF5EE;
		border: black solid 4px;
		border-radius: 10px;
		}
		
		#inProj
		{
			display: none;
		}
		
		#lang:hover #inProj
		{
			display: block;
		}
		
		#skills-legend
		{
			display: none;
		}
		
		#skLeg:hover #skills-legend
		{
			display: block;
		}
		
		#interest-legend
		{
			display: none;
		}
		
		#siLeg:hover #interest-legend
		{
			display: block;
		}
		
		td{
			border: 1px solid black;
			vertical-align: top;
			text-align: center;
			}
			
            #on-hover{
                display: none;
            }
			
            #overflow:hover #on-hover{
                display: block;
            }
            table{
                table-layout: fixed;
            }
            div.studentData{
                display: none;
            }
			
			div.filled_stats{
                display: none;
            }
									
			.Button{
				margin:5px;
			}
			div.pd{
			background-color: #FFB6C1;
			cursor: pointer;
			margin: 1%;
			}
			
			div.pd2{
			background-color: #ADD8E6;
			cursor: pointer;
			margin: 1%;
			}
			
			div.pd3{
			 display: inline-block;
			background-color: #E6E6FA;
			cursor: pointer;
			margin: 1%;
			width:auto;
			height:auto;
			}
			#draggable{
			height: 120px;
			width: 120px;
			background: yellow;
			}
			
			.sel{
			border: black solid 2px;
			}
			.hidden>div {
    display:none;
}
.studinfo{
		display: none;
	}
	
					
        </style>
        <script>
		
		function MyFunction(u)
		{
			alert("u clicked me");
		}
		
		$(function() {
      $("#draggable").draggable();
});
		
		function toggleUnmacthedButtons(num)
		{
			if($("#popover"+num).css("display")!="none")
			{
				$("#popover"+num).css("display", "none")
			}
			else
			{
				$("#popover"+num).css("display", "block")
			}
			
			if($("#popover2"+num).css("display")!="none")
			{
				$("#popover2"+num).css("display", "none")
			}
			else
			{
				$("#popover2"+num).css("display", "block")
			}
		}
		
		function unMacthedStudFunction(obj){
                    
                    if($("div[class*=unMatchedstudentData][id="+ $(obj).attr("id") +"]").css("display") != "none"){
                        $("div[class*=unMatchedstudentData][id="+ $(obj).attr("id") +"]").css("display","none");
					
                    }
                    else{
                        $("div[class*=unMatchedstudentData][id="+ $(obj).attr("id") +"]").css("display","block");
					
                    }
                };
				  
				  
				function toggleProjectButtons(num)
				{
					if($("#buttons"+num).css("display")!="none")
					{
						$("#buttons"+num).css("display", "none")
					}
					else
					{
						$("#buttons"+num).css("display", "block")
					}
					
				}
				  
     
                function regionalStudFunction(obj){
                    
                    if($("div[class*=studentData][id="+ $(obj).attr("id") +"]").css("display") != "none"){
                        $("div[class*=studentData][id="+ $(obj).attr("id") +"]").css("display","none");
						
                    }
                    else{
                        $("div[class*=studentData][id="+ $(obj).attr("id") +"]").css("display","block");
						
                    }
                };
                
                function globalStudFunction(){
                    
                    if($("div[class*=studentData]").css("display") != "none"){
                        $("div[class*=studentData]").css("display","none");
                    }
                    else{
                        $("div[class*=studentData]").css("display","block");
                    }
                };
          
        </script>


        <?php $this->load->view("matchmaking_header");
       ?>
     <!--Note: "warning" to make red; "success" for green-->
     <h1>Match Results</h1>
     <h6>Below is the final match configuration for all projects please confirm to send to database.</h6>
    <!-- Note: When applicable green means the skill is fulfilled. Orange unfulfilled. Gray unnecessary (hover to reveal).-->
                  <?php
            echo form_open('match/saveMatchings');?>
     <button type="button" id="s" class="globalStud" onclick="globalStudFunction()">Show/Hide All Students</button><br>
     <table style="width: 1000px">
    <tr>
        <td> <h2>VIP Matching Final Details</h2>
            <b>Overall Match Data</b><br>
        Student Average Interest: <?php echo $VIPfinalMD->avgInterest;?><br>
        Average Total Skill Fulfillment: <?php echo $VIPfinalMD->avgTotalSkill;?>%<br>
        Student Average Fulfillment <?php echo $VIPfinalMD->avgAvgFulfillment;?>%<br>
        Total Overflow Skills: <?php echo $VIPfinalMD->totalOverflow;?></td>
    </tr>
	
       
     
     </table><br><br><br>
     
<table style="width: 1000px">
    <tr>
        <td> <h2>Other Projects Final Details</h2>
            <b>Overall Match Data</b><br>
        Student Average Interest: <?php echo $OtherMD->avgInterest;?><br>
        Average Total Skill Fulfillment: <?php echo $OtherMD->avgTotalSkill;?>%<br>
        Student Average Fulfillment <?php echo $OtherMD->avgAvgFulfillment;?>%<br>
        Total Overflow Skills: <?php echo $OtherMD->totalOverflow;?></td>
    </tr>
        <?php
        //$PLc = array_values($_SESSION['VIPs']);
        $OtherP = array_values($OtherP);
        for($i = 0; $i<count($OtherP); $i++){
            echo '<tr>';
            echo '<td>';
            echo '<h3>';
            echo $OtherP[$i]->name;
            echo '</h3>';
            echo '';
            echo '<b>Student Interest Average: </b>';
            echo $OtherP[$i]->calculateAvgInterest();
            echo '<br>';
            echo '<b>Skill Total Fulfillment: </b>';
            echo $OtherP[$i]->calculateTotalFulfillment();
            echo '%<br>';
            echo '<b>Student Average Fulfillment: </b>';
            echo $OtherP[$i]->calculateAvgFulfillment();
            echo '%<br>';
            echo '<b>Student Total Overflow Skills:</b>';
            echo $OtherP[$i]->calculateTotalOverflow();
            echo '<br>';
            echo '<b>Skill Fulfillment Data:</b><br>';
            foreach ($OtherP[$i]->fulfilledSkills as $s) {
                echo '<li class="label label-success skill">';
                echo $s;
                echo '</li>';
                echo ' ';
            }    
            foreach ($OtherP[$i]->missingSkills as $s) {
                echo '<li class="label label-warning skill">';
                echo $s;
                echo '</li>';
                echo ' ';
            }

            echo '<br><h5>Students Added:(';
            echo count($OtherP[$i]->desiredStudents);
            echo ' out of ';
            echo $OtherP[$i]->max;
            echo ')   <button type="button" id="s'.$i .'" class="regionalStud" onclick="regionalStudFunction(this)">Show/Hide Students</button></h5>';
            echo '<div id="s'.$i.'" class="studentData">';
            foreach($OtherP[$i]->desiredStudents as $s){
                echo '<h6>';
                echo $s->name;
                echo '</h6>';
                echo 'Interest: ';
                echo $s->scoreList[$OtherP[$i]->id];
                echo '<br>';
                echo '% of Project Skills Acheived: ';
                echo $OtherP[$i]->figureSkillContribution($s);
                echo '%<br>';
                echo 'Amount of overflow skills: ';
                echo count($s->overflowSkills);
                echo '<br>';
                echo 'Skill contribution:';
                echo '<br>';

                if(count($s->fufilledSkills)>0){
                    foreach ($s->fufilledSkills as $skill) {
                       echo '<li class="label label-success skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                   }
                   foreach ($s->missingSkills as $skill) {
                       echo '<li class="label label-warning skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                    }
               }
               else{
                   echo '<i>No Contribution</i><br>';
               }
               if(count($s->overflowSkills)>0){
                echo '<div id="overflow">';
                echo '<li class="label skill">Hover to reveal overflow skill</li>';
                echo '<div id="on-hover">';  
               }

               foreach ($s->overflowSkills as $skill) {
                   echo '<li class="label skill">';
                   echo $skill;
                   echo '</li>';
                   echo ' ';
               } 
               if(count($s->overflowSkills)>0){
               echo '</div>';
               echo '</div>';
               }

               echo '<br>';
            }
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
		
		<?php
		
			
			echo "<div id = 'test'>";
			echo "Test</br>";
	
			$unUsed_skills = array();//An array to hold all the skills of the still unmatched students.
			$assigned_skills = array();//An array to hold all the skills of the students already assigned.
			$missing_unfilled = array();//An array to hold the missing skills in unfilled projects
			$missing_filled = array();//An array to hold the missing skills in filled projects
			$needed_skills = array();
			$filled_skills =array();//fill the $missing_unfilled with missing skills not filled.
			$open_projects = array();//the Id's of projects still not at max capacity.
			$full_projects = array();//the Id's of projects at max capacity.
			$all_skills=array();//All skills needed across all projects.
			$filled_satisfied=array();//all skills that are satisfied in filled projects
			$unfilled_satisfied=array();//all skills that are satisfied in filled projects
				
		    
			function find_skills($VIPfinal,$unmatched,$OtherP, $skill)
			{
				//unmatched students
				for($i=0; $i<count($unmatched);$i++)
				{
					echo "<div class='label label-success skill'>";
						if(in_array($skill,$unmatched[$i]->skills))
						{
							echo $unmatched[$i]->name;
						}
					echo"</div><br>";
				}
							
				////in all VIP projects
				for($i=0;$i<count($VIPfinal);$i++)
				{
					foreach($VIPfinal[$i]->desiredStudents as $ds)
					{
						if(in_array($skill,$ds->skills))
						{
							echo $ds->name."<br>";
						}
					}
				}
				
				//non-vip projects
				for($i=0;$i<count($OtherP);$i++)
				{
					foreach($OtherP[$i]->desiredStudents as $ds)
					{
						if(in_array($skill,$ds->skills))
						{
							echo $ds->name." <br>";
						}
					}
				}
				
			}
			
			//find_skills($VIPfinal,$unmatched,$OtherP,"java");
			
			for($i = 0; $i<count($VIPfinal); $i++){
				
				if(count($VIPfinal[$i]->desiredStudents)!=$VIPfinal[$i]->max){
				
					foreach($VIPfinal[$i]->fulfilledSkills as $ffs)
					{
						if(!in_array($ffs,$unfilled_satisfied))
						{
							array_push($unfilled_satisfied,$ffs);
						}
					}
				}
						
					//}
			}
			
			
			
		
			
			for($i = 0; $i<count($VIPfinal); $i++){
				
				if(count($VIPfinal[$i]->desiredStudents)==$VIPfinal[$i]->max){
				
					foreach($VIPfinal[$i]->fulfilledSkills as $ffs)
					{
						if(!in_array($ffs,$filled_satisfied))
						{
							array_push($filled_satisfied,$ffs);
						}
					}
				}
						
					//}
			}
			
			
			
			
			
			for($i = 0; $i<count($VIPfinal); $i++){
				
					foreach($VIPfinal[$i]->skills as $psk)
					{
						if(!in_array($psk,$all_skills))
						{
							array_push($all_skills,$psk);
						}
					}
				}
								
					 function find_project($skill, $VIPfinal)
					{
						for($i=0;$i<count($VIPfinal);$i++)
						{
							if(in_array($skill,$VIPfinal[$i]->skills))
							{
								//echo $VIPfinal[$i]->name." ";
								echo $VIPfinal[$i]->id."<br>";
							}
						}
					}
					
				//	find_project('web development',$VIPfinal);
										
					
					function print_nice ($arr)
							{	
								for($i=0; $i<count($arr);$i++)
								{
									echo $arr[$i];
								}
							}		

			for($i = 0; $i<count($VIPfinal); $i++){
					if(count($VIPfinal[$i]->desiredStudents)!=$VIPfinal[$i]->max)
					{
						array_push($open_projects,$VIPfinal[$i]->id);
					}
					else
					{
						array_push($full_projects,$VIPfinal[$i]->id);
					}
						
					//}
			}
			
			
			//skills still needed in filled project.
			for($i = 0; $i<count($VIPfinal); $i++){
						if(count($VIPfinal[$i]->desiredStudents)==$VIPfinal[$i]->max){
						foreach ($VIPfinal[$i]->missingSkills as $s) 
							{
								if(!in_array($s,$missing_filled))
								array_push($missing_filled, $s);
							}
						}
					//}
			}
			for($i = 0; $i<count($VIPfinal); $i++){
						if(count($VIPfinal[$i]->desiredStudents)!=$VIPfinal[$i]->max){
						foreach ($VIPfinal[$i]->missingSkills as $s) 
							{
								if(!in_array($s,$missing_unfilled))
								array_push($missing_unfilled, $s);
							}
						}
					//}
			}
			

			echo "<br>";
			//create array for unmatched student skills.
			foreach($unmatched as $u)
			{
				
				for($i=0; $i<count($u->skills);$i++)
				{
					if(!in_array($u->skills[$i],$unUsed_skills))
					array_push($unUsed_skills, $u->skills[$i]);
				}
			}

				foreach($VIPfinal as $p)
				{
					foreach($p->desiredStudents as $ps)
					{
						
					
					for($i=0;$i<count($ps->skills);$i++)
						{
							
							if(!in_array($ps->skills[$i],$assigned_skills))
							{
								array_push($assigned_skills, $ps->skills[$i]);
							}
						}
					}
				}
			
				
				$link = mysqli_connect("localhost","root","","senior_project_website");
				// Check connection
				if (mysqli_connect_errno())
				  {
				  die ("Failed to connect to MySQL: " . mysqli_connect_error());
				  }
				  else
				  {
					echo "OK!<br>";
				  }
				  
				  $query="SELECT first_name, last_name, spw_user.id, spw_skill.name
						FROM spw_user 
						LEFT JOIN spw_skill_user ON spw_user.id =spw_skill_user.user
						LEFT JOIN spw_skill ON spw_skill.id = spw_skill_user.skill
						WHERE spw_skill.name = 'C#'";
				  
				  if($result = mysqli_query($link,$query))
				  {
					while($row = mysqli_fetch_array($result))
					{
						
						echo '<li class="label label-warning skill">';
						echo "<b>Name:</b> ".$row['first_name'].' ';
						echo $row['last_name'].' ';
						echo "<b>Student ID:</b> ".$row['id']." ";
						echo "<b>Skill: </b>".$row['name'].'<br>';
						echo"</li>";
						echo " ";
					}
				  }
				  else
				  {
					echo "nope!";
				  }
				  echo "<br><br>";
				
		  
		?>
		
</table><br>   
<table style="width: 1000px">
<tr>
	<td>
			<h3>Unmatched Students </h3>
						<?php
						if(count($unmatched) == 0){
							echo 'All students matched!';
						}
						else{
						/**/echo "<h5>".count($unmatched)." Students still not matched</h5>";
						
							for($i = 0; $i<count($unmatched); $i++)
							
							{
							
								echo "<div class = 'pd3'>";
								//echo $unmatched[$i]->id."<br>";
								echo '<button type="button" id="b'.$i.'" class="regionalStud btn btn-lg btn-info " onclick="unMacthedStudFunction(this); toggleUnmacthedButtons('.$i.')">'.$unmatched[$i]->id." ".$unmatched[$i]->name.'</button></h5>';
								
								echo '<span id = "popover2'.$i.'" 
										
										title="Information for '.$unmatched[$i]->name.'"class= "redButtons btn  btn-danger btn-lg pull-right"
										data-toggle="unMatchedInterest" data-placement="right">
										Interests
										</span>';
										echo "<div class = 'uMi'>";
									//$cnt = 0;
								
								echo "<h3><center>Interests</center></h3>";
								
								
							//Color coding them--IMPORTANT - Colors mix because not a 100 may be an authorized project, while a 90 is not.
							arsort($unmatched[$i]->scoreList);
							//foreach($unmatched[$i]->scoreList as $key=>&$value)
							//	{echo $key." ".$value."<br>";}
							
							 echo "<div id = 'siLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='interest-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Projects not yet filled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Projects already filled<br>";
														
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Unranked by student<br>";
																echo"<hr>";
																echo"<h6> <center>Project ID[Student score in brackets]</center></h6>";
													  echo"</div>";
													  echo "</div>";
													 // echo "<br><br>";
							
							
							
								foreach($unmatched[$i]->scoreList as $key=>&$value)
								{
									if ($value>0)//if it is positive in interest
									{
										if(in_array($key,$open_projects)){//if it is an open project
												
										echo '<li class="label label-success skill">';//it is green.
										echo"<a href='javascript:MyFunction();' title='".$unmatched[$i]->projList[$key]->name."\nStudent Rank: ".$value."\nHead Professor Rating: ".$unmatched[$i]->projList[$key]->score."'>".$key."[".$value."]</a>";
										echo '</li>';
										echo " ";
										}
										else if(in_array($key,$full_projects))//if it is a closed project.
										{
										echo '<li class="label label-warning skill ">';//it is orange
										echo"<a href='javascript:MyFunction();' title='".$unmatched[$i]->projList[$key]->name."\nStudent Rank: ".$value."\nHead Professor Rating: ".$unmatched[$i]->projList[$key]->score."'>".$key."[".$value."]</a>";
										echo '</li>';
										echo " ";
										}
									}
								}
								foreach($unmatched[$i]->scoreList as $key=>&$value)
								{
									if ($value<0)//if it is positive in interest
									{
										
										echo '<li class="label skill">';//it is grey
									    echo"<a href='javascript:MyFunction();' title='".$unmatched[$i]->projList[$key]->name."\nStudent Rank: ".$value."\nHead Professor Rating: ".$unmatched[$i]->projList[$key]->score."'>".$key."[".$value."]</a>";
									
								
							
										echo '</li>';
										echo " ";
										
									}	
								}
								
									
								
									
								echo "</div>";
								
								
								echo '<span id="popover'.$i.'" 
										
										title="Skills '.$unmatched[$i]->name.'"class= "redButtons btn  btn-danger btn-lg pull-right"
										data-toggle="unMatchedSkill" data-placement="left">
										Skills
										</span>';
								echo " ";
								echo "<div class = 'uMs'>";
											echo "<h3><center>Skills</center></h3>";
											
							  $um_skill_sort_query="SELECT spw_skill.name, count(spw_skill.name) AS skill_count
													FROM `spw_user` 
													LEFT JOIN `spw_skill_user` ON spw_user.id =spw_skill_user.user
													LEFT JOIN `spw_skill` ON spw_skill.id = spw_skill_user.skill
													LEFT JOIN `spw_skill_project` ON spw_skill.id = spw_skill_project.skill
													LEFT JOIN `spw_project` ON spw_project.id = spw_skill_project.project
													WHERE spw_user.id= ".$unmatched[$i]->id."
													GROUP BY spw_skill.name
													ORDER BY skill_count DESC";
										
													  echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Needed in open project<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Needed in full project<br>";
														echo '<li class="label label-info skill">';
																echo"Blue";
																echo"</li>";
																echo " Satisfied in open project<br>";
																
														echo '<li class="label label-important skill">';
																echo"Red";
																echo"</li>";
																echo " Satisfied in full project<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Uneeded in any project<br>";
																echo"<hr>";
													  echo"</div>";
													  echo "</div>";
													  //echo "<br><br>";
													  
													  
													if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	/*If student has skill needed in an unfilled project which is NOT satisfied, it is green.*/
															
															
															
															if(in_array(strtolower($row['name']),$missing_unfilled))
															{
																echo '<li class="label label-success skill">';
																echo strtolower($row['name'])."<br> ";
																echo "<div id = 'inProj'>";
																find_project(strtolower($row['name']),$VIPfinal);
																echo"</div>";
																echo"</li>";
																echo " ";
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													    
													if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															//if the skill is unsatisfied in a filled project, it is orange
															
															
															if(in_array(strtolower($row['name']),$missing_filled))
															{
																echo '<li class="label label-warning skill" id ="lang" >';
																echo strtolower($row['name'])."<br> ";
																echo "<div onclick='javascript:MyFunction();' id = 'inProj'>";
																
																//echo $str;
															find_project(strtolower($row['name']),$VIPfinal);
																/**/
																echo"</div>";
																
																echo"</li>";
																echo " ";
																
																
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													  
													  
													  if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															
															
															//strtolower($row['name'])
															if(in_array(strtolower($row['name']),$unfilled_satisfied))
															{
															//If skill is in an unfilled project, but satisfied by other students, it is blue
																echo '<div class="label label-primary skill">';
																echo strtolower($row['name'])."<br> ";
																
																echo "<div id = 'inProj'>";
																find_project(strtolower($row['name']),$VIPfinal);
																
																echo"</div>";
																echo " ";
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													  
													    if($skill_sort = mysqli_query($link,$um_skill_sort_query))
														{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															
															
															//strtolower($row['name'])
															if(in_array(strtolower($row['name']),$filled_satisfied))
															{
															
																echo '<div class="label label-Danger skill">';
																echo strtolower($row['name'])."<br> ";
																//echo $row['last_name'].' ';
																//echo "<b>Student ID:</b> ".$row['id']." ";
																//echo "<b>Skill: </b>".$row['name'].'<br>';
																echo "<div id = 'inProj'>";
																find_project(strtolower($row['name']),$VIPfinal);
																echo"</div>";
																
																echo " ";
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													  
													 
													  
													  if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															
															
															
															if(!in_array(strtolower($row['name']),$missing_unfilled)&& !in_array(strtolower($row['name']),$missing_filled) && $row['name']!=null)
															{
																echo '<li class="label  skill" id = "lang">';
																echo strtolower($row['name'])."<br> ";
																
																
																echo"</li>";
																echo " ";
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
								
								
								
										echo "</div>";
										echo ' ';
									
								
								echo '<div id="b'.$i.'" class="unMatchedstudentData">';
								echo "<h3><center>Skills</center></h3>";
								
								
								  			
													  echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Needed in open project<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Needed in full project<br>";
														echo '<li class="label label-info skill">';
																echo"Blue";
																echo"</li>";
																echo " Satisfied in open project<br>";
																
														echo '<li class="label label-important skill">';
																echo"Red";
																echo"</li>";
																echo " Satisfied in full project<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Uneeded in any project<br>";
																echo"<hr>";
													  echo"</div>";
													  echo "</div>";
												//	  echo "<br><br>";
													if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	/*If student has skill needed in an unfilled project which is NOT satisfied, it is green.*/
															
															
															
															if(in_array(strtolower($row['name']),$missing_unfilled))
															{
																echo '<li class="label label-success skill">';
																echo strtolower($row['name'])."<br> ";
																
																find_project(strtolower($row['name']),$VIPfinal);
																
																echo"</li>";
																echo " ";
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													    
													if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															//if the skill is unsatisfied in a filled project, it is orange
															
															
															if(in_array(strtolower($row['name']),$missing_filled))
															{
																echo '<li class="label label-warning skill" id ="lang">';
																echo strtolower($row['name'])."<br> ";
																echo "<div id = 'inProj' onclick='javascript:MyFunction();'>";
																
																//echo $str;
															find_project(strtolower($row['name']),$VIPfinal);
																/**/
																echo"</div>";
																echo"</li>";
																echo " ";
																
															}
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													  
													  
													  if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															
															
															//strtolower($row['name'])
															if(in_array(strtolower($row['name']),$unfilled_satisfied))
															{
															//If skill is in an unfilled project, but satisfied by other students, it is blue
																echo '<div class="label label-primary skill">';
																echo strtolower($row['name'])."<br> ";
																echo "<div id = 'inProj'>";
																
																//echo $str;
																find_project(strtolower($row['name']),$VIPfinal);
																/**/
																echo"</div>";
																echo"</div>";
																echo " ";
																
															}/**/
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													  
													    if($skill_sort = mysqli_query($link,$um_skill_sort_query))
														{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															
															
															//strtolower($row['name'])
															if(in_array(strtolower($row['name']),$filled_satisfied))
															{
															//If skill is in an unfilled project, but satisfied by other students, it is red
																echo '<div class="label label-Danger skill">';
																echo strtolower($row['name'])."<br> ";
																echo "<div id = 'inProj'>";
																
																//echo $str;
																find_project(strtolower($row['name']),$VIPfinal);
																/**/
																echo"</div>";
																echo"</div>";
																echo " ";
																
															}/**/
															//echo $row['name'];
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
													  
													  
													  
													  if($skill_sort = mysqli_query($link,$um_skill_sort_query))
													{
														while($row = mysqli_fetch_array($skill_sort))
														{	
															
															
															
															if(!in_array(strtolower($row['name']),$missing_unfilled)&& !in_array(strtolower($row['name']),$missing_filled)&& $row['name']!=null)
															{
																echo '<li class="label  skill">';
																echo strtolower($row['name'])."<br> ";
																
																echo"</li>";
																echo " ";
																
															}
															
														}
													  }
													  else
													  {
														echo "nope!";
													  }	
								
								
								
										
										echo ' ';
								
								echo "<h3><center>Interests</center></h3>";
															
								
								
								echo "<div id = 'siLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='interest-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Projects not yet filled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Projects already filled<br>";
														
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Unranked by student<br>";
																echo"<hr>";
																echo"<h6> <center>Project ID[Student score in brackets]</center></h6>";
													  echo"</div>";
													  echo "</div>";
												//	  echo "<br><br>";
								
								
								
								foreach($unmatched[$i]->scoreList as $key=>&$value)
								{
									if ($value>0)//if it is positive in interest
									{
										if(in_array($key,$open_projects)){//if it is an open project
												
										echo '<li class="label label-success skill">';//it is green.
										echo"<a href='javascript:MyFunction();' title='".$unmatched[$i]->projList[$key]->name."\nStudent Rank: ".$value."\nHead Professor Rating: ".$unmatched[$i]->projList[$key]->score."'>".$key."[".$value."]</a>";
										echo '</li>';
										echo " ";
										}
										else if(in_array($key,$full_projects))//if it is a closed project.
										{
										echo '<li class="label label-warning skill ">';//it is orange
										echo"<a href='javascript:MyFunction();' title='".$unmatched[$i]->projList[$key]->name."\nStudent Rank: ".$value."\nHead Professor Rating: ".$unmatched[$i]->projList[$key]->score."'>".$key."[".$value."]</a>";
										echo '</li>';
										echo " ";
										}
									}
								}
								foreach($unmatched[$i]->scoreList as $key=>&$value)
								{
									if ($value<0)//if it is positive in interest
									{
										
										echo '<li class="label skill">';//it is grey
									    echo"<a href='javascript:MyFunction();' title='".$unmatched[$i]->projList[$key]->name."\nStudent Rank: ".$value."\nHead Professor Rating: ".$unmatched[$i]->projList[$key]->score."'>".$key."[".$value."]</a>";
									
								
							
										echo '</li>';
										echo " ";
										
									}	
								}
							
								echo "</div>";
							
								echo '<br>';
								echo "</div>";
								
							}
							echo "</div>";
														
						}?>
			
	
	</td>
	
             <td>  
			 <h3>Projects Not Filled </h3>

<?php

		//find out how many projects still need students.
		$unfilled =0;
		for($i = 0; $i<count($VIPfinal); $i++){
		
			if(count($VIPfinal[$i]->desiredStudents)!=$VIPfinal[$i]->max){
			$unfilled++;
			}
		}
		if($unfilled == 0){
							echo 'All Projects filled!';
						}
						else{
		echo "<h5>". $unfilled." projects still need students</h5>";
		}
		
        
        
        for($i = 0; $i<count($VIPfinal); $i++){
		
		if(count($VIPfinal[$i]->desiredStudents)!=$VIPfinal[$i]->max){
           
			
			echo '<div class ="pd">';
			
			echo '<button type="button" id="s'.$i.'" class="regionalStud btn btn-lg btn-info" onclick="regionalStudFunction(this);toggleProjectButtons('.$i.')">'.$VIPfinal[$i]->id." ".$VIPfinal[$i]->name.'</button></h5>';
         
			echo '';
			
			echo" </br>";
					
			
			echo '<div id="buttons'.$i.'"class= "this_button" ";>';
			
			echo '<span id = "pop3" 
				
				title="Project information"
				class= "btn btn-lg btn-danger pull-left"
				data-toggle="unfilledProjStats" data-placement="left">
				Project Stats
				</span>';
			echo " ";
			
			echo '<div class="uPS hidden" >';
				echo '</br>';
				echo "<b>Head Professor's Rating: </b>".$VIPfinal[$i]->score."<br>";
				echo '<b>Student Interest Average: </b>';
				echo $VIPfinal[$i]->calculateAvgInterest();
				echo '<br>';
				echo '<b>Skill Total Fulfillment: </b>';
				echo $VIPfinal[$i]->calculateTotalFulfillment();
				echo '%<br>';
				echo '<b>Student Average Fulfillment: </b>';
				echo $VIPfinal[$i]->calculateAvgFulfillment();
				echo '%<br>';
				echo '<b>Student Total Overflow Skills:</b>';
				echo $VIPfinal[$i]->calculateTotalOverflow();
				echo '<br>';
			echo"</div>";
			echo " ";
			
			echo '<span id = "pop5" 
				
				title="Project information"
				class= "btn btn-lg btn-danger"
				data-toggle="unfilledProjSkill" data-placement="bottom">
				Project Skills
				</span>';
				
				echo "<div class ='uPSk hidden'>";
													 echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Skill is fulfilled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Skill is unfullfilled<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Skill is unnecessary<br>";
																
													  echo"</div>";
													  echo "</div>";
				
					echo '<br>';
					echo '<b>Skill Fulfillment Data:</b><br>';
					foreach ($VIPfinal[$i]->fulfilledSkills as $s) {
						echo '<li class="label label-success skill">';
						echo $s;
						echo '</li>';
						echo ' ';
					}    
					foreach ($VIPfinal[$i]->missingSkills as $s) {
						echo '<li class="label label-warning skill" id="lang">';
						echo $s;
						echo "<div  onclick='javascript:MyFunction();' id = 'inProj'>";
						find_skills($VIPfinal,$unmatched,$OtherP, $s);
							echo"</div>";
						echo '</li>';
						echo ' ';
					}
				echo "</div>";
				echo " ";
				echo '<span id = "pop5" 
				
				title="Project information"
				class= "btn btn-lg btn-danger pull-right"
				data-toggle="unfilledProjStud">
				Students
				</span>';
				echo "<div class ='uPSt hidden'>";
				
														echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Skill is fulfilled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Skill is unfullfilled<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Skill is unnecessary<br>";
																
													  echo"</div>";
													  echo "</div>";
				 echo '<br><h5>Students Added:(';
            echo count($VIPfinal[$i]->desiredStudents);
            echo ' out of ';
            echo $VIPfinal[$i]->max;
            echo ')   </h5>';
            
            foreach($VIPfinal[$i]->desiredStudents as $s){
                echo '<h6>';
                echo $s->name;
                echo '</h6>';
                echo 'Interest: ';
                echo $s->scoreList[$VIPfinal[$i]->id];
                echo '<br>';
                echo '% of Project Skills Acheived: ';
                echo $VIPfinal[$i]->figureSkillContribution($s);
                echo '%<br>';
                echo 'Amount of overflow skills: ';
                echo count($s->overflowSkills);
                echo '<br>';
                echo 'Skill contribution:';
                echo '<br>';

                if(count($s->fufilledSkills)>0){
                    foreach ($s->fufilledSkills as $skill) {
                       echo '<li class="label label-success skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                   }
                   foreach ($s->missingSkills as $skill) {
                       echo '<li class="label label-warning skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                    }
               }
               else{
                   echo '<i>No Contribution</i><br>';
               }
               if(count($s->overflowSkills)>0){
                echo '<div id="overflow">';
                echo '<li class="label skill">Hover to reveal overflow skill</li>';
                echo '<div id="on-hover">';  
               }

               foreach ($s->overflowSkills as $skill) {
                   echo '<li class="label skill">';
                   echo $skill;
                   echo '</li>';
                   echo ' ';
               } 
               if(count($s->overflowSkills)>0){
               echo '</div>';
               echo '</div>';
               }

               echo '<br>';
            }
				echo "</div>";
				echo"</div>";
				echo '<div id="s'.$i.'" class="studentData">';
			
			echo '</br>';
            echo "<b>Head Professor's Rating: </b>".$VIPfinal[$i]->score."<br>";
            echo '<b>Student Interest Average: </b>';
            echo $VIPfinal[$i]->calculateAvgInterest();
            echo '<br>';
            echo '<b>Skill Total Fulfillment: </b>';
            echo $VIPfinal[$i]->calculateTotalFulfillment();
            echo '%<br>';
            echo '<b>Student Average Fulfillment: </b>';
            echo $VIPfinal[$i]->calculateAvgFulfillment();
            echo '%<br>';
            echo '<b>Student Total Overflow Skills:</b>';
            echo $VIPfinal[$i]->calculateTotalOverflow();
            echo '<br>';
			
													 echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Skill is fulfilled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Skill is unfullfilled<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Skill is unnecessary<br>";
																
													  echo"</div>";
													  echo "</div>";
			
			
            echo '<b>Skill Fulfillment Data:</b><br>';
            foreach ($VIPfinal[$i]->fulfilledSkills as $s) {
                echo '<li class="label label-success skill">';
                echo $s;
                echo '</li>';
                echo ' ';
            }    
            foreach ($VIPfinal[$i]->missingSkills as $s) {
                echo '<li class="label label-warning skill" id="lang">';
                echo $s;
				echo "<div id = 'inProj'>";
					find_skills($VIPfinal,$unmatched,$OtherP, $s);
							echo"</div>";
                echo '</li>';
                echo ' ';
            }

            echo '<br><h5>Students Added:(';
            echo count($VIPfinal[$i]->desiredStudents);
            echo ' out of ';
            echo $VIPfinal[$i]->max;
            echo ')   </h5>';

            foreach($VIPfinal[$i]->desiredStudents as $s){
                echo '<h6>';
                echo $s->name;
                echo '</h6>';
                echo 'Interest: ';
                echo $s->scoreList[$VIPfinal[$i]->id];
                echo '<br>';
                echo '% of Project Skills Acheived: ';
                echo $VIPfinal[$i]->figureSkillContribution($s);
                echo '%<br>';
                echo 'Amount of overflow skills: ';
                echo count($s->overflowSkills);
                echo '<br>';
                echo 'Skill contribution:';
                echo '<br>';

                if(count($s->fufilledSkills)>0){
                    foreach ($s->fufilledSkills as $skill) {
                       echo '<li class="label label-success skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                   }
                   foreach ($s->missingSkills as $skill) {
                       echo '<li class="label label-warning skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                    }
               }
               else{
                   echo '<i>No Contribution</i><br>';
               }
               if(count($s->overflowSkills)>0){
                echo '<div id="overflow">';
                echo '<li class="label skill">Hover to reveal overflow skill</li>';
                echo '<div id="on-hover">';  
               }

               foreach ($s->overflowSkills as $skill) {
                   echo '<li class="label skill">';
                   echo $skill;
                   echo '</li>';
                   echo ' ';
               } 
               if(count($s->overflowSkills)>0){
               echo '</div>';
               echo '</div>';
               }

               echo '<br>';
            }
            echo '</div>';
         
			echo '</div>';
			 }
        }
		
		
        ?></td>
			
			<td>            
                 <h3>Projects Filled </h3>
				 
 <?php
 
			//counting filled projects
			$full =0;
			for($i = 0; $i<count($VIPfinal); $i++){
		
			if(count($VIPfinal[$i]->desiredStudents)==$VIPfinal[$i]->max){
				$full++;
			}
		}
		
							if($full == 0){
							echo 'All projects still unsatisfied';
							}
						else{
		echo "<h5>". $full." projects satisfied</h5>";
		}
		
		
 
 
        
        
        for($i = 0; $i<count($VIPfinal); $i++){
		
		if(count($VIPfinal[$i]->desiredStudents)==$VIPfinal[$i]->max){
            
			echo "<div class='pd2'>";
			
			echo '<button type="button" id="s'.$i.'" class="regionalStud btn btn-lg btn-info" onclick="regionalStudFunction(this);toggleProjectButtons('.$i.')">'.$VIPfinal[$i]->id." ".$VIPfinal[$i]->name.'</button></h5>';
			echo '<div id="buttons'.$i.'"class= "this_button" ";>';
          
				
				echo " ";
								
				echo '<span id = "pop2" 
				title="Project information"
				class= "btn btn-danger	 btn-lg pull-left"
				data-toggle="fillProjStats" data-placement="left">
				Project Stats
				</span>';
				echo '<div class = "fpst hidden">';
					echo "<b>Head Professor's Rating: </b>".$VIPfinal[$i]->score."<br>";
					echo '<b>Student Interest Average: </b>';
					echo $VIPfinal[$i]->calculateAvgInterest();
					echo '<br>';
					echo '<b>Skill Total Fulfillment: </b>';
					echo $VIPfinal[$i]->calculateTotalFulfillment();
					echo '%<br>';
					echo '<b>Student Average Fulfillment: </b>';
					echo $VIPfinal[$i]->calculateAvgFulfillment();
					echo '%<br>';
					echo '<b>Student Total Overflow Skills:</b>';
					echo $VIPfinal[$i]->calculateTotalOverflow();
					echo '<br>';
				echo"</div>";
				echo " ";
				
				
				
				echo '<span id = "pop" 
				
				title="Project information"
				class= "btn btn-danger	 btn-lg center"
				data-toggle="fillProjSkill" data-placement="bottom" >
				
				Project Skills
				</span>';
				
				echo '<div  class="sd">';
				
													  echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Skill is fulfilled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Skill is unfullfilled<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Skill is unnecessary<br>";
																
													  echo"</div>";
													  echo "</div>";
				
						
            echo '<b>Skill Fulfillment Data:</b><br>';
					foreach ($VIPfinal[$i]->fulfilledSkills as $s) {
						echo '<li class="label label-success skill">';
						echo $s;
						echo '</li>';
						echo ' ';
					}    
					
			
					
					foreach ($VIPfinal[$i]->missingSkills as $s) {
						
						if(in_array($s,$unUsed_skills)|| in_array($s,$assigned_skills))
						{
						
						
							echo '<li class="label label-warning skill " id ="lang">';
							echo $s;
							echo "<div id = 'inProj' onclick='javascript:MyFunction();' >";
									find_skills($VIPfinal,$unmatched,$OtherP, $s);
							echo"</div>";
							echo '</li>';
							echo ' ';
						}
					}
					foreach ($VIPfinal[$i]->missingSkills as $s) {
						if(!in_array($s,$unUsed_skills)&& !in_array($s,$assigned_skills))
						{
							 echo '<li class="label skill">';
							echo $s;
							echo '</li>';
							echo ' ';
						}
					
					}
			echo"</div>";
			
				echo '<span id = "pop1"  
				
				title="Project information"
				class= "btn btn-danger	 btn-lg pull-right"
				data-toggle="fillProjStud" data-placement="right">
				Students
				</span>';
			echo '<div class ="fps hidden">';
													  echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Skill is fulfilled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Skill is unfullfilled<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Skill is unnecessary<br>";
																
													  echo"</div>";
													  echo "</div>";
			echo '<br><h5>Students Added:(';
            echo count($VIPfinal[$i]->desiredStudents);
            echo ' out of ';
            echo $VIPfinal[$i]->max;
            echo ')  </h5>';
            
            foreach($VIPfinal[$i]->desiredStudents as $s){
                echo '<h6>';
                echo $s->name;
                echo '</h6>';
                echo 'Interest: ';
                echo $s->scoreList[$VIPfinal[$i]->id];
                echo '<br>';
                echo '% of Project Skills Acheived: ';
                echo $VIPfinal[$i]->figureSkillContribution($s);
                echo '%<br>';
                echo 'Amount of overflow skills: ';
                echo count($s->overflowSkills);
                echo '<br>';
                echo 'Skill contribution:';
				echo '<br>';

                if(count($s->fufilledSkills)>0){
                    foreach ($s->fufilledSkills as $skill) {
                       echo '<li class="label label-success skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                   }
				   
				   foreach ($s->missingSkills as $skill) {
							
							echo '<li class="label label-warning skill">';
							echo $skill;
							echo '</li>';
							echo ' ';
						
					}
				 
               }
               else{
                   echo '<i>No Contribution</i><br>';
               }
               if(count($s->overflowSkills)>0){
                echo '<div id="overflow">';
                echo '<li class="label skill">Hover to reveal overflow skill</li>';
                echo '<div id="on-hover">';  
               }


				foreach ($s->overflowSkills as $skill) {
                   if(in_array($skill, $needed_skills))
				   {
					echo '<li class="label-info skill">';
                   echo $skill;
                   echo '</li>';
				   echo ' ';
				   }
               }
				foreach ($s->overflowSkills as $skill) {
                   if(!in_array($skill, $needed_skills))
				   {
					echo '<li class="label skill">';
                   echo $skill;
                   echo '</li>';
				   echo ' ';
				   }
               }
               if(count($s->overflowSkills)>0){
               echo '</div>';
               echo '</div>';
               }

               echo '<br>';
            }
            echo '</div>';
				echo '</div>';
				
			echo '<div id="s'.$i.'" class="studentData">';
			echo '</br>';
			echo '';
			
	        echo "<b>Head Professor's Rating: </b>".$VIPfinal[$i]->score."<br>";
            echo '<b>Student Interest Average: </b>';
            echo $VIPfinal[$i]->calculateAvgInterest();
            echo '<br>';
            echo '<b>Skill Total Fulfillment: </b>';
            echo $VIPfinal[$i]->calculateTotalFulfillment();
            echo '%<br>';
            echo '<b>Student Average Fulfillment: </b>';
            echo $VIPfinal[$i]->calculateAvgFulfillment();
            echo '%<br>';
            echo '<b>Student Total Overflow Skills:</b>';
            echo $VIPfinal[$i]->calculateTotalOverflow();
            echo '<br>';
            echo '<b>Skill Fulfillment Data:</b><br>';
			
													  echo "<div id = 'skLeg'>";
													  echo "<li class='label label-info skill'>Hover for explanation of colors</li>";
													  
													  echo"<div id ='skills-legend'>";
													  
													  
													  echo '<li class="label label-success skill">';
																echo"Green";
																echo"</li>";
																echo " Skill is fulfilled<br>";
														echo '<li class="label label-warning skill">';
																echo"Orange";
																echo"</li>";
																echo " Skill is unfullfilled<br>";
														echo '<li class="label skill">';
																echo"Grey";
																echo"</li>";
																echo " Skill is unnecessary<br>";
																
													  echo"</div>";
													  echo "</div>";
			
			
            echo '<b>Skill Fulfillment Data:</b><br>';
					foreach ($VIPfinal[$i]->fulfilledSkills as $s) {
						echo '<li class="label label-success skill">';
						echo $s;
						echo '</li>';
						echo ' ';
					}    
					
			
					
					foreach ($VIPfinal[$i]->missingSkills as $s) {
						
						if(in_array($s,$unUsed_skills)|| in_array($s,$assigned_skills))
						{
						
						
							echo '<li class="label label-warning skill" id ="lang">';
							echo $s;
							echo "<div onclick='javascript:MyFunction();' id = 'inProj'>";
									find_skills($VIPfinal,$unmatched,$OtherP, $s);
							echo"</div>";
							echo '</li>';
							echo ' ';
						}
					}
					foreach ($VIPfinal[$i]->missingSkills as $s) {
						if(!in_array($s,$unUsed_skills)&& !in_array($s,$assigned_skills))
						{
							 echo '<li class="label skill">';
							echo $s;
							echo '</li>';
							echo ' ';
						}
					
					}
         
			echo '<br><h5>Students Added:(';
            echo count($VIPfinal[$i]->desiredStudents);
            echo ' out of ';
            echo $VIPfinal[$i]->max;
            echo ')  </h5>';
            
            foreach($VIPfinal[$i]->desiredStudents as $s){
                echo '<h6>';
                echo $s->name;
                echo '</h6>';
                echo 'Interest: ';
                echo $s->scoreList[$VIPfinal[$i]->id];
                echo '<br>';
                echo '% of Project Skills Acheived: ';
                echo $VIPfinal[$i]->figureSkillContribution($s);
                echo '%<br>';
                echo 'Amount of overflow skills: ';
                echo count($s->overflowSkills);
                echo '<br>';
                echo 'Skill contribution:';
                echo '<br>';

                if(count($s->fufilledSkills)>0){
                    foreach ($s->fufilledSkills as $skill) {
                       echo '<li class="label label-success skill">';
                       echo $skill;
                       echo '</li>';
                       echo ' ';
                   }
				   
				   foreach ($s->missingSkills as $skill) {
							
							echo '<li class="label label-warning skill">';
							echo $skill;
							echo '</li>';
							echo ' ';
						
					}
				   
				   
				   
               }
               else{
                   echo '<i>No Contribution</i><br>';
               }
               if(count($s->overflowSkills)>0){
                echo '<div id="overflow">';
                echo '<li class="label skill">Hover to reveal overflow skill</li>';
                echo '<div id="on-hover">';  
               }

           			   
			   foreach ($s->overflowSkills as $skill) {
                   if(in_array($skill, $needed_skills))
				   {
					echo '<li class="label-info skill">';
                   echo $skill;
                   echo '</li>';
				   echo ' ';
				   }
               }
				foreach ($s->overflowSkills as $skill) {
                   if(!in_array($skill, $needed_skills))
				   {
					echo '<li class="label skill">';
                   echo $skill;
                   echo '</li>';
				   echo ' ';
				   }
               }
			   
               if(count($s->overflowSkills)>0){
               echo '</div>';
               echo '</div>';
               }

               echo '<br>';
            }
            echo '</div>';
         
			  
			echo"</div>";
			 }
        }
        ?>
              </td>
         
     </table>
<div id="alignForm">
	
        <?php
                echo form_submit(array(
                    'id' => 'save matchings',
                    'name' => 'save matchings',
                    'type' => 'Submit',
                    'class' => 'btn btn-primary btn-small pull-left Button',
                    'value' => 'Save Match Configuration',
                ));
				
               
                ?>
				<?php echo form_close() ?>
				 
			
				</div>
				

     <?php// $_SESSION['otherProjectState']= $_POST["OtherProject"];?>
    <?php $this->load->view("template_footer"); ?>
    </body>
</html>