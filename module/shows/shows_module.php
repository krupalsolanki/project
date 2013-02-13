<html>
<head>
    <title>
        Shows Module
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
        <div class="options" >
            <a href="add_shows.php" >Add Shows</a></br></br>
            <a href="edit_shows.php" >Edit Shows</a>
        </div>
        
</div>
    </body>
</html>
