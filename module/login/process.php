<?php    
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        require_once '../../config.php';
        require_once BASE_PATH.'/includes/connection.php';
        session_start();
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
         // Run query
         $result = mysql_query($query);
         $result1 = mysql_query($query);
        while($row = mysql_fetch_array($result1))
        {
        $type = $_SESSION["user_type"] = $row["user_type"];
        }
        
         if ( $obj = @mysql_fetch_object($result) )
        
        {
            
            // Login good, create session variables
            $_SESSION["user_type"] = $type;
            $_SESSION["valid_id"] = "authorized";
            $_SESSION["valid_user"] = $_POST["username"];
            $_SESSION["valid_time"] = time();

            Header("Location: $address/home.php");
        }
                    
        else
        Header("Location: $address/login.php");
?>