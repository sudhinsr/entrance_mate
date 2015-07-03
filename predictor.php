<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rank Predictor</title>

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<script src="js/predictor.js"></script>

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
      	<li><a href="instruction.php">Exam</a></li>
        <li><a href="rank.php">Rank List</a></li>
        <li class="active"><a href="predictor.php">Predictor</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>





</head>






<body style="background-color: #FFF">


<h2><p class="head-card" style="height:100"><b>Rank Predictor</b></p></h2><br />


<div class="instruction-card">

Enter your KEAM rank:<input id="box1" maxlength="5" min="0" required type="text">
Select the Course you need:
<select id="box2">
  <option>AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option>AG</option>
  <option>AO</option>
  <option>AR</option>
  <option>AU</option>
  <option>BM</option>
  <option>BT</option>
  <option>CE</option>
  <option>CH</option>
  <option>CS</option>
  <option>DS</option>
  <option>EC</option>
  <option>EE</option>
  <option>EI</option>
  <option>FE</option>
  <option>FS</option>
  <option>FT</option>
  <option>IC</option>
  <option>IE</option>
  <option>IT</option>
  <option>MA</option>
  <option>ME</option>
  <option>MP</option>
  <option>MR</option>
  <option>MT</option>
  <option>PO</option>
  <option>PE</option>
  <option>PT</option>
  <option>SB</option>
</select><br><br>
<div align="center">
<button class="btn btn-primary" onclick="myfunction(1)">Submit</button>
</div>

<div id="space1" style="text-align: center;"></div>
<div id="space2" style="text-align: center;"></div>
<div id="space3" style="text-align: center;"></div>
<div id="space4" style="text-align: center;"></div>

</div>
<br>
<br>
<div class="instruction-card" align="center">
Do you want to know, you can get allotment on a specific college . Then use the below tool . You can search for a specific college 
with the course you need . College Predictor will find you can get that college or not .
<br>
 Enter your KEAM rank <input id="box3" maxlength="5" min="0" required type="text"><br>
 Select the Course you need&nbsp;&nbsp;

<select id="box4">
  <option>AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option>AG</option>
  <option>AO</option>
  <option>AR</option>
  <option>AU</option>
  <option>BM</option>
  <option>BT</option>
  <option>CE</option>
  <option>CH</option>
  <option>CS</option>
  <option>DS</option>
  <option>EC</option>
  <option>EE</option>
  <option>EI</option>
  <option>FE</option>
  <option>FS</option>
  <option>FT</option>
  <option>IC</option>
  <option>IE</option>
  <option>IT</option>
  <option>MA</option>
  <option>ME</option>
  <option>MP</option>
  <option>MR</option>
  <option>MT</option>
  <option>PO</option>
  <option>PE</option>
  <option>PT</option>
  <option>SB</option>
</select><br />
college code:&nbsp<input id="box5" maxlength="3" min="0" required type="text"><br /><br />

<button class="btn btn-primary" onclick="myfunction(2)">Submit</button><br>
<div id="space5" style="text-align: center;"></div>
<div id="space6" style="text-align: center;"></div>
<div id="space7" style="text-align: center;"></div>
<div id="space8" style="text-align: center;"></div>

</div>






<script>

</script>







</body>



<div class="footer-copyright" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Copyright 2015. Design by <a href="http:\\cecoline.edu">CEC</a></p>
				
		</div>
	</div>
</div>

</html>