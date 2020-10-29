<?php
session_start($conn);

  ob_start();
	    $servername = "mysql.portfolio.harmonyschool.org";
        $username = "prog_db_user";
        $password = "markrocks14";
        $dbname = "crash_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		

	$sql = "INSERT INTO `participant_data` ( `name_first`, `name_middle`, `name_last`, `nickname`, `preferred_pronoun`, `school`, 
                        `email_address`, `phone`, `date_of_birth`, `graduation_year`, `location_city`, `location_county`, 
                        `recieved_free_or_reduced_lunch`, `goals_interests`, `interest_as_rhinos_youth_activity_board`, 
                        `parent_guardian_fullname`, `parent_guardian_cell_phone`, `parent_guardian02_fullname`,
                        `parent_guardian02_cell_phone`, `parent_guardian_home_phone`, `parent_guardian_email`, 
                        `parent_guardian_occupation`, `parent_guardian_place_of_employment`, `parent_guardian_work_address`, 
                        `parent_guardian_work_phone`, `parent_guardian_interest_in_rhinos_advisory_board`, 
                        `parent_guardian_interest_in_volunteering`, `parent_guardian_interest_in_fundraising`, 
                        `parent_guardian_interest_in_donating`, `allergies`, `medications`, `conditions_dietary_restrictions`, 
                        `precautions_of_childs_mental_physical_health`, `checkbox_suicide_attempt`, `checkbox_anxiety`, `checkbox_depression`, 
                        `checkbox_etc`, `checkbox_etc_description`)
                
                VALUES ('$_POST[name_first]', '{$_POST['name_middle']}', '{$_POST['name_last']}', '{$_POST['nickname']}', 
                        '{$_POST['preferred_pronoun']}', '{$_POST['school']}', '{$_POST['email_address']}', '{$_POST['phone']}', 
                        '{$_POST['date_of_birth']}', '{$_POST['graduation_year']}', '{$_POST['location_city']}', '{$_POST['location_county']}', 
                        '{$_POST['recieved_free_or_reduced_lunch']}', '{$_POST['goals_interests']}', 
                        '{$_POST['interest_as_rhinos_youth_activity_board']}', '{$_POST['parent_guardian_fullname']}', 
                        '{$_POST['parent_guardian_cell_phone']}', '{$_POST['parent_guardian02_fullname']}', 
                        '{$_POST['parent_guardian02_cell_phone']}', '{$_POST['parent_guardian_home_phone']}', 
                        '{$_POST['parent_guardian_email']}', '{$_POST['parent_guardian_occupation']}', 
                        '{$_POST['parent_guardian_place_of_employment']}', '{$_POST['parent_guardian_work_address']}', 
                        '{$_POST['parent_guardian_work_phone']}', '{$_POST['parent_guardian_interest_in_rhinos_advisory_board']}', 
                        '{$_POST['parent_guardian_interest_in_volunteering']}', '{$_POST['parent_guardian_interest_in_fundraising']}', 
                        '{$_POST['parent_guardian_interest_in_donating']}', '{$_POST['allergies']}', '{$_POST['medications']}', 
                        '{$_POST['conditions_dietary_restrictions']}', '{$_POST['precautions_of_childs_mental_physical_health']}', 
                        '{$_POST['checkbox_suicide_attempt']}', '{$_POST['checkbox_anxiety']}', '{$_POST['checkbox_depression']}', 
                        '{$_POST['checkbox_etc']}', '{$_POST['checkbox_etc_description']}')";


     if(mysqli_query($conn, $sql)){
          header('location:admin_dashboard.php?confirmation=participant records inserted successfully'); /* Redirect page to admin_dashboard.php
                                                                                                            once data is inserted.*/
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

mysqli_close($conn);
 
?> 