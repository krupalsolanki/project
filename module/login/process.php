<?php    
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        require_once '../../config.php';
        require_once BASE_PATH.'/includes/connection.php';
        
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
         // Run query
         $result = mysql_query($query);

         if ( $obj = @mysql_fetch_object($result) )
        {
            session_start();
            // Login good, create session variables
            $_SESSION["valid_id"] = "authorized";
            $_SESSION["valid_user"] = $_POST["username"];
            $_SESSION["valid_time"] = time();
            
            Header("Location: $address/home.php");
        }
        else
        Header("Location: $address/login.php");
?>