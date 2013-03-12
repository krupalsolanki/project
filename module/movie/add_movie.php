<html>
<head>
    <title>
        Add Movie
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
                        
             <h3 align="center">Add Movie</h3>
             <form method="post" action="add_movie_process.php" enctype="multipart/form-data">
             <table align="center" >
             <tr>
             <td>Name</td>
             <td><input type="text" name="mo_name" class="input" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Release Date</td>
             <td><input type="text" class="input" name="mo_release_date" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Movie Duration</td>
             <td><input type="text" class="input" name="mo_duration" /></td>
             <td></td>
             </tr>
             
             <tr>
             <td>Movie Details</td>
             <td><textarea class="input" name="mo_details" ></textarea></td>
             <td></td>
             </tr>
             
	     <tr>
             <td>Movie Review Link</td>
             <td><input type="text" class="input" name="mo_link" /></td>
             <td></td>
             </tr>
	     
	     <tr>
             <td><label for="file">Filename:</label></td>
             <td><input type="file" name="file" id="file"></td>
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
