<?php
session_start();
ob_flush();
require 'admin/dbconfig.php';


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rank List</title>

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
       <!-- <li class="active"><a href="instruction.php">Exam</a></li>
        <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="rank.php">Rank List</a></li>
        <li><a href="predictor.php">Predictor</a></li>
        <li><a href="instruction.php">Exam</a></li>
        <li><a href="logout.php">Home</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>








</head>


<body style="background-color: #FFF">

<h2><p class="head-card"><b>Rank List</b></p></h2>

<br />







<table width="70%" align="center" border="1">
  <tr>
    <td><strong>Rank</strong></td>
    <td><strong>Name</strong></td>		
    <td><strong>Mark</strong></td>
  </tr>
  <tbody>
 <?php
 $strSQL = mysqli_query($connection, " select * from mark_list order by sum desc" );
 $x=1;
 while($Result = mysqli_fetch_array($strSQL) or die (mysqli_error($connection))){ ?>
  <tr>

	<td><strong><?php echo $x; ?></strong></td>
	<td><strong><?php 
	
	$strSQL1 = mysqli_query($connection, " select fname,lname from users where user_id='$Result[user_id]'" );
	$Result1 = mysqli_fetch_array($strSQL1);
	echo $Result1['fname']."&nbsp;".$Result1['lname'];
	?></strong></td>
	<td><strong><?php echo $Result['sum']; ?></strong></td>
    
  </tr>
  <?php $x++;} ?>
  </tbody>
</table>









</body>


<div class="footer-copyright" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Copyright 2015. Design by <a href="http:\\cecoline.edu">CEC</a></p>
				
		</div>
	</div>
</div>

</html>
