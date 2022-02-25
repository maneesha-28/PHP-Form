<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Display Table</title>
	<style>
	body {
    background: rgb(5, 4, 72);
    background: linear-gradient(
    90deg,
    rgba(5, 4, 72, 1) 0%,
    rgba(2, 0, 36, 1) 0%,
    rgba(9, 9, 121, 1) 9%,
    rgba(0, 212, 255, 1) 85%
    );
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
    color: snow;
    }
	
    h1 {
      font-size: xxx-large;
    }
	
	table {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
	border-collapse: collapse;
	font-size: 25px;
    }
    td {
    border: 3px solid snow;
    }
	
    

	</style>
  </head>
  
<body>
<h1><center>Table Info</center></h1>
<?php 
   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db1";

   $con = mysqli_connect($server, $username, $password, $dbname );
   $query = "SELECT * FROM table1";


    echo ' <table border="2" cellspacing="3" cellpadding="3">
      <tr> 
          <td><b> Serial No. </b> </td> 
          <td><b> First Name </b> </td> 
          <td><b> Last Name </b> </td> 
          <td><b> Date of Birth </b> </td> 
          <td><b> Phone Number </b> </td> 
		  <td><b> Email ID </b> </td> 
      </tr>';

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $f1name = $row["id"];
        $f2name = $row["f_name"];
        $f3name = $row["l_name"];
        $f4name = $row["dob"];
        $f5name = $row["phone_no"]; 
        $f6name = $row["eml_id"];
        echo '<tr> 
                  <td>'.$f1name.  '</td> 
                  <td>'.$f2name.  '</td> 
                  <td>'.$f3name.  '</td> 
                  <td>'.$f4name.  '</td> 
                  <td>'.$f5name.  '</td> 
				  <td>'.$f6name.  '</td>
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>