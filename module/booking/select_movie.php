<html>

    <body>
        
        <form action="booking_process.php" method="post" enctype="multipart/form-data">
            <div >
                
                    <?php
                    require_once '../../config.php';
                    require_once BASE_PATH.'/includes/connection.php';
                   
                   session_start();
                    $mu_id = $_SESSION["user_mu_id"] = $_REQUEST['mu_id'];
                    $sh_date = date("Y-m-d");
                    
                    $query="select * from shows, movie where shows.mo_id=movie.mo_id and mu_id=$mu_id and sh_date='$sh_date'";
                    $result=mysql_query($query);
                    $num_rows = mysql_num_rows($result);
                    while($row = mysql_fetch_array($result))
                    {    
                    $movieImg=movieImgAddress($row['mo_image_location']);
                   
                    echo "<a href=\"booking_process.php?mo_id=".$row['mo_id']."\"><img src=\"$movieImg\" /><div><h1>".$row['mo_name']."</h1></br><p>".$row[mo_details]."</p></div></a>";
                    
                    }
                   
                    
                    ?>
                    
                
                    
            </div>
           
        </form>
    </body>
</html>