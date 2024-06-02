<html>
	<head>
	<title>Retrieve data from database</title>
	<link rel="stylesheet" href="program.css">
	</head>
	<body>
	<header>
        <div class="wapper">
        <div class="logo"> 
            <img src="images/nil.png" alt="">
       </div>
       <ui class="nav-area">
        <li><a href="home.html">Home</a></li>
        <li><a href="DisplayProgram.php">Programs</a></li>
        <li><a href="SearchProgram.html">Search Programs</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="reg.html">Register</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="admin.html">Admin</a></li>
       </ui>
   </div>
   <div class="welcome-text">
    <h1> Our Programs</h1>
    <a href="about.html">About us</a>
</div>
  </header>
	<dl>

	<?php
	include 'connection.php';	
	$sql=	"SELECT * FROM add_course";
	
	$result = mysqli_query($conn,$sql);

echo "<table border='1'>
<tr>
<th>course_name</th>
<th>duration</th>
<th>course_requirement</th>
</tr>";
//fetches a result row as an associative array or a numeric array, or both.
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['course_name'] . "</td>";
 echo "<td>" . $row['duration'] . "</td>";
 echo "<td>" . $row['course_requirement'] . "</td>";
  echo "</tr>";
  }//end of while
echo "</table>";

mysqli_close($conn);	
?>
	