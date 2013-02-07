<html>
<head>
    <title>
        Logout
    </title>
    
  
  <?php require_once '../../config.php';
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$address/includes/stylesheet.css\" />";
  ?>
</head>
   
    <body>
       <?php

        session_start();
        //$_SESSION['valid_id']="un";
        session_destroy();
        include BASE_PATH .'/includes/header.php';
        echo $_SESSION['valid_id'];
       ?>
        <div align="center" class="centerdiv" style="width: 1000px; ">
        <h2>You have been Logged Out..!!!</h2>
        
</div>
        </div>
    </body>
</html>
