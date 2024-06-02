<html>
    <head>
        <meta charset="utf-8">
        <title>Search program Page</title>
        <link rel="stylesheet" href="store.css">
        <link rel="stylesheet" href="home.css">
    </head>
    
    <body>
        <header>
            <div class="wapper">
            <div class="logo"> 
                <img src="images/nil.png">
           </div>
           <ui class="nav-area">
               <li><a href="home.html">Home</a></li>
               <li><a href="DisplayProgram.php">Program</a></li>
               <li><a href="search.html">Search Programs</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="reg.html">Register</a></li>
               <li><a href="login.html">Login</a></li>
               <li><a href="admin.html">Admin</a></li>

           </ui>
       </div>
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
		     <br></br>  <br></br>  <br></br>  <br></br>  <br></br>  <br></br>     
         <form name="form" method="POST">
         <p style="color:rgb(255, 255, 255);">Name:
  <input type="text" name="course_name" 
		value="<?php echo $row['course_name']?>" disabled="disabled"/></p>
		   <p style="color:rgb(255, 255, 255);">Duration:
  <input type="text" name="duration" 
		value="<?php echo $row['duration']?>" disabled="disabled"/></p>
        <p style="color:rgb(255, 255, 255);">Course Requirement:
  <input type="text" name="course_requirement" 
		value="<?php echo $row['course_requirement']?>" disabled="disabled"/></p>
		           
        <input type="hidden" name="course_name" value="<?php echo $search; ?>" />
			              

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
