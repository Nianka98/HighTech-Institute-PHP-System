<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $name = $_GET['Del'];
            $query = " delete from add_course where course_name = '".$name."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:adminHome.html");
        }
    ?>
</body>
</html>
