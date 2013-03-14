<html>

    <body>
        
        <form action="book_show_process.php" method="post" enctype="multipart/form-data">
            <div>
                Select Show Time : <select name="sh_time" id="sh_time">
                    <?php
                    require_once '../../config.php';
                    require_once BASE_PATH.'/includes/connection.php';
                    session_start();
                    $mo_id=$_SESSION[mo_id];
                    $mu_id=$_SESSION[user_mu_id];
                    $numPeople=$_GET['numPeople'];
                    $date=$_GET[date];
                    $query="select * from shows where sh_date='$date' and mo_id=$mo_id and mu_id=$mu_id";
                    $result=mysql_query($query);
                    while($row = mysql_fetch_array($result))
                    {
                    
                    $ticket_status = $row['sh_ticket_avail'];
                    if($ticket_status < $numPeople)
                    {
                        echo "<option value=\"".$row['sh_id']."\">".$row['sh_time']." (Not Available)</option>";
                    }
                    else
                    {
                        echo "<option value=\"".$row['sh_id']."\">".$row['sh_time']." (Available)</option>";
                    }
                    }
                    echo "</select>";
                    
                    ?>
                
                
            </div>
           
        </form>
    </body>
</html>