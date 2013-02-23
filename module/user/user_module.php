<html>
<head>
    <title>
        User Module
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
            <a href="delete_user.php" >Edit User</a>
        </div>
        
</div>
    </body>
</html>
