<html>

    <body>
        
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                
                <?
                    require_once '../../config.php';
                    require_once BASE_PATH.'/includes/connection.php';
                    $sc_id=$_GET['sc_id'];
                    $shdate=$_GET['date'];
                   
                    $query="select * from shows s, movie m where s.sh_date='$_GET[date]' and s.sc_id='$sc_id' and s.mo_id=m.mo_id";
	    $result= mysql_query($query);
	   $num_rows = mysql_num_rows($result);
           if($num_rows!=0)
           {
                echo "<table border=\"1\" cellpadding=\"5px\">";
                echo "<tr>";
                echo "<th>Movie</th><th>Duration</th><th>Show Time</th>";
                echo "</tr>";
                
                while($row = mysql_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['mo_name']."</td><td>".$row[mo_duration]."</td><td>".$row[sh_time]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
           }
           else
           {
                echo "no shows found";
           }
            
                ?>
                
            </div>
           
        </form>
    </body>
</html>