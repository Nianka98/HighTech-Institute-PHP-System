<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

$message="";
if(count($_POST)>0) {

 include 'connection.php';
 
 $email=$_POST["email"];
 $pass=$_POST["password"];


 $sql="SELECT * FROM student_register WHERE email='$email' and password ='$pass'";

$result = mysqli_query($conn,$sql);

$row= mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1) {
                  
        $msg="Welcome to the abc system";
		header("location: studentHome.html");
      }else {
        $msg = "Your Login Name or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

</body>
</html>
