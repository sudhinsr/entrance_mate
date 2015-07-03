<?php
session_start();
if (isset($_SESSION['access'])){
	require 'dbconfig.php';
	if($_SESSION['access']=="granted")
	{
		$_SESSION['access']="granted";
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>

<link rel="stylesheet" href="../css/bootstrap.mini.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />

</head>

<body style="background-color: #FFF">

<h2><p class="jumbotron" align="center"><b>Welcome to Admistrative Area</b></p></h2>
<div align="right" style="margin:10px"><a href="../logout.php">logout</a></div>

<div class="container">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4" align="left">
<div style="color: #000">
<li><h4><a href="qndelete.php">Delete Question</a></h4></li>
<li><h4><a href="questions.php">Add Questions</a></h4></li>
<li><h4><a href="user_delete.php">User Delete</a></h4></li>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
<?php
	}
}
else
{
	?>
    <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
	<?php
}
	?>