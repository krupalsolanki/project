<html>
<head>
    <title>
        Booking Process
    </title>
        
   <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?>
    <script language="javascript">
var xmlHttp
function selectshow(str)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
  
var url="select_sh_time.php";
var numPeople = document.getElementById("numPeople").value
url=url+"?date="+str+"&numPeople="+numPeople;

xmlHttp.onreadystatechange=dateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function dateChanged()
{
if (xmlHttp.readyState==4)
{
document.getElementById("sh_time").innerHTML=xmlHttp.responseText;
}
}


function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}

</script>

</head>
   
    <body>
       <?php
	include BASE_PATH .'/includes/header.php';
        require_once BASE_PATH.'/includes/connection.php';
        session_start();
        $mo_id=$_SESSION['mo_id']=$_GET['mo_id'];
        $mu_id=$_SESSION['user_mu_id'];
        $query="select * from movie where mo_id=$mo_id";
        
        $result=mysql_query($query);
                   
                    while($row = mysql_fetch_array($result))
                    {    
                    $movieImg=movieImgAddress($row['mo_image_location']);
                    }
       ?>
       
<form action="module/login/process.php" method="post">
    <div id="menu" class="leftdiv">
    <?php echo "<img src=\"$movieImg\" />" ?> 
    </div>


<div align="center" class="centerdiv" style="height: auto">
    <h1>Book Tickets</h1>
	
        <table align="center" cellpadding="10px">
        <tr><td>Number Of People: <input type="text" id="numPeople" name="NumOfPeople" value="2" size="2"></td></tr>
        <tr><td>Date of Movie : <select name="sh_date" onchange='selectshow(this.value)'>
        <option selected=selected>show Date</option>
                    <?php
                    $query="select * from shows where mu_id=$mu_id and mo_id=$mo_id";
                    $result=mysql_query($query);
                    $num_rows = mysql_num_rows($result);
                    while(($row = mysql_fetch_array($result)) && ($num_rows<4))
                    {
                    echo "<option value=\"".$row['sh_date']."\">".$row['sh_date']."</option>";
                    }
                   
                    ?>
                    </select>
        </td></tr>
        <tr><td><div name="sh_time" id="sh_time" style="height: 23px;">
                    Select Show Time : <select name="show_time" >
                    <option>Select Date</option>
                    </select>
                    </div></td></tr>
        
        <tr>
		<td colspan="2" align="center"><input type="submit" name="ok" id="okbtn" value="Book Ticket" class="button"/></td>
	      </tr>
	</table>   
</div>
</form>
</div>

    </body>
</html>
