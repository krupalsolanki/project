<html>
<head>
    <title>
        Edit Show
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
	require_once BASE_PATH.'/includes/connection.php';
            $query="select * from shows, movie where shows.mo_id=movie.mo_id and sh_id=".$_GET[id];
	    //$_SESSION['uId']=$_GET[id];
	    
	    $result= mysql_query($query);
	   
	    while($row = mysql_fetch_array($result))
	    {
		$mo_name=$row['mo_name'];
		$sh_date=$row['sh_date'];
		$sc_id=$row['sc_id'];
		

	    }
       ?>
        <div align="center" class="centerdiv" >
                        
             <h3 align="center">Edit Show</h3>
             <form method="post" action="update_show.php">
             <table align="center" >
             <tr>
             <td>Movie Name</td>
             <td><input type="text" name="mo_name" id="mo_name" class="input" value="<? echo $mo_name ?>"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Show Date</td>
             <td><input type="text" class="input" name="emailId" value="<? echo $sh_date ?>"/></td>
             <td></td>
             </tr>
            
             <tr>
             <td align="center" ><input type="reset" name="ok" id="okbtn" value="Reset" class="button"/></td>
             <td align="center" ><input type="submit" name="ok" id="okbtn" value="Update" class="button"/></td>
             <td></td>
             </tr>
             
             
             
             </table>
             
             </form>
        </div>
</div>
    </body>
</html>

