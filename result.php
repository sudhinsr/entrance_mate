<?php
session_start();
ob_flush();
require 'admin/dbconfig.php';
if(isset($_SESSION['user_id'])) {
	$tm=time();
	$sql1="update mark_list set time ='$tm' where user_id= '$_SESSION[user_id]'";
		mysqli_query($connection, $sql1) or die(mysqli_error($connection));


	
	
	
	function symbol($a)
	{
		if($a==4)
		{
			echo "glyphicon glyphicon-ok green";
		}
		else if($a==-1)
		{
			echo "glyphicon glyphicon-remove red";
		}
	}






$cal=0;
$strSQL3 = mysqli_query($connection, " select sum(mark) as sum from answers where user_id='$_SESSION[user_id]'" ) or die(mysqli_error($connection));
$Result3 = mysqli_fetch_assoc($strSQL3);
$sum=$Result3['sum'];

 $sql="update mark_list set sum ='$sum' where user_id= '$_SESSION[user_id]'";
		mysqli_query($connection, $sql) or die(mysqli_error($connection));

		$sql4=mysqli_query($connection," select fname from users where user_id ='$_SESSION[user_id]'") or die(mysqli_error($connection));
		$name=mysqli_fetch_array($sql4);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

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
        <li class="active"><a href="instruction.php">Exam</a></li>
        <li><a href="rank.php">Rank List</a></li>
        <li><a href="predictor.php">Predictor</a></li>
       <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><strong> <?php echo $name['fname']; ?></strong>&nbsp;logout</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>







</head>


<body style="background-color: #FFF">

<h2><p class="head-card"><b>Result</b></p></h2>

<br />


<table width="80%" align="center" border="1">
  <tr>
    <td>Question No</td>
    <td>Question</td>		
    <td>Ur Answer</td>
	<td>Correct Answer</td>
    
    <td>Result</td>
  </tr>
  <tbody>
 <?php
 $strSQL = mysqli_query($connection, " select * from answers where user_id='$_SESSION[user_id]' order by question_id" );
 
 while($Result = mysqli_fetch_array($strSQL) or die (mysqli_error($connection))){ ?>
  <tr>
	<td><?php echo $Result['question_id']; ?></td>
	<td><?php 
	
	$strSQL1 = mysqli_query($connection, " select question from questions where question_id='$Result[question_id]'" );
	$Result1 = mysqli_fetch_array($strSQL1);
	echo $Result1['question'];
	?></td>
	<td><?php echo $Result['answer']; ?></td>
	<td><?php echo $Result['c_answer']; ?></td>
   
    
	<td> <div align="center">  <span class='<?php symbol($Result['mark']); ?>' aria-hidden="true"></span> </div></td>
  </tr>
  <?php } ?>
  </tbody>
</table>



<div class="footer-copyright" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Copyright 2015. Design by <a href="http:\\cecoline.edu">CEC</a></p>
				
		</div>
	</div>
</div>
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
