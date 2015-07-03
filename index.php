<?php
session_start();
ob_flush();
$message="";
require 'admin/dbconfig.php';



if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        /*$email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);*/
		extract($_POST);
        $strSQL = mysqli_query($connection,"select fname,user_id from users where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $message = $Results['fname']." Login Sucessfully!!";
			//$_SESSION['q_id']=001;
			$_SESSION['user_id']=$Results['user_id'];
?>
			<META HTTP-EQUIV="refresh" CONTENT="1;URL=instruction.php">            
<?php
       
		}
        else
        {
            $message = "Invalid email or password!!";
        
		}        
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Entrance-Login</title>



		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />    


	<br />
		
<div style="margin:20"
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Entrance Mate</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php">signup</a></li>
        <li><a href="rank.php">Rank List</a></li>
        <li><a href="predictor.php">Predictor</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>



</head>

<body class="">
<br>
<br>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="" method="post">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
  <div class="text-danger text-center"> <?php echo $message; ?> </div>
    <input type="submit" name="action" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    • <a href="signup.php">Register</a> • <!--<a href="#">Forgot Password</a>-->
  </div>
</div>


 

</body>



<div class="footer-copyright navbar-fixed-bottom" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Copyright 2015. Design by <a href="http:\\ceconline.edu">CEC</a></p>
				
		</div>
	</div>
</div>


</html>
<?php
?>