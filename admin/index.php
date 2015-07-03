<?php
session_start();
ob_flush();
$msg="";
require 'dbconfig.php';

if (isset($_POST['admin_access']))
{
	if($_POST['admin_access']=='login')
	{
		$admin_username= mysqli_real_escape_string($connection,$_POST['admin_username']);
		$admin_password= mysqli_real_escape_string($connection,$_POST['admin_password']);
		$strSQL = mysqli_query($connection,"select * from admin where admin_username='".$admin_username."' and admin_password='".$admin_password."'");
        $Results = mysqli_fetch_array($strSQL);
		if(count($Results)>=1)
        {
			$msg= $Results['admin_username']." Login Sucessfully!!";
			$_SESSION['access']="granted";
?>
			<META HTTP-EQUIV="refresh" CONTENT="1;URL=login.php">            
<?php
       
		}
        else
        {
          $msg="Invalid Access!!";
       
		}        
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrative Login</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.mini.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<body class="">
</br>
</br>
<div align="center" class="login-card">
<h1>Admin</h1></br>
<form action="" method="post">
<input type="text" name="admin_username" placeholder="Username" /></br>
<input type="password" name="admin_password" placeholder="Password" />
<div class="text-danger"><?php echo $msg; ?></div>
<input type="submit" class="btn btn-success" name="admin_access" value="login">
</form>
</div>
</body>
</html>