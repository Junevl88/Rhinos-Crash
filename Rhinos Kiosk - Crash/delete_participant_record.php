<?php

 // Connect to the database START
    $servername = "mysql.portfolio.harmonyschool.org";
    $username = "prog_db_user";
    $password = "markrocks14";
	$dbname = "crash_db";
	
    $conn = mysql_connect($servername,$username,$password);
	$db   = mysql_select_db($dbname, $conn);
 // Connect to the database END 
 
		if( isset($_GET['participant_id']) ){

			$id = $_GET['participant_id'];
			$sql= "DELETE FROM participant_data WHERE participant_id='$id'";
			$result= mysql_query($sql) or die("Failed".mysql_error());

			echo "<meta http-equiv='refresh' content='0;url=delete_participant_table.php'>"; 
			// ^^ Takes you to delete_participant_table.php with the participant record deleted 

	  }
?>