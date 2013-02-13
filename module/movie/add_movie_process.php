<html>
<head>
    <title>
        Movie Added
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
        
	$mo_name=$_POST['mo_name'];
	$mo_release_date=$_POST['mo_release_date'];
	$mo_duration=$_POST['mo_duration'];
	$mo_details=$_POST['mo_details'];
	$mo_link=$_POST['mo_link'];
        
        
        

$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
$target=BASE_PATH.'/images/';
$target=$target.basename($_FILES['file']['name']);
$query = "INSERT INTO `movie`(`mo_id`, `mo_name`, `mo_release_date`, `mo_duration`, `mo_details`, `mo_link`,`mo_image_location`) VALUES (NULL,'$mo_name','$mo_release_date','$mo_duration','$mo_details','$mo_link','$target')";

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
{
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
    if (file_exists($target))
	{
	    
	echo "<div align=\"center\" class=\"centerdiv\" style=\"width: 550px; \">";
        echo $_FILES["file"]["name"] . " already exists. </br>Please rename the file and try again. ";
        echo "</div>";
	}
    else
      {
	 if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) 
	{
	$result = mysql_query($query);
	echo "<div align=\"center\" class=\"centerdiv\" style=\"width: 550px; \">";
        echo "<h1>Movie Added Successfully</h1>";
        echo "</div>";
	}
	else "please try again";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

</body>
</html>
