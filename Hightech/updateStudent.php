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
		
        $firstname=$_POST['firstname']; 
        $middlename=$_POST['middlename'];  
        $lastname=$_POST['lastname'];
        $course=$_POST['course']; 
        $gender=$_POST['gender'];  
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];			

$sql="UPDATE student_register SET firstname='$firstname',middlename='$middlename',lastname='$lastname',course='$course',gender='$gender',phone='$phone',address='$address',email='$email',password='$password'
 WHERE email ='$email'";;
		
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
