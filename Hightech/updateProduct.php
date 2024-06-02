<?php
      if(isset($_POST['submit'])){ 
	    include('connection.php');
	  	if($_POST['course_name']){ 
		
			$search=$_POST['course_name'];
	
$sql = 'SELECT * FROM add_course WHERE course_name = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
	      $row = mysqli_fetch_array($result);
		  ?>
		          
         <form name="form" method="POST" action="update.php">
          <p>Name:
  <input type="text" name="course_name" 
		value="<?php echo $row['course_name']?>" /></p>
		   <p>Duration:
  <input type="text" name="duration" 
		value="<?php echo $row['duration']?>"/></p>
        <p>Course Requirement:
  <input type="text" name="course_requirement" 
		value="<?php echo $row['course_requirement']?>"/></p>
		           
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
		header("Location: update.html");
	}  
	  	 
?>




</body>

</html>
