<html>
<head>
    <title>
        Movie Module
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
            <a href="add_movie.php" >Add Movie</a></br></br>
            <a href="edit_movie.php" >Edit Movie</a>
        </div>
        
</div>
    </body>
</html>
