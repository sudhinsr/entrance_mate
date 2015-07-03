<?php
session_start();
ob_flush();
require 'admin/dbconfig.php';
if(isset($_SESSION['user_id'])) {






?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>instruction</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


</head>


<body style="background-color: #FFF">

<h2><p class="jumbotron" align="center"><b>Study Materail Upload</b></p></h2>






       

	<form action="" method="post">
		
			<table width="80%"  border="1" align="center">



			<tr>
			<td>Enter Text Name</td>
   			<td><input type="text" size="100" name="tname" placeholder="Text Name" /></td>
            </tr>
			<tr>
            <td>Author</td>
            <td><input type="text" name="author" size="100" placeholder="Author" /></td>
           	</tr>
            <tr>
            <td>Choose file</td> 
            <td><input type="file" /></td>
            </tr>


</table>

            
            </br>



<div align="center">
            <input type="submit" name="action" class="btn" value="insert">
             </div>
         
            



</form>





</body>
</html>
<?php
}
else
{
	?>
    <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
    <?php
}
?>
