<html>
<head>
    <title>
        Quick Book
    </title>
        
  <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
	//echo "<script type=\"text/javascript\" src=\"$address/module/booking/booking.js\"></script> ";
  ?>
    <script language="javascript">
	var xmlHttp
//var url="prev_show_status.php"
function selectcity(str)
	    {
	    xmlHttp=GetXmlHttpObject();
	    if (xmlHttp==null)
	      {
	      alert ("Your browser does not support AJAX!");
	      return;
	      }
	    
	    var url="select_multiplex.php";
	    url=url+"?city="+str;
	    xmlHttp.onreadystatechange=stateChanged;
	    xmlHttp.open("GET",url,true);
	    xmlHttp.send(null);
	    }
//function setReadOnly()
//{
//    var scid=document.getElementById("sc_id");
//    scid.readOnly="readonly";
//}

function stateChanged()
	    {
	    if (xmlHttp.readyState==4)
	    {
	    document.getElementById("multiplexdiv").innerHTML=xmlHttp.responseText;
	    }
	    }

function selectdate(dt)
{
    
//    //var url="prev_show_status.php";
//    url=url+"?sc_id="+scr;
//    //document.getElementById("url").style.display = 'block';
//    document.getElementById("sc_id").value = scr;
}

function selectmovie(str)
	    {
	    xmlHttp=GetXmlHttpObject();
	    if (xmlHttp==null)
	      {
	      alert ("Your browser does not support AJAX!");
	      return;
	      }
	     // document.getElementById("date").value = dt;
	    var url="select_movie.php";
	    url=url+"?mu_id="+str;
	    xmlHttp.onreadystatechange=multiplexChanged;
	    xmlHttp.open("GET",url,true);
	    xmlHttp.send(null);
	    }

function multiplexChanged()
{
	if (xmlHttp.readyState==4)
	{
	document.getElementById("moviediv").innerHTML=xmlHttp.responseText;
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
       ?>
        <div class="centerdiv" style="height: auto">
            <form method="post">
            <h1 align="center">Book Ticket</h1>
            <table cellspacing="10px" align="center" cellpadding="10px">
            
	    <tr>
		<td>Select Date</td>
		<td>
		    <select name="date" id="date" onchange="selectdate(this.value)">
                    <?php
                    $one = mktime(0, 0, 0, date("m"), date("d")+1, date("y"));
                    $two = mktime(0, 0, 0, date("m"), date("d")+2, date("y"));
                    $three = mktime(0, 0, 0, date("m"), date("d")+3, date("y"));
		    // echo "<option selected=\"selected\">Select Date</option>";
		    echo "<option selected=\"selected\" value=\"".date("Y-m-d")."\">".date("d-m")."</option>";
                    echo "<option value=\"".date("Y-m-d", $one)."\">".date("d-m", $one)."</option>";
                    echo "<option value=\"".date("Y-m-d", $two)."\">".date("d-m", $two)."</option>";
                    echo "<option value=\"".date("Y-m-d", $three)."\">".date("d-m", $three)."</option>"
                    ?>
	    </select>
		</td>
	    </tr>
	    <tr>    
            <td>
            <select name="city" id="city" onchange="selectcity(this.value)">
		<option selected="selected" >Select City</option>
                    <?php
                    $query = "SELECT * FROM multiplex ";
                    $result = mysql_query($query);
                    while($row = mysql_fetch_array($result))
                    {
                        echo "<option value=\"".$row['mu_city']."\">".$row['mu_city']."</option>";
                    }
                    ?>
	    </select>
            </td>
                  
            <td>
            <div id="multiplexdiv" style="height: 23px;">
                    <select name="selectmultiplex" >
                    <option>Select City First</option>
                    </select>
            </div>
            </td>
          
            </tr>
            
            </table>
	    
	    <div align="center" id="moviediv" >
            
            </div>
           
            </form>
            </div>
</div>
    </body>
</html>
