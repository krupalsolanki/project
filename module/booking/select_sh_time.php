<html>

    <body>
        
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                  Select Show Time : <select name="sho_time" id="sho_time" onchange=selectedtime(this.value)>
                <option selected="selected">select Show time</option>
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
                    
                    $go_ticket_status = $row['sh_go_ticket_avail'];
                    $pl_ticket_status = $row['sh_pl_ticket_avail'];
                    
                    echo "<option value=\"".$row['sh_id']."\">";
                    if($go_ticket_status < $numPeople)
                        {
                            echo $row['sh_time']." Gold Seats (Not Available) ";
                            
                        }
                        else
                        {
                            echo $row['sh_time']." Gold Seats (Available) ";
                        }
                        if($pl_ticket_status < $numPeople)
                        {
                            echo "| Platinum Seats (Not Available)";
                            
                        }
                        else
                        {
                            echo "| Platinum Seats (Available)";
                        }
                        
                    
                    echo "</option>";
                    
                    
                    }
                    echo "</select>";
                    
                    ?>
                
                
            </div>
           
        </form>
    </body>
</html>