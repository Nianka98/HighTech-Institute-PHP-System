<html>
	<head>
	<title>Retrieve data from database</title>
    
	</head>
	<body>

	<dl>

	<?php
	include 'connection.php';	
	$sql=	"SELECT * FROM student_register";
	
	$result = mysqli_query($conn,$sql);

echo "<table border='1'>
<tr>
<th>firstname</th>
<th>middlename</th>
<th>lastname</th>
<th>course</th>
<th>gender</th>
<th>phone</th>
<th>address</th>
<th>email</th>
<th>password</th>

</tr>";
//fetches a result row as an associative array or a numeric array, or both.
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['firstname'] . "</td>";
 echo "<td>" . $row['middlename'] . "</td>";
 echo "<td>" . $row['lastname'] . "</td>";
 echo "<td>" . $row['course'] . "</td>";
 echo "<td>" . $row['gender'] . "</td>";
 echo "<td>" . $row['phone'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
  }//end of while
echo "</table>";

mysqli_close($conn);	
?>
	