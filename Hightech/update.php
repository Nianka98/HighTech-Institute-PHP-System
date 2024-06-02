<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['update'])){ 
	    include('connection.php');
		
        $course_name=$_POST['course_name'];
        $duration=$_POST['duration'];
		 $course_requirement=$_POST['course_requirement'];				

$sql="UPDATE add_course SET duration='$duration',course_requirement='$course_requirement'
 WHERE course_name ='$course_name'";;
		
  	 $result=mysqli_query($conn,$sql);
   
// if successfully updated. 
	if($result){			     
    
         // echo $row['emp_address'];
	echo "Successful";
	echo "<BR>";
	}
}
else {
echo "ERROR";
}
?>

</body>
</html>
