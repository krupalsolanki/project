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
       ?>
        <div align="center" class="centerdiv" >
                        
             <h3 align="center">Edit User</h3>
             <form method="post" action="includes/registeration_success.php">
             <table align="center" >
             <tr>
             <td>User Name</td>
             <td><input type="text" name="uname" id="ibname" class="input" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Email ID</td>
             <td><input type="text" class="input" name="emailId" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Password</td>
             <td><input type="password" class="input" name="pass" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Confirm Password</td>
             <td><input type="password" class="input"  /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>First Name</td>
             <td><input type="text" class="input" name="fname"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Last Name</td>
             <td><input type="text" class="input" name="lname"/></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Gender</td>
             <td><input type="radio" name="gender" id="gender" value="m"/>Male
             <input type="radio" name="gender" id="gender" value="f"  />Female</td>
             
             <td></td>
             </tr>
             
             <tr>
             <td>City</td>
             <td><select name="city" style="width:150px;">
             <option selected="selected">Select City</option>
             <option value="mumbai">Mumbai</option>
             <option value="pune">Pune</option>
             <option value="delhi">Delhi</option>
             <option value="bangalore">Bangalore</option>
             <select/></td>
             <td></td>
             </tr>
             
             
             
             <tr>
             <td>Mobile No</td>
             <td><input type="text" class="input" name="phone_no"/></td>
             <td></td>
             </tr>
             
	     <tr>
             <td>User Type</td>
             <td><select name="user_type" style="width:150px;">
             <option selected="selected">Type of User</option>
             <option value="admin">Admin</option>
             <option value="common">Common</option>
	     </select></td>
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

