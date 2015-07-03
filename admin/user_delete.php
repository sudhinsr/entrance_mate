<?php
session_start();
if (isset($_SESSION['access'])){
	require 'dbconfig.php';
	if($_SESSION['access']=="granted")
	{
		$_SESSION['access']="granted";


$strSQL = mysqli_query($connection, " select * from users " );
if(isset($_POST['user_id']))
{
	
		$mrk_delete=mysqli_query($connection, " delete from mark_list where user_id=".$_POST['user_id'] );
	$usr_delete=mysqli_query($connection, " delete from users where user_id=".$_POST['user_id']);
			$mrk_delete1=mysqli_query($connection, " delete from answers where user_id=".$_POST['user_id'] );

if($usr_delete && $mrk_delete)	{	
echo $_POST['user_id']." deleted";
?>
<META HTTP-EQUIV="refresh" CONTENT="1;URL=user_delete.php">	
<?php
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Delete</title>



<link rel="stylesheet" href="../css/bootstrap.mini.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />



</head>


<body style="background-color: #FFF">

<h2><p class="jumbotron" align="center"><b>User Delete</b></p></h2>
<div align="right" style="margin:10px">
 <a href="login.php">AdminHome</a>|
<a href="../logout.php">logout</a>
</div>



<form action="" method="post">
<table width="80%" align="center" border="1">
  <tr>
    <td>user_id</td>
    <td>fname</td>		
    <td>lname</td>
	<td>email</td>
    <td>phone</td>
    <!--<td>optionD</td>
    <td>answer</td>-->
    <td>delete</td>
  </tr>
  <tbody>
 <?php while($Result = mysqli_fetch_array($strSQL)){ ?>
  <tr>
	<td><?php echo $Result['user_id']; ?></td>
	<td><?php echo $Result['fname']; ?></td>
	<td><?php echo $Result['lname']; ?></td>
	<td><?php echo $Result['email']; ?></td>
	<td><?php echo $Result['phone']; ?></td>
    <td><button type="submit" name="user_id" class="btn" value=<?php echo $Result['user_id']; ?> >delete</button></td>
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