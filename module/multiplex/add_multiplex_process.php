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
        
        $mu_name=$_POST["mu_name"];
        $mu_city=$_POST["mu_city"];
        $mu_address=$_POST["mu_address"];
        $mu_screens=$_POST["mu_screens"];
        
        $query = "INSERT INTO `multiplex`.`multiplex` (`mu_id`, `mu_name`, `mu_city`, `mu_address`, `mu_screens`) VALUES (NULL, '$mu_name', '$mu_city', '$mu_address', '$mu_screens')";
        $result = mysql_query($query);
        
       
        echo "<div align=\"center\" class=\"centerdiv\" style=\"width:1000px; \">";
           echo " <h1>Multiplex Added Successfully </h1></br>\n";
           echo "<h2>Welcome $fname </h2>";
        echo "</div>";
?>
</body>
</html>
