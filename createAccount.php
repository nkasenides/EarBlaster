<!doctype html>
<html>
<head>
<link rel="icon" href="images/appLogo.png">
<meta charset="utf-8">
<title>Create Account - EarBlaster</title>
<?php 
	if (isset($_SESSION["userid"])) {
		include("php/getTheme.php"); 
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
<link href="loginStyle.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<!--PAGE CONTAINER-->
<div class="container">

<!-- HEADER -->
  <div class="header">
  <!--Top section-->
  <div> 
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
  
  	<!--About button-->
       <form action="about.php" class="panelItem">
        <input type="submit" value="About" class="panelButton" style="background:url(images/about.png) no-repeat center; background-size:100px 100px;">
      </form>
  
  
  	<!--Login Button-->
       <form action="login.php" class="panelItem">
        <input type="submit" value="Log In" class="panelButton" style="background:url(images/account.png) no-repeat center; background-size:100px 100px;">
      </form>

  </div>
  <!--End Panel-->
  
</div>
<!-- END HEADER -->

<!-- CONTENT -->
<div class="content">

<!-- LOGIN FORM -->
<div class="loginForm">
	<?php 
		if (isset($_GET["status"])) {
			$status = $_GET["status"];
			if ($status == "userExists") {
				echo '<p class="error"> The username you entered already exists. </p>';
			}//end if user exists
			else if ($status == "passwordsDontMatch") {
				echo '<p class="error"> The passwords you entered do not match. </p>';
			}//end if passwords dont match
			else if ($status == "fail") {
				echo '<p class="error"> Failed to create user. </p>';
			}//end if sql failure to create user
			else if ($status == "badUsername") {
				echo '<p class="error"> Usernames may not start with a number. </p>';
			}//end if sql failure to create user
		}//end is isset()
	
	?>
    
    <script type="text/javascript" src="js/avoidSpace.js"> </script>

	<form name="createUserForm" method="post" action="php/createUser.php" >
	<p>Enter your information below to create an account:</p>
	<p>
	  <input type="text" onkeypress="return AvoidSpace(event)" name="user" placeholder="Username..." size="20" value="" class="text" required>
	</p>
	<p>
	  <input type="password" name="password" placeholder="Password..." size="20" value="" class="text"  required>
	</p>
	<p>
	  <input type="password" name="passwordConfirm" placeholder="Confirm Password..." size="20" value="" class="text"  required>
	</p>
	<p><input type="submit" name="Submit" value=" Create Account " class="button">
	</p>
	</form>
</div>
<!-- END LOGIN FORM -->


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