<?php
session_start();
if (isset($_SESSION['access'])){
	require 'dbconfig.php';
	if($_SESSION['access']=="granted")
	{
		$_SESSION['access']="granted";



$strSQL = mysqli_query($connection, " select * from questions " );
if(isset($_POST['question_id']))
{
	$qn_delete=mysqli_query($connection, " delete from questions where question_id=".$_POST['question_id']);
if($qn_delete )	{	
echo "<div align='center'><h3> ".$_POST['question_id']." deleted </h3></div>";
?>
<META HTTP-EQUIV="refresh" CONTENT="1;URL=qndelete.php">	
<?php
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question Delete</title>


<link rel="stylesheet" href="../css/bootstrap.mini.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />



</head>


<body style="background-color: #FFF">

<h2><p class="jumbotron" align="center"><b>Question Delete</b></p></h2>
<div align="right" style="margin:10px">
 <a href="login.php">AdminHome</a>|
<a href="../logout.php">logout</a>
</div>




</br>
</br>
<form action="" method="post">
<table width="80%" align="center" border="1">
  <tr>
    <td>question_id</td>
    <td>question</td>		
    <td>optionA</td>
	<td>optionB</td>
    <td>optionC</td>
    <td>optionD</td>
    <td>answer</td>
    <td>delete</td>
  </tr>
  <tbody>
 <?php while($Result = mysqli_fetch_array($strSQL)){ ?>
  <tr>
	<td><?php echo $Result['question_id']; ?></td>
	<td><?php echo $Result['question']; ?></td>
	<td><?php echo $Result['optionA']; ?></td>
	<td><?php echo $Result['optionB']; ?></td>
	<td><?php echo $Result['optionC']; ?></td>
	<td><?php echo $Result['optionD']; ?></td>
	<td><?php echo $Result['answer']; ?></td>
    <td><button type="submit" name="question_id" class="btn" value=<?php echo $Result['question_id']; ?> >delete</button></td>
  </tr>
  <?php } ?>
  </tbody>
</table>
</form>




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