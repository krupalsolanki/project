
<img src="images/multiplex_logo.jpg" class="img" "/>
<div style="background-color:#d3d3d3; height:auto "><h1 align="center" style="padding-top:20px; padding-bottom:20px; margin-top:0px">Multiplex Management System</h1></div>

<div id="tabs" style="background-color:#78c7c7;  margin-top:20px; margin-bottom:20px; padding-top:10px; padding-bottom:10px">
<a class="ex2" href="home.php" >Home</a>
<a class="ex2" href=#>Admin</a>
<a class="ex2" href=#>About Us</a>
<a class="ex2" href="booking.php">Quick Book</a>

<?php
session_start();
if(isset($_SESSION['valid_id']))
{
    
   if($_SESSION['valid_id']=='authorized')
   {
    
    echo "<a class=\"ex2\" style=\"margin-right:10px; margin-left: 700px; \">Hi ".$_SESSION["valid_user"]."</a>";
    echo "|";
    echo "<a class=\"ex2\" style=\" margin-left: 10px; \" href=\"logout.php\">Logout</a>";
   }
   
}
if($_SESSION['valid_id']!='authorized')
   {
    echo "<a class=\"ex2\" style=\"margin-right:10px; margin-left: 700px; \" href=\"registeration.php\">Register</a>";
    echo "|";
    echo "<a class=\"ex2\" style=\" margin-left: 10px; \" href=\"login.php\">Login</a>";
    
}




?>
</div>
