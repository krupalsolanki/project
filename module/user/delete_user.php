<html>
<head>
    <title>
        Delete User
    </title>
    <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?> 
 
</head>
   
    <body>
       <?php
      
       include BASE_PATH .'/includes/header.php';
       include BASE_PATH.'/includes/admin_options.php';
       ?>
       
       
        <div align="left" class="centerdiv" style="width: 550px;" >
	    <?php
	     require_once BASE_PATH.'/includes/connection.php';
            $query='select * from user';
	    $result= mysql_query($query);
	   
	    while($row = mysql_fetch_array($result))
	    {
		echo "<div class=\"postinfo\" >";
		echo $row['username'].", ".$row['first_name']." ".$row['last_name'];
		
		echo "<a style=\"margin-right:10px; margin-left:10px;\" href=\"delete_user_process.php?id=".$row['uId']."\">Delete</a>";
		echo "<a href=\"edit_user_details.php?id=".$row['uId']."\">Edit</a></br>";
		
		echo "</div>";
	    }
	   
	    ?>
        </div>
</div>
    </body>
</html>
