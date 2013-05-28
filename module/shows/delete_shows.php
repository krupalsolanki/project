<html>
<head>
    <title>
	Delete Shows
    </title>
    <?php
	require_once '../../config.php';
	include BASE_PATH.'/includes/css.php';
	echo "<script type=\"text/javascript\" src=\"$address/includes/DatePicker/tcal.js\"></script> ";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$address/includes/DatePicker/tcal.css\" /> ";
	
    ?>
	
    <script language="javascript">
var xmlHttp
var count=0
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
   
    var dateSelect=document.getElementById("date_textfield")
    dateSelect.readOnly="readonly";
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
  count++;
  if(count==2)
  {
    url=url+"&date="+str;
    alert(url);
  }
  
  

//var url="prev_show_status.php";


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
       
       <div align="center" class="centerdiv" style="height: auto">    
             <h3 align="center">Delete Shows</h3>
            <form action="delete_show_process.php" method="post" enctype="multipart/form-data" name="frmAjax" id="frmAjax">
            <table cellpadding="10" >

              <tr>
                <td>Select Multiplex</td>
                <td>
                    <select name="mu_id" id="mu_id" onchange="selectmultiplex(this.value)">
			<option selected="selected">Multiplex</option>
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
		    <input id="date_textfield"type="text" name="date" class="tcal" value="" onBlur='selectdate(this.value)'/>
                </td>
              </tr>
              
              <tr>
                <td align="center" colspan="2"><div id="status"></div></td>
              </tr>
	    </table>
             </form>
       </div>
       </div>
    </body>
</html>