<?php
session_start(); 
require 'admin/dbconfig.php';
if(isset($_SESSION['question_id']) && isset($_SESSION['user_id']))
{
	
	
		function buttonColor($Clr , $flag){
		if($flag==1){
			echo "btn btn-danger";				
		}
		else if($Clr == -1 || $Clr == 4)
		{
			echo "btn btn-success";
		}
		else
		{
			echo "btn";
		}

		
		}
	
			
			
		
	
		if(isset($_POST['select_id']))
		{
			$_SESSION['question_id']=$_POST['select_id'];
		}
		
		
		$user_id = $_SESSION['user_id'];
		$_SESSION['user_id']=$user_id;
 		$strSQL = mysqli_query($connection, " select * from questions " );
        $Results = mysqli_fetch_array($strSQL);
		$q_max=mysqli_num_rows($strSQL);
		$cur_q_id= $Results['question_id'];
		$beg_q_id=$cur_q_id;
		$strSQL1 = mysqli_query($connection, " select * from mark_list where user_id =".$user_id."" );
		$Results = mysqli_fetch_array($strSQL1);
		
		if($Results['time']==0)
		{
			
			$tme=time()+(60*$q_max);
		$sql4="update mark_list set time ='$tme' where user_id= '$user_id'";
		mysqli_query($connection, $sql4) or die(mysqli_error($connection));
		}
		$strSQL1 = mysqli_query($connection, " select * from mark_list where user_id =".$user_id."" );
		$Results = mysqli_fetch_array($strSQL1);
		//echo $Results['time']-time();
		$tn=$Results['time']-time();
		$q_max= $q_max + $cur_q_id-1;
		?>
        <script>
		setTimeout(function(){window.location.href='result.php'},<?php echo $tn*1000;  ?>);
		</script>
		<?php


if(isset($_POST['action']))
{         

		 if($_POST['action']=="next")
    {
		if($q_max > $_SESSION['question_id']){
		$_SESSION['question_id']++;}
		
	}
	else if($_POST['action']=="prev")
    {
		if($beg_q_id < $_SESSION['question_id']){
		$_SESSION['question_id']--;}
		
	}

	else if($_POST['action']=="submit")
    {
		if(isset($_POST['user_option']))
		{
		$query="select * from questions where question_id = ".$_SESSION['question_id'];
		$query_exicute=mysqli_query($connection , $query);
		$values=mysqli_fetch_assoc( $query_exicute);

		
		$mark=0;
		 if ($_POST['user_option'] == $values['answer'])
		 {
			$mark= 4;
		 }
		 else if ($_POST['user_option'] != $values['answer'])

		 {
			$mark= -1;
		 }
		
		$flag=0;
		if (isset($_POST['flag']))
		{
			$flag=1;
		}
		
		
		$sql1=mysqli_query($connection," select * from answers where user_id ='$user_id' and question_id='$_SESSION[question_id]'") or die(mysqli_error($connection));
		$excute=mysqli_fetch_array($sql1);
		
		if (count($excute) >= 1)
		{

		 $sql="update answers set answer ='$_POST[user_option]',mark='$mark', flag='$flag',c_answer='$values[answer]' where user_id= ".$user_id." and question_id=".$_SESSION['question_id']."";
		mysqli_query($connection, $sql) or die(mysqli_error($connection)."1");
		}
		
		else
		{
			
		$sql="insert into answers (user_id,question_id,answer,mark,flag,c_answer) values ('$user_id','$_SESSION[question_id]','$_POST[user_option]','$mark','$flag','$values[answer]')";
		mysqli_query($connection, $sql) or die(mysqli_error($connection)."2");
			
		}
		
		
		
		
		}
	}
}

		$sql4=mysqli_query($connection," select fname from users where user_id ='$user_id'") or die(mysqli_error($connection));
		$name=mysqli_fetch_array($sql4);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Entrance-Exam</title>



		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
		<script src="js/countdown.js" type="text/javascript"></script>



		
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


<br>
<br>


<div class="container">
<div class="row">
<div class="col-sm-8" align="left">



<?php

		



$query="select * from questions where question_id = ".$_SESSION['question_id'];
$query_exicute=mysqli_query($connection , $query);
$values=mysqli_fetch_assoc( $query_exicute);
//$_SESSION['answer']=$values['answer'];

echo "<h3> Question no:".$_SESSION['question_id']."/".$q_max."</h3>";



echo "<h2>".$values['question']."</h2>";
?>


<form action="" method="post">
	<input type="radio" name="user_option" value= <?php echo "'".$values['optionA']."'"; ?> >A. <?php echo $values['optionA']; ?><br>
    <input type="radio" name="user_option" value= <?php echo "'".$values['optionB']."'"; ?> >B. <?php echo $values['optionB']; ?><br>
    <input type="radio" name="user_option" value= <?php echo "'".$values['optionC']."'"; ?> >C. <?php echo $values['optionC']; ?><br>
    <input type="radio" name="user_option" value= <?php echo "'".$values['optionD']."'"; ?> >D. <?php echo $values['optionD']; ?><br><br>
    <input type="checkbox" name="flag" value=1 >View Later<br><br>
    <input type="submit" name="action" class="btn" value="prev">
    <input type="submit" name="action" class="btn" value="submit">
    <input type="submit" name="action" class="btn" value="next">
    
 </form>
    
</div>

<br>
<br>
<br>







<div class="col-sm-4" align="right">


<script type="application/javascript">
function myfn(t)
{var myCountdown2 = new Countdown({
									time: t, 
									width:150, 
									height:80, 
									rangeHi:"minute"	// <- no comma on last item!
									});
}

myfn(<?php echo $tn; ?>);
</script>
<br />
<br />


       <form action="exam.php" method="post">

<table border="0">

        <tbody>
        <?php
	
		
			
		while ( $cur_q_id <= $q_max )
				{
					
				
					
					?>
		  	<tr>
            	<?php 
				$l=0;
				while( $l < 4 && $cur_q_id <= $q_max ){
					
					$sql3=mysqli_query($connection," select * from answers where user_id ='$user_id' and question_id='$cur_q_id'") or die(mysqli_error($connection));
		$execute=mysqli_fetch_array($sql3);
					
					
					 ?>
                <td>
               <button type="submit" name="select_id"  class='<?php buttonColor($execute['mark'],$execute['flag']); ?>' value= <?php echo $cur_q_id; ?> > 
				   <?php 
				  echo $cur_q_id;
				  $cur_q_id++; ?> 
                </button>
                </td>
                <?php $l++; } ?>
			</tr>
    		<?php } ?>
        </tbody>
    </table>

</form>

  <br />
  <br />
  <div style="margin-right:20">
  <a href="result.php">  <input type="submit" class="btn btn-warning" value="&nbsp;&nbsp;&nbsp;&nbsp;Finish&nbsp;&nbsp;&nbsp;&nbsp;"></a>
	</div>
</div>
</div>
</div>
</div>






<div class="footer-copyright" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Copyright 2015. Design by <a href="http:\\cecoline.edu">CEC</a></p>
				
		</div>
	</div>
</div>




<?php
}
else
{
	?>
	<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">	
	<?php
}
?>
</html>
