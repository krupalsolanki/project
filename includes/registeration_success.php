<html>
<head>
    <title>
        Registeration Successfull
    </title>
        
  <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
   
    <body>
       <?php
      
        require_once '../config.php';
	include BASE_PATH .'/includes/header.php';
        require_once BASE_PATH.'/includes/connection.php';
       
        $name=$_POST["uname"];
        $email=$_POST["emailId"];
        $pass=$_POST["pass"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $gender = (string)$_POST["gender"];        
        $phone=$_POST["phone_no"];
        $city=$_POST["city"];
        $date=date("Y/m/d");
        
        
        $query = "INSERT INTO user (`uId`, `username`, `password`, `emailId`, `first_name`, `last_name`, `gender`, `city`, `phone_no`, `date_of_registeration`,`user_type`) VALUES (NULL, '$name', '$pass', '$email', '$fname', '$lname', '$gender', '$city', '$phone', '$date', 'common')"; 
        $result = mysql_query($query);
        
       
         echo "<div align=\"center\" class=\"centerdiv\" style=\"width:1000px; \">";
           echo " <h1>Registeration Successfull </h1></br>\n";
           echo "<h2>Welcome $fname </h2>";
        echo "</div>";
	
       ?>
</div>     
    </body>
</html>
