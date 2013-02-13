<?php
$conn = mysql_connect('localhost','tomcat','apache','multiplex') or die(mysql_error);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('multiplex');
?>