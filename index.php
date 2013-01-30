<?php
require_once 'includes/connection.php';

$query = "select * from user where uId=1";
$result = mysql_query($query);

$row = mysql_fetch_array($result);

echo $row['username']."</br>";
echo $row['phone_no'];
?>