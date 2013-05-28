<html>

    <body>
        
        <form action="booking_process.php" method="post" enctype="multipart/form-data">
            <div>
                <select name="selectmultiplex" id="multiplex" onchange="selectmovie(this.value)">
                    <option selected="selected">Select Multiplex</option>
                    <?php
                    require_once '../../config.php';
                    require_once BASE_PATH.'/includes/connection.php';
                   
                    $city = $_REQUEST['city'];
                    
                    $query="select * from multiplex where mu_city='$city'";
                    
                    $result=mysql_query($query);
                    
                    while($row = mysql_fetch_array($result))
                    {
                    echo "<option value=\"".$row['mu_id']."\">".$row['mu_name'].", ".$row['mu_area']."</option>";
                    }
                    ?>
                </select>
                
            </div>
           
        </form>
    </body>
</html>