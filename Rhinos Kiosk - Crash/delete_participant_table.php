<?php


 // Connect to the database START
    $servername = "mysql.portfolio.harmonyschool.org";
    $username = "prog_db_user";
    $password = "markrocks14";
	$dbname = "crash_db";
	
    $conn = mysql_connect($servername,$username,$password);
	$db   = mysql_select_db($dbname, $conn);
 // Connect to the database END 

    $sql="SELECT * FROM participant_data";
    $result=mysql_query($sql);

?>


<!DOCTYPE html>
<html>
    
    <head>
    <style>
       
    /* Temporary CSS For the Participant Table
       (feel free to change it) */

    #searchBar {
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 95%;
                font-size: 16px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
                margin-left: 10px;
                position:relative; 
             }

    #participantTable {
                        position:relative;
                        border-bottom: 1px;
                        border-color: #E8E8E8;
                        padding-left:10px;
                        padding-right:10px;
                      } 

    #columnTitle {
                   font-size:15px;
                   border-top:1px solid #E8E8E8;
                   border-right:1px solid #E8E8E8;
                   border-bottom:1px solid #E8E8E8;
                 }

    #tableItems {
                  border-bottom:1px solid #E8E8E8;
                  border-right:1px solid #E8E8E8
                }

   </style>
   </head>

    <body>


   <h2 style="position:relative;left:10px;"><strong>Delete Participant Records</strong> </h2>

   <input type="text" id="searchBar" onkeyup="myFunction()" placeholder="Search For Firstnames.." title="Type in a name"> <!-- Search Bar will appear here -->

    <table id="participantTable"width="400" cellspacing="0" cellpadding="5">
    <tr>

        <!-- Column Title For the Participant Data Table START -->
        <th id="columnTitle"><strong>ID</strong></th>
        <th id="columnTitle"><strong>Firstname</strong></th>
        <th id="columnTitle"><strong>Middlename</strong></th>
        <th id="columnTitle"><strong>Lastname</strong></th>
        <th id="columnTitle"><strong>Nickname</strong></th>
        <th id="columnTitle"><strong>Preferred pronoun</strong></th>
        <th id="columnTitle"><strong>School</strong></th>
        <th id="columnTitle"><strong>Phone #</strong></th>
        <th id="columnTitle"><strong>Date of Birth</strong></th>
        <th id="columnTitle"><strong>Graduation Year</strong></th>
        <th id="columnTitle"><strong>Location City</strong></th>
        <th id="columnTitle"><strong>Location County</strong></th>
        <th id="columnTitle"><strong>Recieved Free or Reduced Lunch</strong></th>
        <th id="columnTitle"><strong>Goals/Interests</strong></th>
        <th id="columnTitle"><strong>Interest as Rhinos Youth Activity Board</strong></th>

        <th id="columnTitle"><strong>Parent/Guardian Fullname</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Cellphone #</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Home Phone</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Email</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Occupation</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Place of Employment</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Work Address</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Work Phone</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian's Interest in Rhinos Activity Board</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Interest in Volunteering</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Interest in Fundraising</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian Interest in Donating</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian 02 Fullname</strong></th>
        <th id="columnTitle"><strong>Parent/Guardian 02 Cellphone #</strong></th>

        <th id="columnTitle"><strong>Allergies</strong></th>
        <th id="columnTitle"><strong>Medications</strong></th>
        <th id="columnTitle"><strong>Conditions/Dietary Restrictions</strong></th>
        <th id="columnTitle"><strong>Precautions of Participant's Mental/Physical health</strong></th>
        <th id="columnTitle"><strong>Checkbox for Suicide Attempt</strong></th>
        <th id="columnTitle"><strong>Checkbox for Suicide Anxiety</strong></th>
        <th id="columnTitle"><strong>Checkbox for Suicide Depression</strong></th>
        <th id="columnTitle"><strong>Checkbox for Etc</strong></th>
        <th id="columnTitle"><strong>Checkbox for Etc Description</strong></td>
        <!-- Column Title For the Participant Data Table END -->
    </tr>

<?php

    while($rows=mysql_fetch_array($result)){
?>

    <tr>

        <!-- Display Participant's Info From Database -->
        <td id="tableItems"><? echo $rows['participant_id']; ?></td>
        <td id="tableItems"><? echo $rows['name_first']; ?></td>
        <td id="tableItems"><? echo $rows['name_middle']; ?></td>
        <td id="tableItems"><? echo $rows['name_last']; ?></td>
        <td id="tableItems"><? echo $rows['nickname']; ?></td>
        <td id="tableItems"><? echo $rows['preferred_pronoun']; ?></td>
        <td id="tableItems"><? echo $rows['school']; ?></td>
        <td id="tableItems"><? echo $rows['phone']; ?></td>
        <td id="tableItems"><? echo $rows['date_of_birth']; ?></td>
        <td id="tableItems"><? echo $rows['graduation_year']; ?></td>
        <td id="tableItems"><? echo $rows['location_city']; ?></td>
        <td id="tableItems"><? echo $rows['location_county']; ?></td>
        <td id="tableItems"><? echo $rows['recieved_free_or_reduced_lunch']; ?></td>
        <td id="tableItems"><? echo $rows['goals_interests']; ?></td>
        <td id="tableItems"><? echo $rows['interest_as_rhinos_youth_activity_board']; ?></td>

        <td id="tableItems"><? echo $rows['parent_guardian_fullname']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_cell_phone']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_home_phone']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_email']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_occupation']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_place_of_employment']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_work_address']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_work_phone']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_interest_in_rhinos_advisory_board']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_interest_in_volunteering']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_interest_in_fundraising']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian_interest_in_donating']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian02_fullname']; ?></td>
        <td id="tableItems"><? echo $rows['parent_guardian02_cell_phone']; ?></td>
        
        <td id="tableItems"><? echo $rows['allergies']; ?></td>
        <td id="tableItems"><? echo $rows['medications']; ?></td>
        <td id="tableItems"><? echo $rows['conditions_dietary_restrictions']; ?></td>
        <td id="tableItems"><? echo $rows['precautions_of_childs_mental_physical_health']; ?></td>
        <td id="tableItems"><? echo $rows['checkbox_suicide_attempt']; ?></td>
        <td id="tableItems"><? echo $rows['checkbox_anxiety']; ?></td>
        <td id="tableItems"><? echo $rows['checkbox_depression']; ?></td>
        <td id="tableItems"><? echo $rows['checkbox_etc']; ?></td>
        <td id="tableItems"><? echo $rows['checkbox_etc_description']; ?></td>

        <td id="tableItems"><a href="delete_participant_record.php?participant_id=<? echo $rows['participant_id']; ?>">delete</a></td>
   </tr>

<?php

    } // Closes the while loop
?>

    </tr>
    </table>


<!-- Javascript for the Search Bar -->
<script>

    function myFunction(){
    
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchBar");
    filter = input.value.toUpperCase();
    table = document.getElementById("participantTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
         td = tr[i].getElementsByTagName("td")[1]; // [1] Allows user to search by firstname. ([0] lets user search by ID)
     if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
      } else {
               tr[i].style.display = "none";
        }
     }       
    }
    }
    
</script>

<?php

    mysql_close();
?>
 