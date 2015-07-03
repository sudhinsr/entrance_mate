<?php
session_start();
ob_flush();
require 'admin/dbconfig.php' ;
$message="";
 
if(isset($_POST['action']))
{          
    if($_POST['action']=="Sign up")
    {
		extract ($_POST);
		/*$fname = mysqli_real_escape_string($connection,$_POST['fname']);
        $lname = mysqli_real_escape_string($connection,$_POST['lname']);
		$phone = floatval(mysqli_real_escape_string($connection,$_POST['phone']));
		$email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);*/
		$strSQL1 = mysqli_query($connection,"insert into users (fname,lname,email,phone,password) values ('".$fname."','".$lname."','".$email."','".$phone."','".md5($password)."')");
      
		
		if ($strSQL1)
		 {
			
			 echo "Inserted";
			 
			 
			$strSQL2 = mysqli_query($connection,"select user_id from users where email='".$email."' and password='".md5($password)."'") ;
        	$Results = mysqli_fetch_array($strSQL2);
			//echo $Results['user_id'];
			
			$strSQL3 = mysqli_query($connection,"insert into mark_list (user_id,mark1,mark2,mark3) values ('$Results[user_id]','$mark1','$mark2','$mark3')");

			
		
			 
			 unset($_POST);
			 
			 ?>
             <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
             <?php
		 
		 }
		 else
		 {
			  $message = " Input not correct. Please make sure all required fields are filled out correctly";
		 }
		
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Entrance-Sign up</title>



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
        <li><a href="rank.php">Rank List</a></li>
        <li><a href="predictor.php">Predictor</a></li>
       	<li><a href="logout.php">Home</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>




	</head>


<SCRIPT LANGUAGE="JavaScript">
function check() {
fn=document.form1.fname.value;
if (fn.length<1) {
alert("Please Enter First Name");
document.form1.fname.focus();
return false;
}
ln=document.form1.lname.value;
if(ln.length<1) {
alert("Please Enter Last Name");
document.form1.lname.focus();
return false;
}
pn=document.form1.phone.value;
if(pn.length<9) {
alert("Please Enter Phone no");
document.form1.phone.focus();
return false;
}
pw=document.form1.password.value;
if(pw.length<6) {
alert("Password must be above 6 chara");
document.form1.password.focus();
return false;
}
repw=document.form1.repassword.value;
if(repw != pw) {
alert("Password not matching");
document.form1.password.focus();
return false;
}

return true
}
</script>


<br>
<br>

	<div class="login-card">
        	<h1>Sign-up</h1><br>
            	<form name="form1"action="" method="post" onsubmit="return check();">

   
             <input type="text" name="fname" class="form-control input-sm chat-input" placeholder="First name" />

             <input type="text" name="lname" class="form-control input-sm chat-input" placeholder="Last Name" />
            </br>

            <input type="email" name="email" class="form-control input-sm chat-input" placeholder="Email" />
            </br>
            
      <!--       <input type="text" id="address" class="form-control input-sm chat-input" placeholder="Address" />
            </br> -->

             <input type="text" name="phone" class="form-control input-sm chat-input" size="10" maxlength="10" placeholder="Phone" />
            </br>
	

			<input type="text" name="mark1"  placeholder="mark" />
            <input type="text" name="mark2"  placeholder="mark" />
            <input type="text" name="mark3" placeholder="mark" />

	</br>
    </br>
    

            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="Password" />
             <input type="password" name="repassword" class="form-control input-sm chat-input" placeholder="ReenterPassword" />
            </br>



 				<div class="text-danger text-center"> <?php echo $message; ?> </div>




			<input type="submit" name="action" class="login login-signup" value="Sign up">
             <div class="login-help">
    			<a href="index.php">Login</a>
  				</div>
            </div>
        
        </div>
    </div>
</div>



</form>














</body>
<br>
<br>


<div class="footer-copyright navbar-bottom" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Copyright 2015. Design by <a href="http:\\ceconline.edu\">CEC</a></p>
				
		</div>
	</div>
</div>


</html>

