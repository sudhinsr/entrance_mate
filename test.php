

<script src="js/countdown.js" type="text/javascript"></script>

<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>



<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


<div style="margin:20"
<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Entrance Mate</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="instruction.php">Exam</a></li>
       <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">logout</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>







<?php $tn=100; ?>

<script src="js/countdown.js" type="text/javascript"></script>


<script type="application/javascript">
function myfn(t)
{var myCountdown2 = new Countdown({
									time: t, 
									width:150, 
									height:80, 
									rangeHi:"minute"	// <- no comma on last item!
									});
}
</script>

<script type="text/javascript">
myfn(<?php echo $tn; ?>);


    // Your application has indicated there's an error
   // window.setTimeout(function(){

        // Move to a new location or you can do something else
      //  window.location.href = "https://www.google.co.in";

    //}, 10000);

//setTimeout(function(){window.location.href='form2.html'},10000);



</script>