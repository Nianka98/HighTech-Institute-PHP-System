<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>   
<?php 
if (isset($_POST['submit'])) {  
   include("connection.php");
   
  
   $firstname=$_POST['firstname']; 
   $middlename=$_POST['middlename'];  
   $lastname=$_POST['lastname'];
   $gender=$_POST['gender'];  
   $phone=$_POST['phone'];
   $address=$_POST['address'];
   $email=$_POST['email'];
   $password=$_POST['password'];
 
     	
	$sql = "INSERT INTO admin_register". "(firstname,middlename,lastname,gender,phone,address,email,password) ". 
	"VALUES('$firstname','$middlename','$lastname','$gender','$phone','$address','$email','$password')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            echo "Entered data successfully\n";
			}

			
			
   }  else {

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>

</body>
</html>
