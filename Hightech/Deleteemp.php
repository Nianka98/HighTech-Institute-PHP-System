<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['delete'])){ 
	    include('connection.php');
		
        $name=$_POST['course_name']; 
		echo   $name;     

$sql="delete from add_course WHERE course_name ='$name'";
		
  	 $result=mysqli_query($conn,$sql);
   

	if($result){			     
    
         
	echo "Successfully deleted !!!";
	echo "<BR>";
	
	}
	 else {
          echo "ERROR";
      }
}
?>



  


</body>
</html>
