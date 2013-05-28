<html>
<head>
    <title>
        Booking Process
    </title>
        
   <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?>
</head>
   
    <body>
       <?php
	include BASE_PATH .'/includes/header.php';
        require_once BASE_PATH.'/includes/connection.php';
        session_start();
        $mo_id=$_SESSION['mo_id'];
	$sh_id=$_SESSION['user_sh_id'];
        $mu_id=$_SESSION['user_mu_id'];
	
	$price=$_SESSION['price'];
	$tickets = $_SESSION['NumOfPeople'];
	$mu_id=$_SESSION['user_mu_id'];
	
	$query="select * from multiplex where mu_id=$mu_id";
        
        $result=mysql_query($query);
                   
                    while($row = mysql_fetch_array($result))
                    {    
		    $mu_name = $row['mu_name'];
                    }
	
	$query="select * from shows, screens where shows.sc_id = screens.sc_id and shows.sh_id=$sh_id";
        
        $result=mysql_query($query);
                   
                    while($row = mysql_fetch_array($result))
                    {
		    if($class=='gold')
		       {
			$go_ticket_status = $row[sh_go_ticket_avail];
			$new_go_status = ($go_ticket_status - $numPeople);
			$seat_no = "g".$new_go_status;
			$query = "UPDATE `shows` SET `sh_go_ticket_avail`=$new_go_status WHERE sh_id=$sh_id";
			$result = mysql_query($query);
		       }
		    else
		    {
			$pl_ticket_status = $row[sh_pl_ticket_avail];
			$new_pl_status = ($pl_ticket_status - $numPeople);
			$seat_no = "p".$new_pl_status;
			$query = "UPDATE `shows` SET `sh_pl_ticket_avail`=$new_pl_status WHERE sh_id=$sh_id";
			$result = mysql_query($query);
		    }
		    $sc = $row['sc_no'];
		    $sc_id = $row['sc_id'];
		    $sh_time = $row['sh_time'];
                    $sh_date = $row['sh_date'];
		    }
        $query="select * from movie where mo_id=$mo_id";
        
        $result=mysql_query($query);
                   
                    while($row = mysql_fetch_array($result))
                    {    
                    $movieImg=movieImgAddress($row['mo_image_location']);
		    $movieName = $row['mo_name'];
                    }
		    
	$username = $_SESSION["valid_user"];
	$query = "SELECT * FROM user WHERE username='$username'";
	$result=mysql_query($query);
                   
                    while($row = mysql_fetch_array($result))
                    {
			$uid=$row[uId];
                    $name = $row[first_name]." ".$row[last_name];
                    }
       
       
echo "<form action=\"$address/module/booking_successfull.php\" method=\"post\">";
    ?>
    <div id="menu" class="leftdiv">
    <?php echo "<img src=\"$movieImg\" />" ?> 
    </div>


<div align="center" class="centerdiv" style="height: auto; width: 550px">
    <h1>Book Tickets</h1>
    <table>
	<tr>
	    <td>Username : </td>
	    <td><?php echo $name ?></td>
	</tr>
	
	<tr>
	    <td>Movie Name :</td>
	    <td><?php echo $movieName ?></td>
	</tr>
	<tr>
	    <td>No Of Tickets :</td>
	    <td><?php echo $tickets ?></td>
	</tr>
	
	<tr>
	    <td>Total Payment :</td>
	    <td><?php echo "Rs ".$price ?></td>
	</tr>
	<tr>
	    <td>Multiplex :</td>
	    <td><?php echo $mu_name ?></td>
	</tr>
	
	<tr>
	    <td>Screen No :</td>
	    <td><?php echo $sc ?></td>
	</tr>
	
	<tr>
	    <td>Show Date:</td>
	    <td><?php echo $sh_date ?></td>
	</tr>
	
	<tr>
	    <td>Show Time :</td>
	    <td><?php echo $sh_time ?></td>
	</tr>
	
	<?php
	$query = "select * from booking";
	$result = mysql_query($query);
	
	 $query = "INSERT INTO `booking`(`b_id`, `uId`, `sh_id`, `sc_id`, `mu_id`, `seat_no`, `no_of_tickets`, `time`, `movie_name`) VALUES
                (NULL,'$uid','$sh_id','$sc_id','$mu_id','$seat_no','$numPeople','$sh_time','$movieName')";
		$result = mysql_query($result);
		echo $seat_no;
	
	?>
	<tr><td colspan="2" ><div style="height: 20px"></div></td></tr>
	<tr>
	    <h1>Booking Successfull</h1>
	</tr>
    </table>
</div>
</form>
</div>

    </body>
</html>
