<?php
session_start();
ob_flush();
require 'admin/dbconfig.php';
if(isset($_SESSION['user_id'])) {


$strSQL = mysqli_query($connection, " select * from questions " );
        $Results = mysqli_fetch_array($strSQL);
		$_SESSION['question_id']= $Results['question_id'];



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

<h2><p class="head-card" style="height:100"><b>Instructions</b></p></h2>
<br />
<div class="instruction-card">
<ul style="list-style-type: square">
  <li>You are provided with a set of questions which should be answered in the timrlimit of 60 minutes provided</li>
  <li>You have the privilage to answer any question without any order</li>
   <!--<img src="/image/ins.png" alt="exam page" style="width:804px;height:448px">
  -->
  <li>In the right end of the page, you are able to see a box containung certain blocks marked 1,2,3..which points to the question numbers</li>
  <li>You can select the question just by selecting the appropriate question number from the block</li>
  <li>Once you have submitted the answer,the block turns into green color</li>
  <li>Once you have submitted the answer,the block turns into green color</li>
  <li>If you want to change the answer later,press the view later button which in turn makes the corresponding block into red color</li>
  <li>You are also provided with previous and next buttons to select the appropriate question and to confirm your answer,press submit button</li>
  <li> No malpractises are supported. If any is found,the admin of the page have the privilage to remove you</li>
  <li>You will not be able to continue the exam after you press the finish button"</li>
</ul>

<div class="" align="center">
<a class="btn btn-primary" href="exam.php"> Submit</a>
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
}
else
{
	?>
    <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
    <?php
}
?>
