<?php

session_start();
$servername = "mysql.portfolio.harmonyschool.org";
$username = "prog_db_user";
$password = "markrocks14";
$dbname = "crash_db";
$result ="";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
	

         
     if(isset($_GET['confirmation']) && !empty($_GET['confirmation'])){
         echo $_GET['confirmation'];
     } //Displays "participant records successfully inserted" Once it is redirected from create_participants_record.html

    echo '<html>
          <!-- Some stuff so I can check on what has been done.-->
            <head>
                <link rel="stylesheet" type="text/css" href="css/header.css">
                <link rel="stylesheet" type="text/css" href="css/footer.css">
                <link rel="stylesheet" type="text/css" href="css/site.css">
                <title>Admin Dashboard</title>
            </head>
            <body>
					<ul>
					<li> <b>Admin Dashboard</b> 
					</ul>

				<br>
				<br>
			    <form method="get" action="kioskphp.php">
				<button type="submit">Kiosk Mode</button>
				</form>
				 <form method="get" action="data_entry_mode.html">
					<button type="submit">Data Entry Mode</button>
				</form>
				
            </body>
         </html>'
		 ;
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM activity_log";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);

	echo "<h2>Number of check ins: $num_rows</h2><br><br>";
	
	if (mysqli_num_rows($result) > 0)
		while ($row=mysqli_fetch_row($result))
		{
          echo "<h3><b>Date:</b>".$row[0]." <b>Activity:</b>".$row[1]." <b>Participant:</b>".$row[2];
		  echo "<br><br>";
		} 
	else
		{
        echo "No activity";
		}
       
?>