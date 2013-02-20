<html>
<head>
    <title>
        Add Shows
    </title>
    <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
    ?> 
    <script language="javascript">
var xmlHttp
var url="prev_show_status.php"
function selectmultiplex(str)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }

var url="select_screen.php";
url=url+"?mu_id="+str;

xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}
function setReadOnly()
{
    var scid=document.getElementById("sc_id");
    scid.readOnly="readonly";
}
function stateChanged()
{
if (xmlHttp.readyState==4)
{
document.getElementById("screendiv").innerHTML=xmlHttp.responseText;
}
}

function selectedscreen(scr)
{
    //var url="prev_show_status.php";
    url=url+"?sc_id="+scr;
    //document.getElementById("url").style.display = 'block';
    document.getElementById("sc_id").value = scr;
}

function selectdate(str)
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
//var url="prev_show_status.php";
url=url+"&date="+str;


xmlHttp.onreadystatechange=screenChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function screenChanged()
{
if (xmlHttp.readyState==4)
{
document.getElementById("status").innerHTML=xmlHttp.responseText;
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
   
    <body onload="setReadOnly()">
       <?php
      
       include BASE_PATH .'/includes/header.php';
       include BASE_PATH.'/includes/admin_options.php';
       require_once BASE_PATH.'/includes/connection.php';
       ?>
       
       <div align="center" class="centerdiv" >    
             <h3 align="center">Add Shows</h3>
            <form action="add_show_process.php" method="post" enctype="multipart/form-data" name="frmAjax" id="frmAjax">
            <table cellpadding="10" >
              <tr>
                <td>
                    Select Movie
                </td>
                <td>
                    <select name="mo_id" id="movie">
                    <?php
                    $query = "SELECT * FROM movie ";
                    $result = mysql_query($query);
                    while($row = mysql_fetch_array($result))
                    {
                        echo "<option value=\"".$row['mo_id']."\">".$row['mo_name']."</option>";
                    }
                    ?>
                </select>
                </td>
              </tr>
              
              <tr>
                <td>Select Multiplex</td>
                <td>
                    <select name="mu_id" id="mu_id" onchange="selectmultiplex(this.value)">
                    <?php
                        $query='select * from multiplex';
                        $result= mysql_query($query);   
                        while($row = mysql_fetch_array($result))
                        {
                            echo "<option value=\"".$row['mu_id']."\">".$row['mu_name'].", ".$row['mu_city']."</option>";
                        }
                        
                    ?>
                    </select>
                    
                    </td>
              </tr>
              <tr>
                <td>Select Screen</td>
                <td>
                    <div id="screendiv" style="height: 23px;">
                    <select name="selectscreen" >
                    <option>Select Multiplex First</option>
                    </select>
                    </div>
                    
                </td>
              </tr>
            <tr>
                <td>Select Date</td>
                <td>
                    <div id="datediv" style="height: 23px;">
                    <select name="sh_date" onchange='selectdate(this.value)'>
                    <?php
                    $one = mktime(0, 0, 0, date("m"), date("d")+1, date("y"));
                    $two = mktime(0, 0, 0, date("m"), date("d")+2, date("y"));
                    $three = mktime(0, 0, 0, date("m"), date("d")+3, date("y"));
                    $four = mktime(0, 0, 0, date("m"), date("d")+4, date("y"));
                    $five = mktime(0, 0, 0, date("m"), date("d")+5, date("y"));
		    echo "<option selected=\"selected\">Select Date</option>";
                    echo "<option value=\"".date("Y-m-d")."\">".date("d-m")."</option>";
                    echo "<option value=\"".date("Y-m-d", $one)."\">".date("d-m", $one)."</option>";
                    echo "<option value=\"".date("Y-m-d", $two)."\">".date("d-m", $two)."</option>";
                    echo "<option value=\"".date("Y-m-d", $three)."\">".date("d-m", $three)."</option>";
                    echo "<option value=\"".date("Y-m-d", $four)."\">".date("d-m", $four)."</option>";
                    echo "<option value=\"".date("Y-m-d", $five)."\">".date("d-m", $five)."</option>";
                    ?>
                    </select>
                    </div>
                    
                </td>
              </tr>
              
              <tr>
                <td align="center" colspan="2"><div id="status"></div></td>
              </tr>
	      <tr>
		<td>Time : </td>
		<td><input type="text" class="input" name="sh_time"</td>
	      </tr>
	      <tr>
		<td>Screen ID :</td>
		<td><input type="text" id='sc_id' name="sc_id" class="input" ></td>
	      </tr>
	      
	      <tr>
		<td colspan="2" align="center"><input type="submit" name="ok" id="okbtn" value="Add Show" class="button"/></td>
	      </tr>
            </table>
	    
	    
             
             </form>
       </div>
       </div>
    </body>
</html>