<html>

    <body>
        
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <?
                    require_once '../../config.php';
                    require_once BASE_PATH.'/includes/connection.php';
                    $sc_id=$_GET['sc_id'];
                    $shdate=$_GET['date'];
                   
                    $query='select * from shows';
	    $result= mysql_query($query);
	   
	    while($row = mysql_fetch_array($result))
	    {
		
		echo $row['sh_date'].", ".$row['sh_time'];
		
	    }
            $num_rows = mysql_num_rows($result);
            if(num_rows == 0)
            echo "no shows found";
                ?>
                
            </div>
           
        </form>
    </body>
</html>