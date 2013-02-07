<html>
<head>
    <title>
        Multiplex Added
    </title>
    <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?> 
 
</head>
<body>
<?php   
        
        require_once BASE_PATH.'/includes/connection.php';
        include BASE_PATH .'/includes/header.php';
        include BASE_PATH.'/includes/admin_options.php';
        
        $mu_name=$_SESSION["mu_name"];
        $query = "SELECT * FROM `multiplex` WHERE `mu_name` LIKE '$mu_name'";
        $result = mysql_query($query);
        
        $row = mysql_fetch_array($result);
	$mu_id=$row['mu_id'];
        
        for($i=1;$i<=$_SESSION["mu_screens"];$i++)
             {
		$sc_capacity=$_POST["sc_capacity$i"];
		$sc_gold=$_POST["gold_seats_$i"];
		$sc_platinum=$sc_capacity-$sc_gold;
                $query = "INSERT INTO `multiplex`.`screens`(`sc_id`, `sc_no`, `mu_id`, `sc_capacity`, `sc_gold`, `sc_platinum`) VALUES (NULL,'$i','$mu_id','$sc_capacity','$sc_gold','$sc_platinum')";
		$result = mysql_query($query);
	     }
       
        echo "<div align=\"center\" class=\"centerdiv\" style=\"width:600px; \">";
           echo " <h1>Multiplex Added Successfully </h1></br>\n";
        echo "</div>";
?>
</body>
</html>
