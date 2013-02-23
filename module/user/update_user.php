<html>
<head>
    <title>
        Update Successfull
    </title>
        
  <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?>
</head>
   
    <body>
       <?php
	include BASE_PATH .'/includes/header.php';
        require_once BASE_PATH.'/includes/connection.php';
        
        $name=$_POST["uname"];
        $email=$_POST["emailId"];
        $pass=$_POST["pass"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        
        $phone=$_POST["phone_no"];
        $city=$_POST["city"];
        
        $ut=$_POST["user_type"];
        
        $query = "UPDATE `user` SET `username`='$name',`password`='$pass',`emailId`='$email',`first_name`='$fname',`last_name`='$lname',`city`='$city',`phone_no`='$phone',`user_type`='$ut' WHERE uId=$_SESSION[uId]"; 
        $result = mysql_query($query);
        
       
         echo "<div align=\"center\" class=\"centerdiv\" style=\"width:1000px; \">";
           echo " <h1>Update Successfull </h1></br>\n";
        echo "</div>";
       ?>
</div>     
    </body>
</html>
