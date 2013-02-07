<html>
<head>
    <title>
        Add Screens
    </title>
    <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?> 
 
</head>
   
    <body>
       <?php
      
       include BASE_PATH .'/includes/header.php';
       include BASE_PATH.'/includes/admin_options.php';
       ?>
       
       
        <div align="center" class="centerdiv" style="width: 550px;">
            
             <?php

             if (!isset($_SESSION["mu_name"]))
             die();
             else
             {
             echo "<h3 align=\"center\">Add Screens to ".$_SESSION["mu_name"]." </h3>";
             }
             
             
             
             echo "<form method=\"post\" action=add_screens_process.php>";
             echo "<table align=\"center\" cellpadding=\"10px\" >";
             
             for($i=1;$i<=$_SESSION["mu_screens"];$i++)
             {
                echo "<tr>\n";
                    echo "<td>";
                        echo "Screen $i";
                    echo "</td>\n";

                    echo "<td>\n";
                        echo "Seating Capacity : <input type=\"text\" class=\"input\" name=\"sc_capacity$i\" size=\"3\"";
                    echo "</td>\n";
                    
                    echo "<td>\n";
                        echo "Gold Seats : <input type=\"text\" class=\"input\" name=\"gold_seats_$i\" size=\"3\"";
                    echo "</td>\n";
                    
                echo "</tr>";
             }
             
             ?>
             <tr>
            <td>
            </td>
             <td align="center" ><input type="reset" name="ok" id="okbtn" value="Reset" class="button"/></td>
             <td align="center" ><input type="submit" name="ok" id="okbtn" value="Create" class="button"/></td>
             </tr>
             
             
              
             </table>
             
             </form>
        </div>
</div>
    </body>
</html>
