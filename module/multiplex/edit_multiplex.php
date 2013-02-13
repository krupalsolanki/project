<html>
<head>
    <title>
        Edit Multiplex
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
            $query='select * from multiplex';
	    $result= mysql_query($query);
	   
	    while($row = mysql_fetch_array($result))
	    {
		echo "<div class=\"postinfo\" >";
		echo $row['mu_name'].", ".$row['mu_city'];
		echo "<a href=\"undermaintainance_multiplex.php?id=".$row['mu_id']."\">delete</a></br>";
		echo "</div>";
	    }
	   
	    ?>
        </div>
</div>
    </body>
</html>
