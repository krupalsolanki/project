<html>
<head>
    <title>
        Show Added
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
        
        $sh_date = $_POST["sh_date"];
        $sh_time = $_POST["sh_time"];
        $mo_id = $_POST['mo_id'];
        $sc_id = $_POST['sc_id'];
        $mu_id = $_POST['mu_id'];
	
	$query1 = "select * from screens where sc_id=$sc_id";
	$result1=mysql_query($query1);
	while($row1 = mysql_fetch_array($result1))
        {
	    $sh_go=$row1[sc_gold];
	    $sh_pl=$row1[sc_platinum];
	}
	
        $query = "INSERT INTO `shows`(`sh_id`, `sc_id`, `mu_id`, `sh_date`, `sh_time`, `mo_id`, `sh_go_ticket_avail`, `sh_pl_ticket_avail`) VALUES (NULL,'$sc_id','$mu_id','$sh_date','$sh_time','$mo_id','$sh_go','$sh_pl')";
        $result = mysql_query($query);
       
	
        echo "<div align=\"center\" class=\"centerdiv\" style=\"width:600px; \">";
           echo " <h1>Show Added Successfully </h1></br>\n";
        echo "</div>";
?>
</body>
</html>
