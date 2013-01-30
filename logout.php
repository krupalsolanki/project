<html>
<head>
    <title>
        Logout
    </title>
        
  <link rel="stylesheet" type="text/css" href="includes/stylesheet.css" />
</head>
   
    <body>
       <?php

        session_start();
        $_SESSION['valid_id']="un";
        include 'header.php';
       ?>
        <div align="center" class="centerdiv" style="width: 1000px; ">
        <h2>You have been Logged Out..!!!</h2>
        
        </div>
    </body>
</html>
