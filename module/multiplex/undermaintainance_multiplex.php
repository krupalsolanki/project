
<?php
    require_once '../../config.php';
    require_once BASE_PATH.'/includes/connection.php';
	$query="delete from multiplex where mu_id=".$_GET['id'];
	$result=mysql_query($query) or die(mysql_error());
	header("Location:edit_multiplex.php");
?>