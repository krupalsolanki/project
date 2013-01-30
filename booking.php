<html>
<head>
    <title>
        Login
    </title>
        
  <link rel="stylesheet" type="text/css" href="includes/stylesheet.css" />
</head>
   
    <body>
       <?php
      
       include 'header.php';
       ?>

            <form method="post">
            <h1 align="center">Book Ticket</h1>
            <table align="center" cellpadding="5px">
            
            <tr>
            
            <td>
            <select name="State" style="width:125px;">
            <option selected="selected">Select State</option>
            <option value="Kar">Karnataka</option>
            <option value="Mah">Maharashtra</option>
            <option value="Guj">Gujarat</option>
            </select>
            </td>
            
            
            <td>
            <select name="City" style="width:125px;">
            <option selected="selected">Select City</option>
            <option value="Kar">Hubli</option>
            <option value="Mah">Mumbai</option>
            <option value="Guj">Ahemdabad</option>
            </select>
            </td>
            
            </tr>
            
            
            
            
            <tr>
            
            <td>
            <select name="Cinema" style="width:125px;">
            <option selected="selected">Select Multiplex</option>
            <option value="Nucleus">Nucleus Mall</option>
            <option value="Esquare">E Square</option>
            <option value="Oasis">Oasis Mall</option>
            </select>
            </td>
            
            
            <td>
            <select name="Movie" style="width:125px;">
            <option selected="selected">Select Movie</option>
            <option value="Raaz3">Raaz 3</option>
            <option value="Inkar">Inkar</option>
            <option value="MumbaiMirror">Mumbai Mirror</option>
            </select>
            </td>
            
            </tr>
            
            <tr>
            
            <td>
            <select name="Date" style="width:125px;">
            <option selected="selected">Select Show Date</option>
            <option value="7aug">7th Aug</option>
            <option value="11jun">11th June</option>
            <option value="23jun">23rd June</option>
            </select>
            </td>
            
            
            <td>
            <select name="Time" style="width:125px;">
            <option selected="selected">Select Show Time</option>
            <option value="1screen2">01:00pm Screen2</option>
            <option value="10screen1">10:00pm Screen1</option>
            <option value="4screen5">4:00pm Screen5</option>
            </select>
            </td>
            
            </tr>
            
            <tr>
            
            <td>
            <select name="Class" style="width:125px;">
            <option selected="selected">Select Class</option>
            <option value="Silver">Silver(Rs. 180)</option>
            <option value="Gold">Gold(Rs. 250)</option>
            <option value="Platinum">Platinum(Rs. 400)</option>
            </select>
            </td>
            </tr>
            
            
            <tr>
            <td>
            Number Of People: <input type="text" name="NumOfPeople" size="2">
            </td>
            </tr>
            
            
            <tr>
            <td>
            <input type="submit" value="Book Now" class="button">
            </td>
            </tr>
            
            
            </table>
            </form>

    </body>
</html>