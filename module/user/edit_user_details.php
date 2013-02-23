<html>
<head>
    <title>
        Edit User
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
            $query="select * from user where uId=".$_GET[id];
	    $_SESSION['uId']=$_GET[id];
	    
	    $result= mysql_query($query);
	   
	    while($row = mysql_fetch_array($result))
	    {
		$uname=$row['username'];
		$fname=$row['first_name'];
		$lname=$row['last_name'];
		$email=$row['emailId'];
	        $gender=$row['gender'];
		$city=$row['city'];
		$phn=$row['phone_no'];
		$ut=$row['user_type'];

	    }
       ?>
        <div align="center" class="centerdiv" >
                        
             <h3 align="center">Edit User</h3>
             <form method="post" action="update_user.php">
             <table align="center" >
             <tr>
             <td>User Name</td>
             <td><input type="text" name="uname" id="ibname" class="input" value="<? echo $uname ?>"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Email ID</td>
             <td><input type="text" class="input" name="emailId" value="<? echo $email ?>"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Password</td>
             <td><input type="password" class="input" name="pass" /></td>
             <td>Re-type Password</td>
             </tr>
             
             <tr>
             <td>First Name</td>
             <td><input type="text" class="input" name="fname" value="<? echo $fname ?>"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Last Name</td>
             <td><input type="text" class="input" name="lname" value="<? echo $lname ?>"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>City</td>
             <td><select name="city" style="width:150px;">
             <option selected="selected"><? echo $city ?></option>
             <option value="mumbai">Mumbai</option>
             <option value="pune">Pune</option>
             <option value="delhi">Delhi</option>
             <option value="bangalore">Bangalore</option>
             <select/></td>
             <td></td>
             </tr>
             
             
             
             <tr>
             <td>Mobile No</td>
             <td><input type="text" class="input" name="phone_no" value="<? echo $phn ?>"></td>
             <td></td>
             </tr>
             
	     <tr>
             <td>User Type</td>
             <td><select name="user_type" style="width:150px;">
             <option selected="selected"><?
	     if($ut=="common")
	     {
		echo "common";
	     }
	     if($ut=="admin")
	     {
	     echo $ut;
	     }
	     ?></option>
             <option value="admin">Admin</option>
             <option value="common">Common</option>
	     </select></td>
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

