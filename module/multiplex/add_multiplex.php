<html>
<head>
    <title>
        Add Multiplex
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
       
       
        <div align="center" class="centerdiv" >
                        
             <h3 align="center">Add Multiplex</h3>
             <form method="post" action=add_multiplex_process.php>
             <table align="center" >
             <tr>
             <td>Name</td>
             <td><input type="text" name="mu_name" class="input" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>City</td>
             <td><input type="text" class="input" name="mu_city" /></td>
             <td></td>
             </tr>
				
			 <tr>
             <td>Area</td>
             <td><input type="text" class="input" name="mu_area" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Address</td>
             <td><input type="text" class="input" name="mu_address" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Screens</td>
             <td><input type="text" class="input" name="mu_screens" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td align="center" ><input type="reset" name="ok" id="okbtn" value="Reset" class="button"/></td>
             <td align="center" ><input type="submit" name="ok" id="okbtn" value="Create" class="button"/></td>
             <td></td>
             </tr>
             
             
             
             </table>
             
             </form>
        </div>
</div>
    </body>
</html>
