<!doctype html>
<html>
<head>
<link rel="icon" href="images/appLogo.png">
<meta charset="utf-8">
<title>About - EarBlaster</title>
<?php 
	session_start();
	if (isset($_SESSION["userid"])) {
		include("php/getThemeAlt.php"); 
		if ($currentTheme == 1) 
			echo '<link href="styleIndustry.css" rel="stylesheet" type="text/css">';
		else if ($currentTheme == 2) 
			echo '<link href="styleNature.css" rel="stylesheet" type="text/css">';
		else if ($currentTheme == 3) 
			echo '<link href="styleHellfire.css" rel="stylesheet" type="text/css">';
		else if ($currentTheme == 4) 
			echo '<link href="styleDeepSea.css" rel="stylesheet" type="text/css">';
		else if ($currentTheme == 5) 
			echo '<link href="styleMajestic.css" rel="stylesheet" type="text/css">';
		else if ($currentTheme == 6)
			echo '<link href="stylePlain.css" rel="stylesheet" type="text/css">';
		else 
			echo '<link href="style.css" rel="stylesheet" type="text/css">';
		}
	else 
		echo '<link href="style.css" rel="stylesheet" type="text/css">';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="goBack.js"> </script>
</head>

<body>

<!--PAGE CONTAINER-->
<div class="container">

<!-- HEADER -->
  <div class="header">
  <!--Top section-->
  <div> 
      <div class="clearfloat"> </div>
      <a href="#"><img class="headerLogo" src="images/logo.png" alt="EarBlaster Logo" width="100px" height="80px" style=" display:block;" /></a>
      <div class="clearfloat"> </div>
  <h1> EarBlaster </h1>
  </div>
  <!--End Top section-->
  
  <!--Panel-->
  <div class="panel">
    
      	<!--Back (TO INDEX) button-->
      <form class="panelItem">
        <input type="submit" value="Back" class="panelButton" style="background:url(images/back.png) no-repeat center; background-size:100px 100px;" onclick="javascript:history.back()">
      </form>
    
    
  </div>
  <!--End Panel-->
  
</div>
<!-- END HEADER -->

<!-- CONTENT -->
<div class="content">
  	<br> <br>
<div class="trackBlock">
	<p>Nicos Kasenides<br>
	nkasenides@uclan.ac.uk<br>
	BSc Computing<br>
	UCLan Cyprus - 2016<br>
	CO1706 - Interactive Applications<br>
</div>

</div>
<!-- END CONTENT-->
  
  
<!-- FOOTER -->
  <div class="footer">
    <p>Designed by Nicos</p>
  </div>
<!-- END FOOTER-->

</div>
<!-- END CONTAINER-->

</body>
</html>