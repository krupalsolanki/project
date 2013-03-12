<html>

    <body>
        
        <form action="add_show_process.php" method="post" enctype="multipart/form-data">
            <div>
                <select name="sc_id" id="screen" onchange='selectedscreen(this.value)'>
                    <option selected="selected">Screen No</option>
                    <?php
                    require_once '../../config.php';
                    require_once BASE_PATH.'/includes/connection.php';
                   
                    $mu_id = $_REQUEST['mu_id'];
                    $query="select * from screens where mu_id=$mu_id";
                    
                    $result=mysql_query($query);
                    
                    while($row = mysql_fetch_array($result))
                    {
                    echo "<option value=\"".$row['sc_id']."\">".$row['sc_no']."</option>";
                    }
                    ?>
                </select>
                
            </div>
           
        </form>
    </body>
</html>