<?php    
       
        require_once '../../config.php';
        require_once BASE_PATH.'/includes/connection.php';
        session_start();
        $tickets = $_SESSION['NumOfPeople'] =  $_POST['NumOfPeople'];
	$class = $_SESSION['class'] = (string)$_POST["bk_class"];
       
        $sh_id = $_SESSION['user_sh_id'] = $_POST['show_id'];
        
        if($class == 'gold')
	{
	    $price = 110*$tickets;    
	}
	else
	{
	    $price = 200*$tickets;
	 
	}
        $_SESSION['price']=$price;
        if(isset($_SESSION['valid_id']))
            {
                
               if($_SESSION['valid_id']=='authorized')
               {
                
                Header("Location: $address/module/booking/book_ticket.php");
               }
               
            }
            else
            {
                Header("Location: $address/login.php");
            }

?>