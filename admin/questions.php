<?php
session_start();
if (isset($_SESSION['access'])){
	require 'dbconfig.php';
	if($_SESSION['access']=="granted")
	{
		$_SESSION['access']="granted";
	
$message="";
 
if(isset($_POST['action']))
{          
    if($_POST['action']=="insert")
    {
        $question_id = mysqli_real_escape_string($connection,$_POST['question_id']);
        $question = mysqli_real_escape_string($connection,$_POST['question']);
        $optionA = mysqli_real_escape_string($connection,$_POST['optionA']);
        $optionB = mysqli_real_escape_string($connection,$_POST['optionB']);
        $optionC = mysqli_real_escape_string($connection,$_POST['optionC']);
        $optionD = mysqli_real_escape_string($connection,$_POST['optionD']);
        $answer = mysqli_real_escape_string($connection,$_POST['answer']);
        $strSQL = mysqli_query($connection,"insert into questions (question_id,question,optionA,optionB,optionC,optionD,answer) values ('".$question_id."','".$question."','".$optionA."','".$optionB."','".$optionC."','".$optionD."','".$answer."')");
      
        
        if ($strSQL)
         {
             
			$strSQL2 = mysqli_query($connection,"select question_id from questions where question='".$question."' and optionA='".$optionA."' and optionB='".$optionB."' and optionC='".$optionC."' and optionD='".$optionD."' and answer='".$answer."'") ;
        	$Results = mysqli_fetch_array($strSQL2);
			
			$question_id = $Results['question_id'];
			 
			
			if($strSQL2)
			{
			echo "Inserted";
			}
			 
         }
         else
         {
              $message = " Input not correct. Please make sure all required fields are filled out correctly";
         }
        
    }
}
?>






<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.mini.css" type="text/css" />

        <title>Online Entrance-Question </title>
    </head>


          <div class="jumbotron" align="center"> <h2>Questions</h2><br></div>
          
          <div align="right" style="margin:10px">
     
     <a href="login.php">AdminHome</a>|
     <a href="../logout.php">Logout</a>
    </div>
    <br>
    <br>

          

	<form action="" method="post">
		
			<table width="80%"  border="1" align="center">



			<tr>
			<td>Enter Question id</td>
   			<td><input type="text" size="100" name="question_id" placeholder="question_id" /></td>
            </tr>
			<tr>
            <td>Enter Question</td>
             <td><textarea name="question" cols="100" placeholder="question" /></textarea></td>
            </tr>
			<tr>
            <td>optionA</td>
            <td><input type="text" name="optionA" size="100" placeholder="optionA" /></td>
           	</tr>
      <!--       <input type="text" id="address" class="form-control input-sm chat-input" placeholder="Address" />
            </br> -->

              <td>optionB</td>
            <td><input type="text" name="optionB" size="100" placeholder="optionB" /></td>
           	</tr> 
             <td>optionC</td>
            <td><input type="text" name="optionC" size="100" placeholder="optionC" /></td>
           	</tr>
             <td>optionD</td>
            <td><input size="100" type="text" name="optionD" placeholder="optionD" /></td>
           	</tr>           
            <tr>
            <td>Answer</td> 
            <td><input size="100"type="text" name="answer" placeholder="answer" /></td>
            </tr>


</table>

            
            </br>



<div align="center">
            <input type="submit" name="action" class="btn" value="insert">
             </div>
         
            



</form>






                <div class="text-danger text-center"> <?php echo $message; ?> </div>








</body>
<br>
<br>


<div class="footer-copyright navbar-fixed-bottom" align="center">
    <div class="container">
        <div class="span 12">
                
                <p>&#169; Copyright 2015. Design by <a href="ceconline.edu\">CEC</a></p>
                
        </div>
    </div>
</div>


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
