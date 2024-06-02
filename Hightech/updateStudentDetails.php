<?php
if(isset($_POST['submit'])){ 
	    include('connection.php');
	  	if($_POST['email']){ 
		
			$search=$_POST['email'];
	
$sql = 'SELECT * FROM student_register WHERE email = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
	      $row = mysqli_fetch_array($result);
		  ?>
		     


         <form name="form" method="POST" action="updateStudent.php">
          <p>Firstname:
  <input type="text" name="firstname" 
		value="<?php echo $row['firstname']?>" /></p>
		   <p>Middlename:
  <input type="text" name="middlename" 
		value="<?php echo $row['middlename']?>"/></p>
        <p>Lastname:
  <input type="text" name="lastname" 
		value="<?php echo $row['lastname']?>"/></p>
        <p>Course:
  <input type="text" name="course" 
		value="<?php echo $row['course']?>"/></p>
        <p>Gender:
  <input type="text" name="gender" 
		value="<?php echo $row['gender']?>"/></p>
        <p>Phone :
  <input type="text" name="phone" 
		value="<?php echo $row['phone']?>"/></p>
        <p>Address:
  <input type="text" name="address" 
		value="<?php echo $row['address']?>"/></p>
        <p>Email :
  <input type="text" name="email" 
		value="<?php echo $row['email']?>"/></p>
        <p>Password:
  <input type="text" name="password" 
		value="<?php echo $row['password']?>"/></p>
		           
        <input type="hidden" name="course_name" value="<?php echo $search; ?>" />
			              
	         <input type="submit" name="update" id="update" value="Update" />
		   </p>
         </form>

         <?php
		 	
		
        }
       else{
            echo " No results found "; 
           }
       }
       
     }
       else{
           header("Location: Search Student.html");
       }  
              
   ?>



</body>

</html>
