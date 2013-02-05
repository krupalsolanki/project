<html>
<head>
    <title>
        Login
    </title>
        
  <link rel="stylesheet" type="text/css" href="includes/stylesheet.css" />
</head>
   
    <body>
       <?php
	require_once 'config.php';
	include BASE_PATH .'/includes/header.php';
       ?>
       
<form action="module/login/process.php" method="post">
<table align="center">
<tr>
<td>Username</td>
<td><input type="text" name="username" id="username" /></td>
<td></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" id="password" /> </td>
<td><p style="display:none" > Invalid Username Password</p></td>
</tr>
<tr>
<td></td>
<td align="right" ><input type="submit" name="ok" id="okbtn" value="Submit" class="button"/></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td><img src="images/movie-reel.jpg" align="right" height="200px"/>
</td>
</tr>


</table>
</form>
</div>
    </body>
</html>
